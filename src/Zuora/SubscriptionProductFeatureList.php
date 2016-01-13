<?php

namespace Zuora;

class SubscriptionProductFeatureList
{

    /**
     * @var SubscriptionProductFeature $SubscriptionProductFeature
     */
    protected $SubscriptionProductFeature = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubscriptionProductFeature
     */
    public function getSubscriptionProductFeature()
    {
      return $this->SubscriptionProductFeature;
    }

    /**
     * @param SubscriptionProductFeature $SubscriptionProductFeature
     * @return \Zuora\SubscriptionProductFeatureList
     */
    public function setSubscriptionProductFeature($SubscriptionProductFeature)
    {
      $this->SubscriptionProductFeature = $SubscriptionProductFeature;
      return $this;
    }

}
