<?php

namespace Zuora;

class RatePlanChargeData
{

    /**
     * @var RatePlanCharge $RatePlanCharge
     */
    protected $RatePlanCharge = null;

    /**
     * @var RatePlanChargeTier[] $RatePlanChargeTier
     */
    protected $RatePlanChargeTier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RatePlanCharge
     */
    public function getRatePlanCharge()
    {
      return $this->RatePlanCharge;
    }

    /**
     * @param RatePlanCharge $RatePlanCharge
     * @return \Zuora\RatePlanChargeData
     */
    public function setRatePlanCharge($RatePlanCharge)
    {
      $this->RatePlanCharge = $RatePlanCharge;
      return $this;
    }

    /**
     * @return RatePlanChargeTier[]
     */
    public function getRatePlanChargeTier()
    {
      return $this->RatePlanChargeTier;
    }

    /**
     * @param RatePlanChargeTier[] $RatePlanChargeTier
     * @return \Zuora\RatePlanChargeData
     */
    public function setRatePlanChargeTier(array $RatePlanChargeTier = null)
    {
      $this->RatePlanChargeTier = $RatePlanChargeTier;
      return $this;
    }

}
