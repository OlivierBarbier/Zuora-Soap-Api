<?php

namespace Zuora;

class Account extends zObject
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $AdditionalEmailAddresses
     */
    protected $AdditionalEmailAddresses = null;

    /**
     * @var boolean $AllowInvoiceEdit
     */
    protected $AllowInvoiceEdit = null;

    /**
     * @var boolean $AutoPay
     */
    protected $AutoPay = null;

    /**
     * @var string $aux_accounting_code__c
     */
    protected $aux_accounting_code__c = null;

    /**
     * @var float $Balance
     */
    protected $Balance = null;

    /**
     * @var string $Batch
     */
    protected $Batch = null;

    /**
     * @var string $BcdSettingOption
     */
    protected $BcdSettingOption = null;

    /**
     * @var int $BillCycleDay
     */
    protected $BillCycleDay = null;

    /**
     * @var ID $BillToId
     */
    protected $BillToId = null;

    /**
     * @var ID $CommunicationProfileId
     */
    protected $CommunicationProfileId = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var float $CreditBalance
     */
    protected $CreditBalance = null;

    /**
     * @var string $CrmId
     */
    protected $CrmId = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $CustomerServiceRepName
     */
    protected $CustomerServiceRepName = null;

    /**
     * @var ID $DefaultPaymentMethodId
     */
    protected $DefaultPaymentMethodId = null;

    /**
     * @var boolean $InvoiceDeliveryPrefsEmail
     */
    protected $InvoiceDeliveryPrefsEmail = null;

    /**
     * @var boolean $InvoiceDeliveryPrefsPrint
     */
    protected $InvoiceDeliveryPrefsPrint = null;

    /**
     * @var ID $InvoiceTemplateId
     */
    protected $InvoiceTemplateId = null;

    /**
     * @var date $LastInvoiceDate
     */
    protected $LastInvoiceDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var ID $ParentId
     */
    protected $ParentId = null;

    /**
     * @var string $Paused__c
     */
    protected $Paused__c = null;

    /**
     * @var string $Pauseddate__c
     */
    protected $Pauseddate__c = null;

    /**
     * @var string $Pausedreason__c
     */
    protected $Pausedreason__c = null;

    /**
     * @var string $PaymentGateway
     */
    protected $PaymentGateway = null;

    /**
     * @var string $PaymentTerm
     */
    protected $PaymentTerm = null;

    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

    /**
     * @var string $SalesRepName
     */
    protected $SalesRepName = null;

    /**
     * @var string $sellsy_migrated_client__c
     */
    protected $sellsy_migrated_client__c = null;

    /**
     * @var ID $SoldToId
     */
    protected $SoldToId = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $TaxCompanyCode
     */
    protected $TaxCompanyCode = null;

    /**
     * @var string $TaxExemptCertificateID
     */
    protected $TaxExemptCertificateID = null;

    /**
     * @var string $TaxExemptCertificateType
     */
    protected $TaxExemptCertificateType = null;

    /**
     * @var string $TaxExemptDescription
     */
    protected $TaxExemptDescription = null;

    /**
     * @var date $TaxExemptEffectiveDate
     */
    protected $TaxExemptEffectiveDate = null;

    /**
     * @var date $TaxExemptExpirationDate
     */
    protected $TaxExemptExpirationDate = null;

    /**
     * @var string $TaxExemptIssuingJurisdiction
     */
    protected $TaxExemptIssuingJurisdiction = null;

    /**
     * @var string $TaxExemptStatus
     */
    protected $TaxExemptStatus = null;

    /**
     * @var float $TotalInvoiceBalance
     */
    protected $TotalInvoiceBalance = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    /**
     * @var string $VATId
     */
    protected $VATId = null;

    /**
     * @var string $ZZ01_SourceOfSales__c
     */
    protected $ZZ01_SourceOfSales__c = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \Zuora\Account
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalEmailAddresses()
    {
      return $this->AdditionalEmailAddresses;
    }

    /**
     * @param string $AdditionalEmailAddresses
     * @return \Zuora\Account
     */
    public function setAdditionalEmailAddresses($AdditionalEmailAddresses)
    {
      $this->AdditionalEmailAddresses = $AdditionalEmailAddresses;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowInvoiceEdit()
    {
      return $this->AllowInvoiceEdit;
    }

    /**
     * @param boolean $AllowInvoiceEdit
     * @return \Zuora\Account
     */
    public function setAllowInvoiceEdit($AllowInvoiceEdit)
    {
      $this->AllowInvoiceEdit = $AllowInvoiceEdit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoPay()
    {
      return $this->AutoPay;
    }

    /**
     * @param boolean $AutoPay
     * @return \Zuora\Account
     */
    public function setAutoPay($AutoPay)
    {
      $this->AutoPay = $AutoPay;
      return $this;
    }

    /**
     * @return string
     */
    public function getAux_accounting_code__c()
    {
      return $this->aux_accounting_code__c;
    }

    /**
     * @param string $aux_accounting_code__c
     * @return \Zuora\Account
     */
    public function setAux_accounting_code__c($aux_accounting_code__c)
    {
      $this->aux_accounting_code__c = $aux_accounting_code__c;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param float $Balance
     * @return \Zuora\Account
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param string $Batch
     * @return \Zuora\Account
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return string
     */
    public function getBcdSettingOption()
    {
      return $this->BcdSettingOption;
    }

    /**
     * @param string $BcdSettingOption
     * @return \Zuora\Account
     */
    public function setBcdSettingOption($BcdSettingOption)
    {
      $this->BcdSettingOption = $BcdSettingOption;
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
     * @return \Zuora\Account
     */
    public function setBillCycleDay($BillCycleDay)
    {
      $this->BillCycleDay = $BillCycleDay;
      return $this;
    }

    /**
     * @return ID
     */
    public function getBillToId()
    {
      return $this->BillToId;
    }

    /**
     * @param ID $BillToId
     * @return \Zuora\Account
     */
    public function setBillToId($BillToId)
    {
      $this->BillToId = $BillToId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getCommunicationProfileId()
    {
      return $this->CommunicationProfileId;
    }

    /**
     * @param ID $CommunicationProfileId
     * @return \Zuora\Account
     */
    public function setCommunicationProfileId($CommunicationProfileId)
    {
      $this->CommunicationProfileId = $CommunicationProfileId;
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
     * @return \Zuora\Account
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
     * @return \Zuora\Account
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
    public function getCreditBalance()
    {
      return $this->CreditBalance;
    }

    /**
     * @param float $CreditBalance
     * @return \Zuora\Account
     */
    public function setCreditBalance($CreditBalance)
    {
      $this->CreditBalance = $CreditBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getCrmId()
    {
      return $this->CrmId;
    }

    /**
     * @param string $CrmId
     * @return \Zuora\Account
     */
    public function setCrmId($CrmId)
    {
      $this->CrmId = $CrmId;
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
     * @return \Zuora\Account
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerServiceRepName()
    {
      return $this->CustomerServiceRepName;
    }

    /**
     * @param string $CustomerServiceRepName
     * @return \Zuora\Account
     */
    public function setCustomerServiceRepName($CustomerServiceRepName)
    {
      $this->CustomerServiceRepName = $CustomerServiceRepName;
      return $this;
    }

    /**
     * @return ID
     */
    public function getDefaultPaymentMethodId()
    {
      return $this->DefaultPaymentMethodId;
    }

    /**
     * @param ID $DefaultPaymentMethodId
     * @return \Zuora\Account
     */
    public function setDefaultPaymentMethodId($DefaultPaymentMethodId)
    {
      $this->DefaultPaymentMethodId = $DefaultPaymentMethodId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInvoiceDeliveryPrefsEmail()
    {
      return $this->InvoiceDeliveryPrefsEmail;
    }

    /**
     * @param boolean $InvoiceDeliveryPrefsEmail
     * @return \Zuora\Account
     */
    public function setInvoiceDeliveryPrefsEmail($InvoiceDeliveryPrefsEmail)
    {
      $this->InvoiceDeliveryPrefsEmail = $InvoiceDeliveryPrefsEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInvoiceDeliveryPrefsPrint()
    {
      return $this->InvoiceDeliveryPrefsPrint;
    }

    /**
     * @param boolean $InvoiceDeliveryPrefsPrint
     * @return \Zuora\Account
     */
    public function setInvoiceDeliveryPrefsPrint($InvoiceDeliveryPrefsPrint)
    {
      $this->InvoiceDeliveryPrefsPrint = $InvoiceDeliveryPrefsPrint;
      return $this;
    }

    /**
     * @return ID
     */
    public function getInvoiceTemplateId()
    {
      return $this->InvoiceTemplateId;
    }

    /**
     * @param ID $InvoiceTemplateId
     * @return \Zuora\Account
     */
    public function setInvoiceTemplateId($InvoiceTemplateId)
    {
      $this->InvoiceTemplateId = $InvoiceTemplateId;
      return $this;
    }

    /**
     * @return date
     */
    public function getLastInvoiceDate()
    {
      return $this->LastInvoiceDate;
    }

    /**
     * @param date $LastInvoiceDate
     * @return \Zuora\Account
     */
    public function setLastInvoiceDate($LastInvoiceDate)
    {
      $this->LastInvoiceDate = $LastInvoiceDate;
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
     * @return \Zuora\Account
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
     * @return \Zuora\Account
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return ID
     */
    public function getParentId()
    {
      return $this->ParentId;
    }

    /**
     * @param ID $ParentId
     * @return \Zuora\Account
     */
    public function setParentId($ParentId)
    {
      $this->ParentId = $ParentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaused__c()
    {
      return $this->Paused__c;
    }

    /**
     * @param string $Paused__c
     * @return \Zuora\Account
     */
    public function setPaused__c($Paused__c)
    {
      $this->Paused__c = $Paused__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getPauseddate__c()
    {
      return $this->Pauseddate__c;
    }

    /**
     * @param string $Pauseddate__c
     * @return \Zuora\Account
     */
    public function setPauseddate__c($Pauseddate__c)
    {
      $this->Pauseddate__c = $Pauseddate__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getPausedreason__c()
    {
      return $this->Pausedreason__c;
    }

    /**
     * @param string $Pausedreason__c
     * @return \Zuora\Account
     */
    public function setPausedreason__c($Pausedreason__c)
    {
      $this->Pausedreason__c = $Pausedreason__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGateway()
    {
      return $this->PaymentGateway;
    }

    /**
     * @param string $PaymentGateway
     * @return \Zuora\Account
     */
    public function setPaymentGateway($PaymentGateway)
    {
      $this->PaymentGateway = $PaymentGateway;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentTerm()
    {
      return $this->PaymentTerm;
    }

    /**
     * @param string $PaymentTerm
     * @return \Zuora\Account
     */
    public function setPaymentTerm($PaymentTerm)
    {
      $this->PaymentTerm = $PaymentTerm;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
      return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return \Zuora\Account
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesRepName()
    {
      return $this->SalesRepName;
    }

    /**
     * @param string $SalesRepName
     * @return \Zuora\Account
     */
    public function setSalesRepName($SalesRepName)
    {
      $this->SalesRepName = $SalesRepName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellsy_migrated_client__c()
    {
      return $this->sellsy_migrated_client__c;
    }

    /**
     * @param string $sellsy_migrated_client__c
     * @return \Zuora\Account
     */
    public function setSellsy_migrated_client__c($sellsy_migrated_client__c)
    {
      $this->sellsy_migrated_client__c = $sellsy_migrated_client__c;
      return $this;
    }

    /**
     * @return ID
     */
    public function getSoldToId()
    {
      return $this->SoldToId;
    }

    /**
     * @param ID $SoldToId
     * @return \Zuora\Account
     */
    public function setSoldToId($SoldToId)
    {
      $this->SoldToId = $SoldToId;
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
     * @return \Zuora\Account
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxCompanyCode()
    {
      return $this->TaxCompanyCode;
    }

    /**
     * @param string $TaxCompanyCode
     * @return \Zuora\Account
     */
    public function setTaxCompanyCode($TaxCompanyCode)
    {
      $this->TaxCompanyCode = $TaxCompanyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptCertificateID()
    {
      return $this->TaxExemptCertificateID;
    }

    /**
     * @param string $TaxExemptCertificateID
     * @return \Zuora\Account
     */
    public function setTaxExemptCertificateID($TaxExemptCertificateID)
    {
      $this->TaxExemptCertificateID = $TaxExemptCertificateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptCertificateType()
    {
      return $this->TaxExemptCertificateType;
    }

    /**
     * @param string $TaxExemptCertificateType
     * @return \Zuora\Account
     */
    public function setTaxExemptCertificateType($TaxExemptCertificateType)
    {
      $this->TaxExemptCertificateType = $TaxExemptCertificateType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptDescription()
    {
      return $this->TaxExemptDescription;
    }

    /**
     * @param string $TaxExemptDescription
     * @return \Zuora\Account
     */
    public function setTaxExemptDescription($TaxExemptDescription)
    {
      $this->TaxExemptDescription = $TaxExemptDescription;
      return $this;
    }

    /**
     * @return date
     */
    public function getTaxExemptEffectiveDate()
    {
      return $this->TaxExemptEffectiveDate;
    }

    /**
     * @param date $TaxExemptEffectiveDate
     * @return \Zuora\Account
     */
    public function setTaxExemptEffectiveDate($TaxExemptEffectiveDate)
    {
      $this->TaxExemptEffectiveDate = $TaxExemptEffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTaxExemptExpirationDate()
    {
      return $this->TaxExemptExpirationDate;
    }

    /**
     * @param date $TaxExemptExpirationDate
     * @return \Zuora\Account
     */
    public function setTaxExemptExpirationDate($TaxExemptExpirationDate)
    {
      $this->TaxExemptExpirationDate = $TaxExemptExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptIssuingJurisdiction()
    {
      return $this->TaxExemptIssuingJurisdiction;
    }

    /**
     * @param string $TaxExemptIssuingJurisdiction
     * @return \Zuora\Account
     */
    public function setTaxExemptIssuingJurisdiction($TaxExemptIssuingJurisdiction)
    {
      $this->TaxExemptIssuingJurisdiction = $TaxExemptIssuingJurisdiction;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptStatus()
    {
      return $this->TaxExemptStatus;
    }

    /**
     * @param string $TaxExemptStatus
     * @return \Zuora\Account
     */
    public function setTaxExemptStatus($TaxExemptStatus)
    {
      $this->TaxExemptStatus = $TaxExemptStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalInvoiceBalance()
    {
      return $this->TotalInvoiceBalance;
    }

    /**
     * @param float $TotalInvoiceBalance
     * @return \Zuora\Account
     */
    public function setTotalInvoiceBalance($TotalInvoiceBalance)
    {
      $this->TotalInvoiceBalance = $TotalInvoiceBalance;
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
     * @return \Zuora\Account
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
     * @return \Zuora\Account
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
     * @return string
     */
    public function getVATId()
    {
      return $this->VATId;
    }

    /**
     * @param string $VATId
     * @return \Zuora\Account
     */
    public function setVATId($VATId)
    {
      $this->VATId = $VATId;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ01_SourceOfSales__c()
    {
      return $this->ZZ01_SourceOfSales__c;
    }

    /**
     * @param string $ZZ01_SourceOfSales__c
     * @return \Zuora\Account
     */
    public function setZZ01_SourceOfSales__c($ZZ01_SourceOfSales__c)
    {
      $this->ZZ01_SourceOfSales__c = $ZZ01_SourceOfSales__c;
      return $this;
    }

}
