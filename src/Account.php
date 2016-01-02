<?php namespace OlivierBarbier\ZApi;

class Account extends Object
{
    protected $zType = 'Account';

    public function __construct()
    {
        $this->_data = array(
            'AccountNumber' => null,
        );
    }
}
