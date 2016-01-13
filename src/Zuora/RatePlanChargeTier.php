<?php

namespace Zuora;

class RatePlanChargeTier extends zObject
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
     * @var ID $RatePlanChargeId
     */
    protected $RatePlanChargeId = null;

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
     * @return \Zuora\RatePlanChargeTier
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
     * @return \Zuora\RatePlanChargeTier
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
     * @return float
     */
    public function getEndingUnit()
    {
      return $this->EndingUnit;
    }

    /**
     * @param float $EndingUnit
     * @return \Zuora\RatePlanChargeTier
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
     * @return \Zuora\RatePlanChargeTier
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
     * @return \Zuora\RatePlanChargeTier
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
     * @return \Zuora\RatePlanChargeTier
     */
    public function setPriceFormat($PriceFormat)
    {
      $this->PriceFormat = $PriceFormat;
      return $this;
    }

    /**
     * @return ID
     */
    public function getRatePlanChargeId()
    {
      return $this->RatePlanChargeId;
    }

    /**
     * @param ID $RatePlanChargeId
     * @return \Zuora\RatePlanChargeTier
     */
    public function setRatePlanChargeId($RatePlanChargeId)
    {
      $this->RatePlanChargeId = $RatePlanChargeId;
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
     * @return \Zuora\RatePlanChargeTier
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
     * @return \Zuora\RatePlanChargeTier
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
     * @return \Zuora\RatePlanChargeTier
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
     * @return \Zuora\RatePlanChargeTier
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
