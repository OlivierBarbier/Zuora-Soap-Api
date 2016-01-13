<?php

namespace Zuora;

class TaxationItem extends zObject
{

    /**
     * @var string $AccountingCode
     */
    protected $AccountingCode = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var float $ExemptAmount
     */
    protected $ExemptAmount = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var ID $InvoiceItemId
     */
    protected $InvoiceItemId = null;

    /**
     * @var string $Jurisdiction
     */
    protected $Jurisdiction = null;

    /**
     * @var string $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var string $TaxCode
     */
    protected $TaxCode = null;

    /**
     * @var string $TaxCodeDescription
     */
    protected $TaxCodeDescription = null;

    /**
     * @var date $TaxDate
     */
    protected $TaxDate = null;

    /**
     * @var float $TaxRate
     */
    protected $TaxRate = null;

    /**
     * @var string $TaxRateDescription
     */
    protected $TaxRateDescription = null;

    /**
     * @var string $TaxRateType
     */
    protected $TaxRateType = null;

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
    public function getAccountingCode()
    {
      return $this->AccountingCode;
    }

    /**
     * @param string $AccountingCode
     * @return \Zuora\TaxationItem
     */
    public function setAccountingCode($AccountingCode)
    {
      $this->AccountingCode = $AccountingCode;
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
     * @return \Zuora\TaxationItem
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
     * @return \Zuora\TaxationItem
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
    public function getExemptAmount()
    {
      return $this->ExemptAmount;
    }

    /**
     * @param float $ExemptAmount
     * @return \Zuora\TaxationItem
     */
    public function setExemptAmount($ExemptAmount)
    {
      $this->ExemptAmount = $ExemptAmount;
      return $this;
    }

    /**
     * @return ID
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param ID $InvoiceId
     * @return \Zuora\TaxationItem
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getInvoiceItemId()
    {
      return $this->InvoiceItemId;
    }

    /**
     * @param ID $InvoiceItemId
     * @return \Zuora\TaxationItem
     */
    public function setInvoiceItemId($InvoiceItemId)
    {
      $this->InvoiceItemId = $InvoiceItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getJurisdiction()
    {
      return $this->Jurisdiction;
    }

    /**
     * @param string $Jurisdiction
     * @return \Zuora\TaxationItem
     */
    public function setJurisdiction($Jurisdiction)
    {
      $this->Jurisdiction = $Jurisdiction;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
      return $this->LocationCode;
    }

    /**
     * @param string $LocationCode
     * @return \Zuora\TaxationItem
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
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
     * @return \Zuora\TaxationItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param float $TaxAmount
     * @return \Zuora\TaxationItem
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxCode()
    {
      return $this->TaxCode;
    }

    /**
     * @param string $TaxCode
     * @return \Zuora\TaxationItem
     */
    public function setTaxCode($TaxCode)
    {
      $this->TaxCode = $TaxCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxCodeDescription()
    {
      return $this->TaxCodeDescription;
    }

    /**
     * @param string $TaxCodeDescription
     * @return \Zuora\TaxationItem
     */
    public function setTaxCodeDescription($TaxCodeDescription)
    {
      $this->TaxCodeDescription = $TaxCodeDescription;
      return $this;
    }

    /**
     * @return date
     */
    public function getTaxDate()
    {
      return $this->TaxDate;
    }

    /**
     * @param date $TaxDate
     * @return \Zuora\TaxationItem
     */
    public function setTaxDate($TaxDate)
    {
      $this->TaxDate = $TaxDate;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return \Zuora\TaxationItem
     */
    public function setTaxRate($TaxRate)
    {
      $this->TaxRate = $TaxRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxRateDescription()
    {
      return $this->TaxRateDescription;
    }

    /**
     * @param string $TaxRateDescription
     * @return \Zuora\TaxationItem
     */
    public function setTaxRateDescription($TaxRateDescription)
    {
      $this->TaxRateDescription = $TaxRateDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxRateType()
    {
      return $this->TaxRateType;
    }

    /**
     * @param string $TaxRateType
     * @return \Zuora\TaxationItem
     */
    public function setTaxRateType($TaxRateType)
    {
      $this->TaxRateType = $TaxRateType;
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
     * @return \Zuora\TaxationItem
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
     * @return \Zuora\TaxationItem
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
