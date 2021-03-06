<?php namespace Zuora\Soap;

use SoapVar;

class RatePlanChargeData extends Object
{
    const TYPE_NAMESPACE = 'http://api.zuora.com/';

    protected $zType = 'RatePlanChargeData';

    /**
     * @var RatePlanCharge
     */
    public $zRatePlanCharge;

    /**
     * @var array
     */
    private $_ratePlanChargeTierObjects = array();

    public function __construct(RatePlanCharge  $zRatePlanCharge = null)
    {
        if (isset($zRatePlanCharge)) {
            $this->zRatePlanCharge = $zRatePlanCharge;
        } else {
            $this->zRatePlanCharge = new RatePlanCharge();
        }
    }

    public function addRatePlanChargeTier(RatePlanChargeTier $zRatePlanChargeTier)
    {
        $this->_ratePlanChargeTierObjects[] = $zRatePlanChargeTier;
    }

    public function getSoapVar()
    {
        $ratePlanChargeTierObjects = array();
        foreach ($this->_ratePlanChargeTierObjects as $object) {
            $ratePlanChargeTierObjects[] = $object->getSoapVar();
        }

        return new SoapVar(
            array(
                'RatePlanCharge' => $this->zRatePlanCharge->getSoapVar(),
                'RatePlanChargeTier' => $ratePlanChargeTierObjects,
            ),
            SOAP_ENC_OBJECT,
            $this->zType,
            self::TYPE_NAMESPACE
        );
    }
}
