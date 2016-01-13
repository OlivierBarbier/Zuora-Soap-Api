<?php

namespace Zuora;

class ProductRatePlan extends zObject
{

    /**
     * @var string $ActiveCurrencies
     */
    protected $ActiveCurrencies = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var date $EffectiveEndDate
     */
    protected $EffectiveEndDate = null;

    /**
     * @var date $EffectiveStartDate
     */
    protected $EffectiveStartDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ID $ProductId
     */
    protected $ProductId = null;

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
     * @return string
     */
    public function getActiveCurrencies()
    {
      return $this->ActiveCurrencies;
    }

    /**
     * @param string $ActiveCurrencies
     * @return \Zuora\ProductRatePlan
     */
    public function setActiveCurrencies($ActiveCurrencies)
    {
      $this->ActiveCurrencies = $ActiveCurrencies;
      return $this;
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
     * @return \Zuora\ProductRatePlan
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
     * @return \Zuora\ProductRatePlan
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
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Zuora\ProductRatePlan
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveEndDate()
    {
      return $this->EffectiveEndDate;
    }

    /**
     * @param date $EffectiveEndDate
     * @return \Zuora\ProductRatePlan
     */
    public function setEffectiveEndDate($EffectiveEndDate)
    {
      $this->EffectiveEndDate = $EffectiveEndDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveStartDate()
    {
      return $this->EffectiveStartDate;
    }

    /**
     * @param date $EffectiveStartDate
     * @return \Zuora\ProductRatePlan
     */
    public function setEffectiveStartDate($EffectiveStartDate)
    {
      $this->EffectiveStartDate = $EffectiveStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Zuora\ProductRatePlan
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ID
     */
    public function getProductId()
    {
      return $this->ProductId;
    }

    /**
     * @param ID $ProductId
     * @return \Zuora\ProductRatePlan
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
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
     * @return \Zuora\ProductRatePlan
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
     * @return \Zuora\ProductRatePlan
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
