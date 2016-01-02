<?php namespace OlivierBarbier\Zapi;

class ProductRatePlanChargeTier extends Object
{
    protected $zType = 'ProductRatePlanChargeTier';

    public function __construct()
    {
        $this->_data = array(
            'ProductRatePlanTierId' => null,
        );
    }
}
