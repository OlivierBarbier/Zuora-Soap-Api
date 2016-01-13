<?php

namespace Zuora;

class InvoiceItem extends zObject
{

    /**
     * @var string $AccountingCode
     */
    protected $AccountingCode = null;

    /**
     * @var ID $AppliedToInvoiceItemId
     */
    protected $AppliedToInvoiceItemId = null;

    /**
     * @var float $ChargeAmount
     */
    protected $ChargeAmount = null;

    /**
     * @var \DateTime $ChargeDate
     */
    protected $ChargeDate = null;

    /**
     * @var string $ChargeDescription
     */
    protected $ChargeDescription = null;

    /**
     * @var string $ChargeId
     */
    protected $ChargeId = null;

    /**
     * @var string $ChargeName
     */
    protected $ChargeName = null;

    /**
     * @var string $ChargeNumber
     */
    protected $ChargeNumber = null;

    /**
     * @var string $ChargeType
     */
    protected $ChargeType = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var float $ProcessingType
     */
    protected $ProcessingType = null;

    /**
     * @var string $ProductDescription
     */
    protected $ProductDescription = null;

    /**
     * @var ID $ProductId
     */
    protected $ProductId = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var string $ProductRatePlanChargeId
     */
    protected $ProductRatePlanChargeId = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var ID $RatePlanChargeId
     */
    protected $RatePlanChargeId = null;

    /**
     * @var string $RevRecCode
     */
    protected $RevRecCode = null;

    /**
     * @var date $RevRecStartDate
     */
    protected $RevRecStartDate = null;

    /**
     * @var string $RevRecTriggerCondition
     */
    protected $RevRecTriggerCondition = null;

    /**
     * @var date $ServiceEndDate
     */
    protected $ServiceEndDate = null;

    /**
     * @var date $ServiceStartDate
     */
    protected $ServiceStartDate = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var ID $SubscriptionId
     */
    protected $SubscriptionId = null;

    /**
     * @var string $SubscriptionNumber
     */
    protected $SubscriptionNumber = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var string $TaxCode
     */
    protected $TaxCode = null;

    /**
     * @var float $TaxExemptAmount
     */
    protected $TaxExemptAmount = null;

    /**
     * @var string $TaxMode
     */
    protected $TaxMode = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var string $UOM
     */
    protected $UOM = null;

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
     * @return \Zuora\InvoiceItem
     */
    public function setAccountingCode($AccountingCode)
    {
      $this->AccountingCode = $AccountingCode;
      return $this;
    }

    /**
     * @return ID
     */
    public function getAppliedToInvoiceItemId()
    {
      return $this->AppliedToInvoiceItemId;
    }

    /**
     * @param ID $AppliedToInvoiceItemId
     * @return \Zuora\InvoiceItem
     */
    public function setAppliedToInvoiceItemId($AppliedToInvoiceItemId)
    {
      $this->AppliedToInvoiceItemId = $AppliedToInvoiceItemId;
      return $this;
    }

    /**
     * @return float
     */
    public function getChargeAmount()
    {
      return $this->ChargeAmount;
    }

    /**
     * @param float $ChargeAmount
     * @return \Zuora\InvoiceItem
     */
    public function setChargeAmount($ChargeAmount)
    {
      $this->ChargeAmount = $ChargeAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getChargeDate()
    {
      if ($this->ChargeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ChargeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ChargeDate
     * @return \Zuora\InvoiceItem
     */
    public function setChargeDate(\DateTime $ChargeDate = null)
    {
      if ($ChargeDate == null) {
       $this->ChargeDate = null;
      } else {
        $this->ChargeDate = $ChargeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeDescription()
    {
      return $this->ChargeDescription;
    }

    /**
     * @param string $ChargeDescription
     * @return \Zuora\InvoiceItem
     */
    public function setChargeDescription($ChargeDescription)
    {
      $this->ChargeDescription = $ChargeDescription;
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
     * @return \Zuora\InvoiceItem
     */
    public function setChargeId($ChargeId)
    {
      $this->ChargeId = $ChargeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeName()
    {
      return $this->ChargeName;
    }

    /**
     * @param string $ChargeName
     * @return \Zuora\InvoiceItem
     */
    public function setChargeName($ChargeName)
    {
      $this->ChargeName = $ChargeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeNumber()
    {
      return $this->ChargeNumber;
    }

    /**
     * @param string $ChargeNumber
     * @return \Zuora\InvoiceItem
     */
    public function setChargeNumber($ChargeNumber)
    {
      $this->ChargeNumber = $ChargeNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeType()
    {
      return $this->ChargeType;
    }

    /**
     * @param string $ChargeType
     * @return \Zuora\InvoiceItem
     */
    public function setChargeType($ChargeType)
    {
      $this->ChargeType = $ChargeType;
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
     * @return \Zuora\InvoiceItem
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
     * @return \Zuora\InvoiceItem
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
     * @return ID
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param ID $InvoiceId
     * @return \Zuora\InvoiceItem
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return float
     */
    public function getProcessingType()
    {
      return $this->ProcessingType;
    }

    /**
     * @param float $ProcessingType
     * @return \Zuora\InvoiceItem
     */
    public function setProcessingType($ProcessingType)
    {
      $this->ProcessingType = $ProcessingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
      return $this->ProductDescription;
    }

    /**
     * @param string $ProductDescription
     * @return \Zuora\InvoiceItem
     */
    public function setProductDescription($ProductDescription)
    {
      $this->ProductDescription = $ProductDescription;
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
     * @return \Zuora\InvoiceItem
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \Zuora\InvoiceItem
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductRatePlanChargeId()
    {
      return $this->ProductRatePlanChargeId;
    }

    /**
     * @param string $ProductRatePlanChargeId
     * @return \Zuora\InvoiceItem
     */
    public function setProductRatePlanChargeId($ProductRatePlanChargeId)
    {
      $this->ProductRatePlanChargeId = $ProductRatePlanChargeId;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \Zuora\InvoiceItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \Zuora\InvoiceItem
     */
    public function setRatePlanChargeId($RatePlanChargeId)
    {
      $this->RatePlanChargeId = $RatePlanChargeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevRecCode()
    {
      return $this->RevRecCode;
    }

    /**
     * @param string $RevRecCode
     * @return \Zuora\InvoiceItem
     */
    public function setRevRecCode($RevRecCode)
    {
      $this->RevRecCode = $RevRecCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getRevRecStartDate()
    {
      return $this->RevRecStartDate;
    }

    /**
     * @param date $RevRecStartDate
     * @return \Zuora\InvoiceItem
     */
    public function setRevRecStartDate($RevRecStartDate)
    {
      $this->RevRecStartDate = $RevRecStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevRecTriggerCondition()
    {
      return $this->RevRecTriggerCondition;
    }

    /**
     * @param string $RevRecTriggerCondition
     * @return \Zuora\InvoiceItem
     */
    public function setRevRecTriggerCondition($RevRecTriggerCondition)
    {
      $this->RevRecTriggerCondition = $RevRecTriggerCondition;
      return $this;
    }

    /**
     * @return date
     */
    public function getServiceEndDate()
    {
      return $this->ServiceEndDate;
    }

    /**
     * @param date $ServiceEndDate
     * @return \Zuora\InvoiceItem
     */
    public function setServiceEndDate($ServiceEndDate)
    {
      $this->ServiceEndDate = $ServiceEndDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getServiceStartDate()
    {
      return $this->ServiceStartDate;
    }

    /**
     * @param date $ServiceStartDate
     * @return \Zuora\InvoiceItem
     */
    public function setServiceStartDate($ServiceStartDate)
    {
      $this->ServiceStartDate = $ServiceStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return \Zuora\InvoiceItem
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return ID
     */
    public function getSubscriptionId()
    {
      return $this->SubscriptionId;
    }

    /**
     * @param ID $SubscriptionId
     * @return \Zuora\InvoiceItem
     */
    public function setSubscriptionId($SubscriptionId)
    {
      $this->SubscriptionId = $SubscriptionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionNumber()
    {
      return $this->SubscriptionNumber;
    }

    /**
     * @param string $SubscriptionNumber
     * @return \Zuora\InvoiceItem
     */
    public function setSubscriptionNumber($SubscriptionNumber)
    {
      $this->SubscriptionNumber = $SubscriptionNumber;
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
     * @return \Zuora\InvoiceItem
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
     * @return \Zuora\InvoiceItem
     */
    public function setTaxCode($TaxCode)
    {
      $this->TaxCode = $TaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExemptAmount()
    {
      return $this->TaxExemptAmount;
    }

    /**
     * @param float $TaxExemptAmount
     * @return \Zuora\InvoiceItem
     */
    public function setTaxExemptAmount($TaxExemptAmount)
    {
      $this->TaxExemptAmount = $TaxExemptAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxMode()
    {
      return $this->TaxMode;
    }

    /**
     * @param string $TaxMode
     * @return \Zuora\InvoiceItem
     */
    public function setTaxMode($TaxMode)
    {
      $this->TaxMode = $TaxMode;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return \Zuora\InvoiceItem
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getUOM()
    {
      return $this->UOM;
    }

    /**
     * @param string $UOM
     * @return \Zuora\InvoiceItem
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
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
     * @return \Zuora\InvoiceItem
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
     * @return \Zuora\InvoiceItem
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
