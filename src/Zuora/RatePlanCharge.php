<?php

namespace Zuora;

class RatePlanCharge extends zObject
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
     * @var date $ChargedThroughDate
     */
    protected $ChargedThroughDate = null;

    /**
     * @var string $ChargeModel
     */
    protected $ChargeModel = null;

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
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var string $DiscountLevel
     */
    protected $DiscountLevel = null;

    /**
     * @var float $DiscountPercentage
     */
    protected $DiscountPercentage = null;

    /**
     * @var float $DMRC
     */
    protected $DMRC = null;

    /**
     * @var float $DTCV
     */
    protected $DTCV = null;

    /**
     * @var date $EffectiveEndDate
     */
    protected $EffectiveEndDate = null;

    /**
     * @var date $EffectiveStartDate
     */
    protected $EffectiveStartDate = null;

    /**
     * @var float $IncludedUnits
     */
    protected $IncludedUnits = null;

    /**
     * @var boolean $IsLastSegment
     */
    protected $IsLastSegment = null;

    /**
     * @var string $ListPriceBase
     */
    protected $ListPriceBase = null;

    /**
     * @var float $MRR
     */
    protected $MRR = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $NumberOfPeriods
     */
    protected $NumberOfPeriods = null;

    /**
     * @var ID $OriginalId
     */
    protected $OriginalId = null;

    /**
     * @var string $OverageCalculationOption
     */
    protected $OverageCalculationOption = null;

    /**
     * @var float $OveragePrice
     */
    protected $OveragePrice = null;

    /**
     * @var string $OverageUnusedUnitsCreditOption
     */
    protected $OverageUnusedUnitsCreditOption = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $PriceChangeOption
     */
    protected $PriceChangeOption = null;

    /**
     * @var float $PriceIncreasePercentage
     */
    protected $PriceIncreasePercentage = null;

    /**
     * @var date $ProcessedThroughDate
     */
    protected $ProcessedThroughDate = null;

    /**
     * @var ID $ProductRatePlanChargeId
     */
    protected $ProductRatePlanChargeId = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var ID $RatePlanId
     */
    protected $RatePlanId = null;

    /**
     * @var string $RevRecCode
     */
    protected $RevRecCode = null;

    /**
     * @var string $RevRecTriggerCondition
     */
    protected $RevRecTriggerCondition = null;

    /**
     * @var float $RolloverBalance
     */
    protected $RolloverBalance = null;

    /**
     * @var int $Segment
     */
    protected $Segment = null;

    /**
     * @var int $SpecificBillingPeriod
     */
    protected $SpecificBillingPeriod = null;

    /**
     * @var float $TCV
     */
    protected $TCV = null;

    /**
     * @var date $TriggerDate
     */
    protected $TriggerDate = null;

    /**
     * @var string $TriggerEvent
     */
    protected $TriggerEvent = null;

    /**
     * @var string $Type__c
     */
    protected $Type__c = null;

    /**
     * @var float $UnusedUnitsCreditRates
     */
    protected $UnusedUnitsCreditRates = null;

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
     * @var int $Version
     */
    protected $Version = null;

    
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
     */
    public function setBillingPeriodAlignment($BillingPeriodAlignment)
    {
      $this->BillingPeriodAlignment = $BillingPeriodAlignment;
      return $this;
    }

    /**
     * @return date
     */
    public function getChargedThroughDate()
    {
      return $this->ChargedThroughDate;
    }

    /**
     * @param date $ChargedThroughDate
     * @return \Zuora\RatePlanCharge
     */
    public function setChargedThroughDate($ChargedThroughDate)
    {
      $this->ChargedThroughDate = $ChargedThroughDate;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setChargeModel($ChargeModel)
    {
      $this->ChargeModel = $ChargeModel;
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setDiscountLevel($DiscountLevel)
    {
      $this->DiscountLevel = $DiscountLevel;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return float
     */
    public function getDMRC()
    {
      return $this->DMRC;
    }

    /**
     * @param float $DMRC
     * @return \Zuora\RatePlanCharge
     */
    public function setDMRC($DMRC)
    {
      $this->DMRC = $DMRC;
      return $this;
    }

    /**
     * @return float
     */
    public function getDTCV()
    {
      return $this->DTCV;
    }

    /**
     * @param float $DTCV
     * @return \Zuora\RatePlanCharge
     */
    public function setDTCV($DTCV)
    {
      $this->DTCV = $DTCV;
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
     */
    public function setEffectiveStartDate($EffectiveStartDate)
    {
      $this->EffectiveStartDate = $EffectiveStartDate;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setIncludedUnits($IncludedUnits)
    {
      $this->IncludedUnits = $IncludedUnits;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLastSegment()
    {
      return $this->IsLastSegment;
    }

    /**
     * @param boolean $IsLastSegment
     * @return \Zuora\RatePlanCharge
     */
    public function setIsLastSegment($IsLastSegment)
    {
      $this->IsLastSegment = $IsLastSegment;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setListPriceBase($ListPriceBase)
    {
      $this->ListPriceBase = $ListPriceBase;
      return $this;
    }

    /**
     * @return float
     */
    public function getMRR()
    {
      return $this->MRR;
    }

    /**
     * @param float $MRR
     * @return \Zuora\RatePlanCharge
     */
    public function setMRR($MRR)
    {
      $this->MRR = $MRR;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPeriods()
    {
      return $this->NumberOfPeriods;
    }

    /**
     * @param int $NumberOfPeriods
     * @return \Zuora\RatePlanCharge
     */
    public function setNumberOfPeriods($NumberOfPeriods)
    {
      $this->NumberOfPeriods = $NumberOfPeriods;
      return $this;
    }

    /**
     * @return ID
     */
    public function getOriginalId()
    {
      return $this->OriginalId;
    }

    /**
     * @param ID $OriginalId
     * @return \Zuora\RatePlanCharge
     */
    public function setOriginalId($OriginalId)
    {
      $this->OriginalId = $OriginalId;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setOverageCalculationOption($OverageCalculationOption)
    {
      $this->OverageCalculationOption = $OverageCalculationOption;
      return $this;
    }

    /**
     * @return float
     */
    public function getOveragePrice()
    {
      return $this->OveragePrice;
    }

    /**
     * @param float $OveragePrice
     * @return \Zuora\RatePlanCharge
     */
    public function setOveragePrice($OveragePrice)
    {
      $this->OveragePrice = $OveragePrice;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setOverageUnusedUnitsCreditOption($OverageUnusedUnitsCreditOption)
    {
      $this->OverageUnusedUnitsCreditOption = $OverageUnusedUnitsCreditOption;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
     */
    public function setPriceIncreasePercentage($PriceIncreasePercentage)
    {
      $this->PriceIncreasePercentage = $PriceIncreasePercentage;
      return $this;
    }

    /**
     * @return date
     */
    public function getProcessedThroughDate()
    {
      return $this->ProcessedThroughDate;
    }

    /**
     * @param date $ProcessedThroughDate
     * @return \Zuora\RatePlanCharge
     */
    public function setProcessedThroughDate($ProcessedThroughDate)
    {
      $this->ProcessedThroughDate = $ProcessedThroughDate;
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return ID
     */
    public function getRatePlanId()
    {
      return $this->RatePlanId;
    }

    /**
     * @param ID $RatePlanId
     * @return \Zuora\RatePlanCharge
     */
    public function setRatePlanId($RatePlanId)
    {
      $this->RatePlanId = $RatePlanId;
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
     */
    public function setRevRecTriggerCondition($RevRecTriggerCondition)
    {
      $this->RevRecTriggerCondition = $RevRecTriggerCondition;
      return $this;
    }

    /**
     * @return float
     */
    public function getRolloverBalance()
    {
      return $this->RolloverBalance;
    }

    /**
     * @param float $RolloverBalance
     * @return \Zuora\RatePlanCharge
     */
    public function setRolloverBalance($RolloverBalance)
    {
      $this->RolloverBalance = $RolloverBalance;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegment()
    {
      return $this->Segment;
    }

    /**
     * @param int $Segment
     * @return \Zuora\RatePlanCharge
     */
    public function setSegment($Segment)
    {
      $this->Segment = $Segment;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setSpecificBillingPeriod($SpecificBillingPeriod)
    {
      $this->SpecificBillingPeriod = $SpecificBillingPeriod;
      return $this;
    }

    /**
     * @return float
     */
    public function getTCV()
    {
      return $this->TCV;
    }

    /**
     * @param float $TCV
     * @return \Zuora\RatePlanCharge
     */
    public function setTCV($TCV)
    {
      $this->TCV = $TCV;
      return $this;
    }

    /**
     * @return date
     */
    public function getTriggerDate()
    {
      return $this->TriggerDate;
    }

    /**
     * @param date $TriggerDate
     * @return \Zuora\RatePlanCharge
     */
    public function setTriggerDate($TriggerDate)
    {
      $this->TriggerDate = $TriggerDate;
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
     * @return \Zuora\RatePlanCharge
     */
    public function setTriggerEvent($TriggerEvent)
    {
      $this->TriggerEvent = $TriggerEvent;
      return $this;
    }

    /**
     * @return string
     */
    public function getType__c()
    {
      return $this->Type__c;
    }

    /**
     * @param string $Type__c
     * @return \Zuora\RatePlanCharge
     */
    public function setType__c($Type__c)
    {
      $this->Type__c = $Type__c;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnusedUnitsCreditRates()
    {
      return $this->UnusedUnitsCreditRates;
    }

    /**
     * @param float $UnusedUnitsCreditRates
     * @return \Zuora\RatePlanCharge
     */
    public function setUnusedUnitsCreditRates($UnusedUnitsCreditRates)
    {
      $this->UnusedUnitsCreditRates = $UnusedUnitsCreditRates;
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
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
     * @return \Zuora\RatePlanCharge
     */
    public function setUseDiscountSpecificAccountingCode($UseDiscountSpecificAccountingCode)
    {
      $this->UseDiscountSpecificAccountingCode = $UseDiscountSpecificAccountingCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \Zuora\RatePlanCharge
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
