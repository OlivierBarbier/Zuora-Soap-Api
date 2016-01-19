# Zuora SOAP API for PHP

[![Latest Stable Version](https://poser.pugx.org/olivierbarbier/zuora-soap-api/v/stable)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![Total Downloads](https://poser.pugx.org/olivierbarbier/zuora-soap-api/downloads)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![Latest Unstable Version](https://poser.pugx.org/olivierbarbier/zuora-soap-api/v/unstable)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![License](https://poser.pugx.org/olivierbarbier/zuora-soap-api/license)](https://packagist.org/packages/olivierbarbier/zuora-soap-api)

## Installing Zuora SOAP API 

The recommended way to install Zuora SOAP API is through
[Composer](http://getcomposer.org).

Run the Composer command to install the latest stable version of Zuora SOAP API :

```bash
composer require olivierbarbier/zuora-soap-api
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

## Example: performing a ZOQL query

```php
use Zuora\Soap\Api;

$api = Api::getInstance((object) ['wsdl' => 'zuora.17.0.wsdl']);

try {
	$api->login('olivier@1001menus.com', 'olivier2@');

	$query = $api->query('SELECT Id, Name FROM Account');

	var_dump($query);
} catch(\Exception $e) {
	echo '>',$e->getMessage();
	die;
}
```
