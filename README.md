# Zuora SOAP API for PHP

[![Latest Stable Version](https://poser.pugx.org/olivierbarbier/zuora-soap-api/v/stable)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![Total Downloads](https://poser.pugx.org/olivierbarbier/zuora-soap-api/downloads)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![Latest Unstable Version](https://poser.pugx.org/olivierbarbier/zuora-soap-api/v/unstable)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![License](https://poser.pugx.org/olivierbarbier/zuora-soap-api/license)](https://packagist.org/packages/olivierbarbier/zuora-soap-api)

## Installing Zuora SOAP API 

```bash
composer require olivierbarbier/zuora-soap-api
```

## Example: performing a ZOQL query

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

If you want more examples please have a look at [![Zuora PHP Quickstart Version](https://poser.pugx.org/olivierbarbier/zuora-soap-api/v/stable)](Zuora PHP Quickstart https://github.com/OlivierBarbier/php-quickstart) 
