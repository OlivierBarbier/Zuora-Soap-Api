<?php

namespace Zuora;

class ProductRatePlanCharge extends zObject
{

    /**
     * @var string $AccountingCode
     */
    protected $AccountingCode = null;

    /**
     * @var string $ApplyDiscountTo
     */
    protected $ApplyDiscountTo = null;

    /**
     * @var int $BillCycleDay
     */
    protected $BillCycleDay = null;

    /**
     * @var string $BillCycleType
     */
    protected $BillCycleType = null;

    /**
     * @var string $BillingPeriod
     */
    protected $BillingPeriod = null;

    /**
     * @var string $BillingPeriodAlignment
     */
    protected $BillingPeriodAlignment = null;

    /**
     * @var string $ChargeModel
     */
    protected $ChargeModel = null;

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
     * @var float $DefaultQuantity
     */
    protected $DefaultQuantity = null;

    /**
     * @var string $DeferredRevenueAccount
     */
    protected $DeferredRevenueAccount = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DiscountLevel
     */
    protected $DiscountLevel = null;

    /**
     * @var float $IncludedUnits
     */
    protected $IncludedUnits = null;

    /**
     * @var boolean $LegacyRevenueReporting
     */
    protected $LegacyRevenueReporting = null;

    /**
     * @var string $ListPriceBase
     */
    protected $ListPriceBase = null;

    /**
     * @var float $MaxQuantity
     */
    protected $MaxQuantity = null;

    /**
     * @var float $MinQuantity
     */
    protected $MinQuantity = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $NumberOfPeriod
     */
    protected $NumberOfPeriod = null;

    /**
     * @var string $OverageCalculationOption
     */
    protected $OverageCalculationOption = null;

    /**
     * @var string $OverageUnusedUnitsCreditOption
     */
    protected $OverageUnusedUnitsCreditOption = null;

    /**
     * @var string $PriceChangeOption
     */
    protected $PriceChangeOption = null;

    /**
     * @var float $PriceIncreasePercentage
     */
    protected $PriceIncreasePercentage = null;

    /**
     * @var ProductRatePlanChargeTierData $ProductRatePlanChargeTierData
     */
    protected $ProductRatePlanChargeTierData = null;

    /**
     * @var ID $ProductRatePlanId
     */
    protected $ProductRatePlanId = null;

    /**
     * @var string $RecognizedRevenueAccount
     */
    protected $RecognizedRevenueAccount = null;

    /**
     * @var string $RevenueRecognitionRuleName
     */
    protected $RevenueRecognitionRuleName = null;

    /**
     * @var string $RevRecCode
     */
    protected $RevRecCode = null;

    /**
     * @var string $RevRecTriggerCondition
     */
    protected $RevRecTriggerCondition = null;

    /**
     * @var string $SmoothingModel
     */
    protected $SmoothingModel = null;

    /**
     * @var int $SpecificBillingPeriod
     */
    protected $SpecificBillingPeriod = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var string $TaxCode
     */
    protected $TaxCode = null;

    /**
     * @var string $TaxMode
     */
    protected $TaxMode = null;

    /**
     * @var string $TriggerEvent
     */
    protected $TriggerEvent = null;

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

    /**
     * @var int $UpToPeriods
     */
    protected $UpToPeriods = null;

    /**
     * @var string $UsageRecordRatingOption
     */
    protected $UsageRecordRatingOption = null;

    /**
     * @var boolean $UseDiscountSpecificAccountingCode
     */
    protected $UseDiscountSpecificAccountingCode = null;

    /**
     * @var boolean $UseTenantDefaultForPriceChange
     */
    protected $UseTenantDefaultForPriceChange = null;

    
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
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setAccountingCode($AccountingCode)
    {
      $this->AccountingCode = $AccountingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplyDiscountTo()
    {
      return $this->ApplyDiscountTo;
    }

    /**
     * @param string $ApplyDiscountTo
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setApplyDiscountTo($ApplyDiscountTo)
    {
      $this->ApplyDiscountTo = $ApplyDiscountTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillCycleDay()
    {
      return $this->BillCycleDay;
    }

    /**
     * @param int $BillCycleDay
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setBillCycleDay($BillCycleDay)
    {
      $this->BillCycleDay = $BillCycleDay;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillCycleType()
    {
      return $this->BillCycleType;
    }

    /**
     * @param string $BillCycleType
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setBillCycleType($BillCycleType)
    {
      $this->BillCycleType = $BillCycleType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingPeriod()
    {
      return $this->BillingPeriod;
    }

    /**
     * @param string $BillingPeriod
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setBillingPeriod($BillingPeriod)
    {
      $this->BillingPeriod = $BillingPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingPeriodAlignment()
    {
      return $this->BillingPeriodAlignment;
    }

    /**
     * @param string $BillingPeriodAlignment
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setBillingPeriodAlignment($BillingPeriodAlignment)
    {
      $this->BillingPeriodAlignment = $BillingPeriodAlignment;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeModel()
    {
      return $this->ChargeModel;
    }

    /**
     * @param string $ChargeModel
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setChargeModel($ChargeModel)
    {
      $this->ChargeModel = $ChargeModel;
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
     * @return \Zuora\ProductRatePlanCharge
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
     * @return \Zuora\ProductRatePlanCharge
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
     * @return \Zuora\ProductRatePlanCharge
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
    public function getDefaultQuantity()
    {
      return $this->DefaultQuantity;
    }

    /**
     * @param float $DefaultQuantity
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setDefaultQuantity($DefaultQuantity)
    {
      $this->DefaultQuantity = $DefaultQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeferredRevenueAccount()
    {
      return $this->DeferredRevenueAccount;
    }

    /**
     * @param string $DeferredRevenueAccount
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setDeferredRevenueAccount($DeferredRevenueAccount)
    {
      $this->DeferredRevenueAccount = $DeferredRevenueAccount;
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
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountLevel()
    {
      return $this->DiscountLevel;
    }

    /**
     * @param string $DiscountLevel
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setDiscountLevel($DiscountLevel)
    {
      $this->DiscountLevel = $DiscountLevel;
      return $this;
    }

    /**
     * @return float
     */
    public function getIncludedUnits()
    {
      return $this->IncludedUnits;
    }

    /**
     * @param float $IncludedUnits
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setIncludedUnits($IncludedUnits)
    {
      $this->IncludedUnits = $IncludedUnits;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLegacyRevenueReporting()
    {
      return $this->LegacyRevenueReporting;
    }

    /**
     * @param boolean $LegacyRevenueReporting
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setLegacyRevenueReporting($LegacyRevenueReporting)
    {
      $this->LegacyRevenueReporting = $LegacyRevenueReporting;
      return $this;
    }

    /**
     * @return string
     */
    public function getListPriceBase()
    {
      return $this->ListPriceBase;
    }

    /**
     * @param string $ListPriceBase
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setListPriceBase($ListPriceBase)
    {
      $this->ListPriceBase = $ListPriceBase;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxQuantity()
    {
      return $this->MaxQuantity;
    }

    /**
     * @param float $MaxQuantity
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setMaxQuantity($MaxQuantity)
    {
      $this->MaxQuantity = $MaxQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinQuantity()
    {
      return $this->MinQuantity;
    }

    /**
     * @param float $MinQuantity
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setMinQuantity($MinQuantity)
    {
      $this->MinQuantity = $MinQuantity;
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
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPeriod()
    {
      return $this->NumberOfPeriod;
    }

    /**
     * @param int $NumberOfPeriod
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setNumberOfPeriod($NumberOfPeriod)
    {
      $this->NumberOfPeriod = $NumberOfPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverageCalculationOption()
    {
      return $this->OverageCalculationOption;
    }

    /**
     * @param string $OverageCalculationOption
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setOverageCalculationOption($OverageCalculationOption)
    {
      $this->OverageCalculationOption = $OverageCalculationOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverageUnusedUnitsCreditOption()
    {
      return $this->OverageUnusedUnitsCreditOption;
    }

    /**
     * @param string $OverageUnusedUnitsCreditOption
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setOverageUnusedUnitsCreditOption($OverageUnusedUnitsCreditOption)
    {
      $this->OverageUnusedUnitsCreditOption = $OverageUnusedUnitsCreditOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceChangeOption()
    {
      return $this->PriceChangeOption;
    }

    /**
     * @param string $PriceChangeOption
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setPriceChangeOption($PriceChangeOption)
    {
      $this->PriceChangeOption = $PriceChangeOption;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceIncreasePercentage()
    {
      return $this->PriceIncreasePercentage;
    }

    /**
     * @param float $PriceIncreasePercentage
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setPriceIncreasePercentage($PriceIncreasePercentage)
    {
      $this->PriceIncreasePercentage = $PriceIncreasePercentage;
      return $this;
    }

    /**
     * @return ProductRatePlanChargeTierData
     */
    public function getProductRatePlanChargeTierData()
    {
      return $this->ProductRatePlanChargeTierData;
    }

    /**
     * @param ProductRatePlanChargeTierData $ProductRatePlanChargeTierData
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setProductRatePlanChargeTierData($ProductRatePlanChargeTierData)
    {
      $this->ProductRatePlanChargeTierData = $ProductRatePlanChargeTierData;
      return $this;
    }

    /**
     * @return ID
     */
    public function getProductRatePlanId()
    {
      return $this->ProductRatePlanId;
    }

    /**
     * @param ID $ProductRatePlanId
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setProductRatePlanId($ProductRatePlanId)
    {
      $this->ProductRatePlanId = $ProductRatePlanId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecognizedRevenueAccount()
    {
      return $this->RecognizedRevenueAccount;
    }

    /**
     * @param string $RecognizedRevenueAccount
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setRecognizedRevenueAccount($RecognizedRevenueAccount)
    {
      $this->RecognizedRevenueAccount = $RecognizedRevenueAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevenueRecognitionRuleName()
    {
      return $this->RevenueRecognitionRuleName;
    }

    /**
     * @param string $RevenueRecognitionRuleName
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setRevenueRecognitionRuleName($RevenueRecognitionRuleName)
    {
      $this->RevenueRecognitionRuleName = $RevenueRecognitionRuleName;
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
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setRevRecCode($RevRecCode)
    {
      $this->RevRecCode = $RevRecCode;
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
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setRevRecTriggerCondition($RevRecTriggerCondition)
    {
      $this->RevRecTriggerCondition = $RevRecTriggerCondition;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmoothingModel()
    {
      return $this->SmoothingModel;
    }

    /**
     * @param string $SmoothingModel
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setSmoothingModel($SmoothingModel)
    {
      $this->SmoothingModel = $SmoothingModel;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpecificBillingPeriod()
    {
      return $this->SpecificBillingPeriod;
    }

    /**
     * @param int $SpecificBillingPeriod
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setSpecificBillingPeriod($SpecificBillingPeriod)
    {
      $this->SpecificBillingPeriod = $SpecificBillingPeriod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxable()
    {
      return $this->Taxable;
    }

    /**
     * @param boolean $Taxable
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setTaxable($Taxable)
    {
      $this->Taxable = $Taxable;
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
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setTaxCode($TaxCode)
    {
      $this->TaxCode = $TaxCode;
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
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setTaxMode($TaxMode)
    {
      $this->TaxMode = $TaxMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTriggerEvent()
    {
      return $this->TriggerEvent;
    }

    /**
     * @param string $TriggerEvent
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setTriggerEvent($TriggerEvent)
    {
      $this->TriggerEvent = $TriggerEvent;
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
     * @return \Zuora\ProductRatePlanCharge
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
     * @return \Zuora\ProductRatePlanCharge
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
     * @return \Zuora\ProductRatePlanCharge
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
     * @return int
     */
    public function getUpToPeriods()
    {
      return $this->UpToPeriods;
    }

    /**
     * @param int $UpToPeriods
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setUpToPeriods($UpToPeriods)
    {
      $this->UpToPeriods = $UpToPeriods;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsageRecordRatingOption()
    {
      return $this->UsageRecordRatingOption;
    }

    /**
     * @param string $UsageRecordRatingOption
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setUsageRecordRatingOption($UsageRecordRatingOption)
    {
      $this->UsageRecordRatingOption = $UsageRecordRatingOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDiscountSpecificAccountingCode()
    {
      return $this->UseDiscountSpecificAccountingCode;
    }

    /**
     * @param boolean $UseDiscountSpecificAccountingCode
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setUseDiscountSpecificAccountingCode($UseDiscountSpecificAccountingCode)
    {
      $this->UseDiscountSpecificAccountingCode = $UseDiscountSpecificAccountingCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseTenantDefaultForPriceChange()
    {
      return $this->UseTenantDefaultForPriceChange;
    }

    /**
     * @param boolean $UseTenantDefaultForPriceChange
     * @return \Zuora\ProductRatePlanCharge
     */
    public function setUseTenantDefaultForPriceChange($UseTenantDefaultForPriceChange)
    {
      $this->UseTenantDefaultForPriceChange = $UseTenantDefaultForPriceChange;
      return $this;
    }

}
