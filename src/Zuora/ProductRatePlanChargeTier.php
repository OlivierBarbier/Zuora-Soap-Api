<?php

namespace Zuora;

class ProductRatePlanChargeTier extends zObject
{

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var float $DiscountPercentage
     */
    protected $DiscountPercentage = null;

    /**
     * @var float $EndingUnit
     */
    protected $EndingUnit = null;

    /**
     * @var boolean $IsOveragePrice
     */
    protected $IsOveragePrice = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $PriceFormat
     */
    protected $PriceFormat = null;

    /**
     * @var ID $ProductRatePlanChargeId
     */
    protected $ProductRatePlanChargeId = null;

    /**
     * @var float $StartingUnit
     */
    protected $StartingUnit = null;

    /**
     * @var int $Tier
     */
    protected $Tier = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ID
     */
    public function getCreatedById()
    {
      return $this->CreatedById;
    }

    /**
     * @param ID $CreatedById
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setCreatedById($CreatedById)
    {
      $this->CreatedById = $CreatedById;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountAmount
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentage()
    {
      return $this->DiscountPercentage;
    }

    /**
     * @param float $DiscountPercentage
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return float
     */
    public function getEndingUnit()
    {
      return $this->EndingUnit;
    }

    /**
     * @param float $EndingUnit
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setEndingUnit($EndingUnit)
    {
      $this->EndingUnit = $EndingUnit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOveragePrice()
    {
      return $this->IsOveragePrice;
    }

    /**
     * @param boolean $IsOveragePrice
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setIsOveragePrice($IsOveragePrice)
    {
      $this->IsOveragePrice = $IsOveragePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceFormat()
    {
      return $this->PriceFormat;
    }

    /**
     * @param string $PriceFormat
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setPriceFormat($PriceFormat)
    {
      $this->PriceFormat = $PriceFormat;
      return $this;
    }

    /**
     * @return ID
     */
    public function getProductRatePlanChargeId()
    {
      return $this->ProductRatePlanChargeId;
    }

    /**
     * @param ID $ProductRatePlanChargeId
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setProductRatePlanChargeId($ProductRatePlanChargeId)
    {
      $this->ProductRatePlanChargeId = $ProductRatePlanChargeId;
      return $this;
    }

    /**
     * @return float
     */
    public function getStartingUnit()
    {
      return $this->StartingUnit;
    }

    /**
     * @param float $StartingUnit
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setStartingUnit($StartingUnit)
    {
      $this->StartingUnit = $StartingUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getTier()
    {
      return $this->Tier;
    }

    /**
     * @param int $Tier
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setTier($Tier)
    {
      $this->Tier = $Tier;
      return $this;
    }

    /**
     * @return ID
     */
    public function getUpdatedById()
    {
      return $this->UpdatedById;
    }

    /**
     * @param ID $UpdatedById
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setUpdatedById($UpdatedById)
    {
      $this->UpdatedById = $UpdatedById;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
      if ($this->UpdatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdatedDate
     * @return \Zuora\ProductRatePlanChargeTier
     */
    public function setUpdatedDate(\DateTime $UpdatedDate = null)
    {
      if ($UpdatedDate == null) {
       $this->UpdatedDate = null;
      } else {
        $this->UpdatedDate = $UpdatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
