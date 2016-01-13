<?php

namespace Zuora;

class Subscription extends zObject
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ID $AncestorAccountId
     */
    protected $AncestorAccountId = null;

    /**
     * @var boolean $AutoRenew
     */
    protected $AutoRenew = null;

    /**
     * @var date $CancelledDate
     */
    protected $CancelledDate = null;

    /**
     * @var date $ContractAcceptanceDate
     */
    protected $ContractAcceptanceDate = null;

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
     * @var ID $CreatorAccountId
     */
    protected $CreatorAccountId = null;

    /**
     * @var ID $CreatorInvoiceOwnerId
     */
    protected $CreatorInvoiceOwnerId = null;

    /**
     * @var int $InitialTerm
     */
    protected $InitialTerm = null;

    /**
     * @var ID $InvoiceOwnerId
     */
    protected $InvoiceOwnerId = null;

    /**
     * @var boolean $IsInvoiceSeparate
     */
    protected $IsInvoiceSeparate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var \DateTime $OriginalCreatedDate
     */
    protected $OriginalCreatedDate = null;

    /**
     * @var ID $OriginalId
     */
    protected $OriginalId = null;

    /**
     * @var ID $PreviousSubscriptionId
     */
    protected $PreviousSubscriptionId = null;

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
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var date $SubscriptionEndDate
     */
    protected $SubscriptionEndDate = null;

    /**
     * @var date $SubscriptionStartDate
     */
    protected $SubscriptionStartDate = null;

    /**
     * @var date $TermEndDate
     */
    protected $TermEndDate = null;

    /**
     * @var date $TermStartDate
     */
    protected $TermStartDate = null;

    /**
     * @var string $TermType
     */
    protected $TermType = null;

    /**
     * @var string $Type__c
     */
    protected $Type__c = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    /**
     * @var string $ZZ01_EndCustomer__c
     */
    protected $ZZ01_EndCustomer__c = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ID
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param ID $AccountId
     * @return \Zuora\Subscription
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getAncestorAccountId()
    {
      return $this->AncestorAccountId;
    }

    /**
     * @param ID $AncestorAccountId
     * @return \Zuora\Subscription
     */
    public function setAncestorAccountId($AncestorAccountId)
    {
      $this->AncestorAccountId = $AncestorAccountId;
      return $this;
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
     * @return \Zuora\Subscription
     */
    public function setAutoRenew($AutoRenew)
    {
      $this->AutoRenew = $AutoRenew;
      return $this;
    }

    /**
     * @return date
     */
    public function getCancelledDate()
    {
      return $this->CancelledDate;
    }

    /**
     * @param date $CancelledDate
     * @return \Zuora\Subscription
     */
    public function setCancelledDate($CancelledDate)
    {
      $this->CancelledDate = $CancelledDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getContractAcceptanceDate()
    {
      return $this->ContractAcceptanceDate;
    }

    /**
     * @param date $ContractAcceptanceDate
     * @return \Zuora\Subscription
     */
    public function setContractAcceptanceDate($ContractAcceptanceDate)
    {
      $this->ContractAcceptanceDate = $ContractAcceptanceDate;
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
     * @return \Zuora\Subscription
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
     * @return \Zuora\Subscription
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
     * @return \Zuora\Subscription
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
    public function getCreatorAccountId()
    {
      return $this->CreatorAccountId;
    }

    /**
     * @param ID $CreatorAccountId
     * @return \Zuora\Subscription
     */
    public function setCreatorAccountId($CreatorAccountId)
    {
      $this->CreatorAccountId = $CreatorAccountId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getCreatorInvoiceOwnerId()
    {
      return $this->CreatorInvoiceOwnerId;
    }

    /**
     * @param ID $CreatorInvoiceOwnerId
     * @return \Zuora\Subscription
     */
    public function setCreatorInvoiceOwnerId($CreatorInvoiceOwnerId)
    {
      $this->CreatorInvoiceOwnerId = $CreatorInvoiceOwnerId;
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
     * @return \Zuora\Subscription
     */
    public function setInitialTerm($InitialTerm)
    {
      $this->InitialTerm = $InitialTerm;
      return $this;
    }

    /**
     * @return ID
     */
    public function getInvoiceOwnerId()
    {
      return $this->InvoiceOwnerId;
    }

    /**
     * @param ID $InvoiceOwnerId
     * @return \Zuora\Subscription
     */
    public function setInvoiceOwnerId($InvoiceOwnerId)
    {
      $this->InvoiceOwnerId = $InvoiceOwnerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInvoiceSeparate()
    {
      return $this->IsInvoiceSeparate;
    }

    /**
     * @param boolean $IsInvoiceSeparate
     * @return \Zuora\Subscription
     */
    public function setIsInvoiceSeparate($IsInvoiceSeparate)
    {
      $this->IsInvoiceSeparate = $IsInvoiceSeparate;
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
     * @return \Zuora\Subscription
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Zuora\Subscription
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalCreatedDate()
    {
      if ($this->OriginalCreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OriginalCreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OriginalCreatedDate
     * @return \Zuora\Subscription
     */
    public function setOriginalCreatedDate(\DateTime $OriginalCreatedDate = null)
    {
      if ($OriginalCreatedDate == null) {
       $this->OriginalCreatedDate = null;
      } else {
        $this->OriginalCreatedDate = $OriginalCreatedDate->format(\DateTime::ATOM);
      }
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
     * @return \Zuora\Subscription
     */
    public function setOriginalId($OriginalId)
    {
      $this->OriginalId = $OriginalId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPreviousSubscriptionId()
    {
      return $this->PreviousSubscriptionId;
    }

    /**
     * @param ID $PreviousSubscriptionId
     * @return \Zuora\Subscription
     */
    public function setPreviousSubscriptionId($PreviousSubscriptionId)
    {
      $this->PreviousSubscriptionId = $PreviousSubscriptionId;
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
     * @return \Zuora\Subscription
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
     * @return \Zuora\Subscription
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
     * @return \Zuora\Subscription
     */
    public function setServiceActivationDate($ServiceActivationDate)
    {
      $this->ServiceActivationDate = $ServiceActivationDate;
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
     * @return \Zuora\Subscription
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return date
     */
    public function getSubscriptionEndDate()
    {
      return $this->SubscriptionEndDate;
    }

    /**
     * @param date $SubscriptionEndDate
     * @return \Zuora\Subscription
     */
    public function setSubscriptionEndDate($SubscriptionEndDate)
    {
      $this->SubscriptionEndDate = $SubscriptionEndDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getSubscriptionStartDate()
    {
      return $this->SubscriptionStartDate;
    }

    /**
     * @param date $SubscriptionStartDate
     * @return \Zuora\Subscription
     */
    public function setSubscriptionStartDate($SubscriptionStartDate)
    {
      $this->SubscriptionStartDate = $SubscriptionStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTermEndDate()
    {
      return $this->TermEndDate;
    }

    /**
     * @param date $TermEndDate
     * @return \Zuora\Subscription
     */
    public function setTermEndDate($TermEndDate)
    {
      $this->TermEndDate = $TermEndDate;
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
     * @return \Zuora\Subscription
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
     * @return \Zuora\Subscription
     */
    public function setTermType($TermType)
    {
      $this->TermType = $TermType;
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
     * @return \Zuora\Subscription
     */
    public function setType__c($Type__c)
    {
      $this->Type__c = $Type__c;
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
     * @return \Zuora\Subscription
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
     * @return \Zuora\Subscription
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
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \Zuora\Subscription
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ01_EndCustomer__c()
    {
      return $this->ZZ01_EndCustomer__c;
    }

    /**
     * @param string $ZZ01_EndCustomer__c
     * @return \Zuora\Subscription
     */
    public function setZZ01_EndCustomer__c($ZZ01_EndCustomer__c)
    {
      $this->ZZ01_EndCustomer__c = $ZZ01_EndCustomer__c;
      return $this;
    }

}
