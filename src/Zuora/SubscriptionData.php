<?php

namespace Zuora;

class SubscriptionData
{

    /**
     * @var Subscription $Subscription
     */
    protected $Subscription = null;

    /**
     * @var RatePlanData[] $RatePlanData
     */
    protected $RatePlanData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Subscription
     */
    public function getSubscription()
    {
      return $this->Subscription;
    }

    /**
     * @param Subscription $Subscription
     * @return \Zuora\SubscriptionData
     */
    public function setSubscription($Subscription)
    {
      $this->Subscription = $Subscription;
      return $this;
    }

    /**
     * @return RatePlanData[]
     */
    public function getRatePlanData()
    {
      return $this->RatePlanData;
    }

    /**
     * @param RatePlanData[] $RatePlanData
     * @return \Zuora\SubscriptionData
     */
    public function setRatePlanData(array $RatePlanData = null)
    {
      $this->RatePlanData = $RatePlanData;
      return $this;
    }

}
