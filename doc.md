Zuora SOAP Api for PHP developers
=======


## Introduction
Working with Zuora SOAP API (ZSA) is sometimes kind of a pain because of the deprecated library that Zuora offers to PHP developers.

In this short guide, I will help you to walk trough ZSA, and more precisely to show you how to set up a viable ZSA project in PHP.

The project will contain up-to-date PHP classes that represent Zuora domain objects and a specific class (ZuoraService) that will interact with these domain objects and persist them into the Zuora platform.

## Prerequisites
Before we start digging together into ZSA please ensure you have:

* Zuora credentials, preferably those that grant you access to your Zuora sandbox (but it is up to you if you prefer to work in production), 
* a copy of the Zuora wsdl you want to work with.

I assume you have basic knowledge of SOAP concepts (you know what is a wsdl, etc.) and know a little bit about the `SopClient` native PHP class.

## Let's get started

### Zuora's default toolkit and library
If you have never worked with Zuora, a potential starting point could be to have a look at the [zuora php quickstart toolkit](https://github.com/zuora/php-quickstart). 
Unfortunately, the library provided by the toolkit has 4 main disavantages : 

* You can't install the library through composer,
* the library does not take advantage of PHP 5.3.0 namespaces,
* the library is deprecated (it is based on version 17 of the API but version 74 has already been released),
* the library is not maintained (when I wrote this guide the last commit date was Apr 4, 2012).

### An enhanced version

A better start in your experience with Zuora SOAP Api, could be to use my wrapper library which take advantage of PHP namespaces and which you can install with composer.

In order to do so, just `cd` into the root directory of your Zuora project and in a terminal window type `composer require olivierbarbier/zuora-soap-api`.
You will have access to all Zuora domain Objects within the `\Zuora\Soap` namespace. And you will be able to make SOAP calls with the \Zuora\Soap\Api class.

Below is an example showing how to login to Zuora and perform a Zuora Query Object Language (ZOQL) query:

```php
require 'vendor/autoload.php';

use Zuora\Soap\Api;

$api = Api::getInstance((object) ['wsdl' => 'path_to_your_zuora_wsdl']);

try {
    $api->login('your_login', 'your_password');

    $query = $api->query('SELECT Id, Name FROM Account');

    var_dump($query);
} catch(\Exception $e) {
    echo '>',$e->getMessage();
    die;
}
```

### The right way IMHO

The previous approach does not fix the deprecated nature of the Zuora library because it is just a wrapper around it. It fixes the namespace and composer issues only.

If you want an always up-to-date library, meaning a library that  always reflects the latest version of the wsdl, you'll have to generate that library from your wsdl. 

You can easily achieve that goal by using the wonderful [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) by [kasperg](https://github.com/kasperg) and [many community contributors](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator/graphs/contributors).

With this library, you will be able to generate the right PHP classes that fit exactly to the wsdl version you are using (with just a few changes to make Soap calls work properly).

#### First, install wsdl2phpgenerator
```php
composer require wsdl2phpgenerator/wsdl2phpgenerator
```

#### Second, generate the PHP classes from your Zuora wsdl

```php
$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'path_to_your_php_wsdl',
        'outputDir' => 'path_where_you_want_to_ouput_the_genrated_clases',
        'namespaceName' => 'Zuora'
    ))
);
```

At this stage, you've got a set of classes that represent the different Zuora domain objects you want to manipulate.

The most important class is ZuoraService. This class is, obviously not a Zuora object but it is more a technical class which enables you to make SOAP calls to Zuora.

As Zuora requires you to call `login` before you can use any other SOAP calls, you will have to perform some changes in the ZuoraService class. 

### Few changes to ZuoraService class

In the ZuoraService class, you will find the login call represented by a method of the same name. This method returns a session token that you'll have to pass to any other call you'll want to use.

So, in the ZuoraService class, wsld2phpgenerator generates the `login` call that way:

```php
public function login(login $parameters)
{
    return $this->__soapCall('login', array($parameters));
}
```

but you'll have to modify it like below:
```php
public function login(login $parameters)
{
    $loginResponse = $this->__soapCall('login', array($parameters));
    
    $loginResult = $loginResponse->getResult();
    
    $this->__setLocation($loginResult->getServerUrl());

    $this->header = new \SoapHeader(
        'http://api.zuora.com/',
        'SessionHeader',
        array(
        'session' => $loginResult->getSession()
        )
    );

    return $loginResponse;
}
```

and add a protected property named `header`
```php
class ZuoraService [...]
{
    /**
     * @var \SoapHeader
     */
    protected $header;

    [...]
}
```

and modify all methods in ZuoraService that contains an invocation to '__soapCall', for example:

wsdl2phpgenerator gives you:
```php
public function create(create $parameters)
{
    return $this->__soapCall('create', array($parameters));
}
```

but you want the `$header` property to be passed to `__soapCall`:
```php
public function create(create $parameters)
{
    return $this->__soapCall('create', array($parameters), null, $this->header);
}
```

Now you're done with all the modifications, you are ready to make the SOAP calls you want.

As an example, let's create an Account in our sandbox:

```php
require './vendor/autoload.php';

use Zuora\ZuoraService;
use Zuora\Account;
use Zuora\create as Create;
use Zuora\delete as Delete;
use Zuora\login as Login;

$zuoraService = new ZuoraService;

try {
	$loginResponse = $zuoraService->login(new Login(
		'YOUR_LOGIN', 
		'YOUR_PASSWORD'
	));

	$account = new Account;

	$account->setBatch('Batch1')
		->setBillCycleDay(1)
		->setCurrency('EUR')
		->setName('Ceci est un compte de test ')
		->setPaymentTerm('Net 30')
		->setStatus('Draft')
	;

	$zuoraService->create(new Create($account));

} catch (SoapFault $soapFault) {
	echo 'SoapFault: ' . $soapFault->getMessage(), "\n";
}
```
# In conclusion
When you work with generated classes from a wsdl, you are assured to always get the right Zuora classes that perfectly represents what you can do with Zuora API. 


As a final remark, I would like to say that you can generalize that approach to any SOAP webservices. You are not limited to Zuora API.

