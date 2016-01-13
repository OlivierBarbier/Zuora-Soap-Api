<?php

namespace Zuora;

class RatePlanData
{

    /**
     * @var RatePlan $RatePlan
     */
    protected $RatePlan = null;

    /**
     * @var RatePlanChargeData[] $RatePlanChargeData
     */
    protected $RatePlanChargeData = null;

    /**
     * @var SubscriptionProductFeatureList $SubscriptionProductFeatureList
     */
    protected $SubscriptionProductFeatureList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RatePlan
     */
    public function getRatePlan()
    {
      return $this->RatePlan;
    }

    /**
     * @param RatePlan $RatePlan
     * @return \Zuora\RatePlanData
     */
    public function setRatePlan($RatePlan)
    {
      $this->RatePlan = $RatePlan;
      return $this;
    }

    /**
     * @return RatePlanChargeData[]
     */
    public function getRatePlanChargeData()
    {
      return $this->RatePlanChargeData;
    }

    /**
     * @param RatePlanChargeData[] $RatePlanChargeData
     * @return \Zuora\RatePlanData
     */
    public function setRatePlanChargeData(array $RatePlanChargeData = null)
    {
      $this->RatePlanChargeData = $RatePlanChargeData;
      return $this;
    }

    /**
     * @return SubscriptionProductFeatureList
     */
    public function getSubscriptionProductFeatureList()
    {
      return $this->SubscriptionProductFeatureList;
    }

    /**
     * @param SubscriptionProductFeatureList $SubscriptionProductFeatureList
     * @return \Zuora\RatePlanData
     */
    public function setSubscriptionProductFeatureList($SubscriptionProductFeatureList)
    {
      $this->SubscriptionProductFeatureList = $SubscriptionProductFeatureList;
      return $this;
    }

}
