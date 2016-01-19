<?php namespace Zuora\Soap;

use SoapVar;

class SubscriptionData extends Object
{
    const TYPE_NAMESPACE = 'http://api.zuora.com/';

    protected $zType = 'SubscriptionData';

    /**
     * @var Subscription
     */
    public $zSubscription;

    /**
     * @var array
     */
    private $_ratePlanDataObjects = array();

    public function __construct(Subscription $zSubscription = null)
    {
        if (isset($zSubscription)) {
            $this->zSubscription = $zSubscription;
        } else {
            $this->zSubscription = new Subscription();
        }
    }

    public function addRatePlanData(RatePlanData $zRatePlanData)
    {
        $this->_ratePlanDataObjects[] = $zRatePlanData;
    }

    public function getSoapVar()
    {
        foreach ($this->_ratePlanDataObjects as $object) {
            $ratePlanDataObjects[] = $object->getSoapVar();
        }

        return new SoapVar(
            array(
                'Subscription' => $this->zSubscription->getSoapVar(),
                'RatePlanData' => $ratePlanDataObjects,
            ),
            SOAP_ENC_OBJECT,
            $this->zType,
            self::TYPE_NAMESPACE
        );
    }
}
