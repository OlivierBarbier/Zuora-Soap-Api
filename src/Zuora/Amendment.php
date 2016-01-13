<?php

namespace Zuora;

class Amendment extends zObject
{

    /**
     * @var boolean $AutoRenew
     */
    protected $AutoRenew = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var date $ContractEffectiveDate
     */
    protected $ContractEffectiveDate = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var date $CustomerAcceptanceDate
     */
    protected $CustomerAcceptanceDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ID $DestinationAccountId
     */
    protected $DestinationAccountId = null;

    /**
     * @var ID $DestinationInvoiceOwnerId
     */
    protected $DestinationInvoiceOwnerId = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var int $InitialTerm
     */
    protected $InitialTerm = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var RatePlanData $RatePlanData
     */
    protected $RatePlanData = null;

    /**
     * @var string $RenewalSetting
     */
    protected $RenewalSetting = null;

    /**
     * @var int $RenewalTerm
     */
    protected $RenewalTerm = null;

    /**
     * @var date $ServiceActivationDate
     */
    protected $ServiceActivationDate = null;

    /**
     * @var date $SpecificUpdateDate
     */
    protected $SpecificUpdateDate = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var ID $SubscriptionId
     */
    protected $SubscriptionId = null;

    /**
     * @var date $TermStartDate
     */
    protected $TermStartDate = null;

    /**
     * @var string $TermType
     */
    protected $TermType = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

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
     * @return boolean
     */
    public function getAutoRenew()
    {
      return $this->AutoRenew;
    }

    /**
     * @param boolean $AutoRenew
     * @return \Zuora\Amendment
     */
    public function setAutoRenew($AutoRenew)
    {
      $this->AutoRenew = $AutoRenew;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Zuora\Amendment
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return date
     */
    public function getContractEffectiveDate()
    {
      return $this->ContractEffectiveDate;
    }

    /**
     * @param date $ContractEffectiveDate
     * @return \Zuora\Amendment
     */
    public function setContractEffectiveDate($ContractEffectiveDate)
    {
      $this->ContractEffectiveDate = $ContractEffectiveDate;
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
     * @return \Zuora\Amendment
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
     * @return \Zuora\Amendment
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
     * @return date
     */
    public function getCustomerAcceptanceDate()
    {
      return $this->CustomerAcceptanceDate;
    }

    /**
     * @param date $CustomerAcceptanceDate
     * @return \Zuora\Amendment
     */
    public function setCustomerAcceptanceDate($CustomerAcceptanceDate)
    {
      $this->CustomerAcceptanceDate = $CustomerAcceptanceDate;
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
     * @return \Zuora\Amendment
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ID
     */
    public function getDestinationAccountId()
    {
      return $this->DestinationAccountId;
    }

    /**
     * @param ID $DestinationAccountId
     * @return \Zuora\Amendment
     */
    public function setDestinationAccountId($DestinationAccountId)
    {
      $this->DestinationAccountId = $DestinationAccountId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getDestinationInvoiceOwnerId()
    {
      return $this->DestinationInvoiceOwnerId;
    }

    /**
     * @param ID $DestinationInvoiceOwnerId
     * @return \Zuora\Amendment
     */
    public function setDestinationInvoiceOwnerId($DestinationInvoiceOwnerId)
    {
      $this->DestinationInvoiceOwnerId = $DestinationInvoiceOwnerId;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \Zuora\Amendment
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getInitialTerm()
    {
      return $this->InitialTerm;
    }

    /**
     * @param int $InitialTerm
     * @return \Zuora\Amendment
     */
    public function setInitialTerm($InitialTerm)
    {
      $this->InitialTerm = $InitialTerm;
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
     * @return \Zuora\Amendment
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return RatePlanData
     */
    public function getRatePlanData()
    {
      return $this->RatePlanData;
    }

    /**
     * @param RatePlanData $RatePlanData
     * @return \Zuora\Amendment
     */
    public function setRatePlanData($RatePlanData)
    {
      $this->RatePlanData = $RatePlanData;
      return $this;
    }

    /**
     * @return string
     */
    public function getRenewalSetting()
    {
      return $this->RenewalSetting;
    }

    /**
     * @param string $RenewalSetting
     * @return \Zuora\Amendment
     */
    public function setRenewalSetting($RenewalSetting)
    {
      $this->RenewalSetting = $RenewalSetting;
      return $this;
    }

    /**
     * @return int
     */
    public function getRenewalTerm()
    {
      return $this->RenewalTerm;
    }

    /**
     * @param int $RenewalTerm
     * @return \Zuora\Amendment
     */
    public function setRenewalTerm($RenewalTerm)
    {
      $this->RenewalTerm = $RenewalTerm;
      return $this;
    }

    /**
     * @return date
     */
    public function getServiceActivationDate()
    {
      return $this->ServiceActivationDate;
    }

    /**
     * @param date $ServiceActivationDate
     * @return \Zuora\Amendment
     */
    public function setServiceActivationDate($ServiceActivationDate)
    {
      $this->ServiceActivationDate = $ServiceActivationDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getSpecificUpdateDate()
    {
      return $this->SpecificUpdateDate;
    }

    /**
     * @param date $SpecificUpdateDate
     * @return \Zuora\Amendment
     */
    public function setSpecificUpdateDate($SpecificUpdateDate)
    {
      $this->SpecificUpdateDate = $SpecificUpdateDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Zuora\Amendment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \Zuora\Amendment
     */
    public function setSubscriptionId($SubscriptionId)
    {
      $this->SubscriptionId = $SubscriptionId;
      return $this;
    }

    /**
     * @return date
     */
    public function getTermStartDate()
    {
      return $this->TermStartDate;
    }

    /**
     * @param date $TermStartDate
     * @return \Zuora\Amendment
     */
    public function setTermStartDate($TermStartDate)
    {
      $this->TermStartDate = $TermStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermType()
    {
      return $this->TermType;
    }

    /**
     * @param string $TermType
     * @return \Zuora\Amendment
     */
    public function setTermType($TermType)
    {
      $this->TermType = $TermType;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Zuora\Amendment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \Zuora\Amendment
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
     * @return \Zuora\Amendment
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
