<?php namespace OlivierBarbier\Zapi;

class ProductRatePlanCharge extends Object
{
    protected $zType = 'ProductRatePlanCharge';

    public function __construct()
    {
        $this->_data = array(
            'ProductRatePlanId' => null,
        );
    }
}
