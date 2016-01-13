<?php

namespace Zuora;

class ProductRatePlanChargeTierData
{

    /**
     * @var ProductRatePlanChargeTier[] $ProductRatePlanChargeTier
     */
    protected $ProductRatePlanChargeTier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductRatePlanChargeTier[]
     */
    public function getProductRatePlanChargeTier()
    {
      return $this->ProductRatePlanChargeTier;
    }

    /**
     * @param ProductRatePlanChargeTier[] $ProductRatePlanChargeTier
     * @return \Zuora\ProductRatePlanChargeTierData
     */
    public function setProductRatePlanChargeTier(array $ProductRatePlanChargeTier = null)
    {
      $this->ProductRatePlanChargeTier = $ProductRatePlanChargeTier;
      return $this;
    }

}
