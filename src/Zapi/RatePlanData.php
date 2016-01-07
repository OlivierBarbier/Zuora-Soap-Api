<?php namespace OlivierBarbier\Zapi;

class RatePlanData extends Object
{
    const TYPE_NAMESPACE = 'http://api.zuora.com/';

    protected $zType = 'RatePlanData';

    /**
     * @var RatePlan
     */
    public $zRatePlan;

    /**
     * @var array
     */
    private $_ratePlanChargeDataObjects = array();

    public function __construct(RatePlan  $zRatePlan = null)
    {
        if (isset($zRatePlan)) {
            $this->zRatePlan = $zRatePlan;
        } else {
            $this->zRatePlan = new RatePlan();
        }
    }

    public function addRatePlanChargeData(RatePlanChargeData $zRatePlanChargeData)
    {
        $this->_ratePlanChargeDataObjects[] = $zRatePlanChargeData;
    }

    public function getSoapVar()
    {
        $ratePlanChargeDataObjects = array();
        foreach ($this->_ratePlanChargeDataObjects as $object) {
            $ratePlanChargeDataObjects[] = $object->getSoapVar();
        }

        return new SoapVar(
            array(
                'RatePlan' => $this->zRatePlan->getSoapVar(),
                'RatePlanChargeData' => $ratePlanChargeDataObjects,
            ),
            SOAP_ENC_OBJECT,
            $this->zType,
            self::TYPE_NAMESPACE
        );
    }
}
