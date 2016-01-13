# Zuora SOAP API for PHP

[![Latest Stable Version](https://poser.pugx.org/olivierbarbier/zuora-soap-api/v/stable)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![Total Downloads](https://poser.pugx.org/olivierbarbier/zuora-soap-api/downloads)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![Latest Unstable Version](https://poser.pugx.org/olivierbarbier/zuora-soap-api/v/unstable)](https://packagist.org/packages/olivierbarbier/zuora-soap-api) [![License](https://poser.pugx.org/olivierbarbier/zuora-soap-api/license)](https://packagist.org/packages/olivierbarbier/zuora-soap-api)


## Create an account

```php
<?php
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
	$saveResults = $zuoraService
		->create(new Create($account))
		->getResult();

	foreach($saveResults as $saveResult)
	{
		$accountId = $saveResult->getId();
		echo sprintf("New account Id: %s\n", $accountId);
		$deleteResults = $zuoraService
			->delete(new Delete('Account', $accountId))
			->getResult();
		foreach($deleteResults as $deleteResult)
		{
			if ($deleteResult->getSuccess()) {
				echo sprintf("Deleted account Id: %s\n", $deleteResult->getId());
			}
		}
	}
} catch (SoapFault $soapFault) {
	echo 'SoapFault: ' . $soapFault->getMessage(), "\n";
}
```
