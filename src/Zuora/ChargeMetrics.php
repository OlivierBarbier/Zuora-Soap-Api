<?php

namespace Zuora;

class ChargeMetrics extends zObject
{

    /**
     * @var float $ActualInvoiceValue
     */
    protected $ActualInvoiceValue = null;

    /**
     * @var string $ChargeId
     */
    protected $ChargeId = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var float $ProjectedInvoiceValue
     */
    protected $ProjectedInvoiceValue = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    /**
     * @var date $UpToDate
     */
    protected $UpToDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getActualInvoiceValue()
    {
      return $this->ActualInvoiceValue;
    }

    /**
     * @param float $ActualInvoiceValue
     * @return \Zuora\ChargeMetrics
     */
    public function setActualInvoiceValue($ActualInvoiceValue)
    {
      $this->ActualInvoiceValue = $ActualInvoiceValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeId()
    {
      return $this->ChargeId;
    }

    /**
     * @param string $ChargeId
     * @return \Zuora\ChargeMetrics
     */
    public function setChargeId($ChargeId)
    {
      $this->ChargeId = $ChargeId;
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
     * @return \Zuora\ChargeMetrics
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
     * @return \Zuora\ChargeMetrics
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
    public function getProjectedInvoiceValue()
    {
      return $this->ProjectedInvoiceValue;
    }

    /**
     * @param float $ProjectedInvoiceValue
     * @return \Zuora\ChargeMetrics
     */
    public function setProjectedInvoiceValue($ProjectedInvoiceValue)
    {
      $this->ProjectedInvoiceValue = $ProjectedInvoiceValue;
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
     * @return \Zuora\ChargeMetrics
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
     * @return \Zuora\ChargeMetrics
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

    /**
     * @return date
     */
    public function getUpToDate()
    {
      return $this->UpToDate;
    }

    /**
     * @param date $UpToDate
     * @return \Zuora\ChargeMetrics
     */
    public function setUpToDate($UpToDate)
    {
      $this->UpToDate = $UpToDate;
      return $this;
    }

}
