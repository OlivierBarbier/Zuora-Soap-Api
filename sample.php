<?php
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
