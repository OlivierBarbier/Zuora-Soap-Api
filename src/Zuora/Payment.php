<?php

namespace Zuora;

class Payment extends zObject
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $AccountingCode
     */
    protected $AccountingCode = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $AppliedCreditBalanceAmount
     */
    protected $AppliedCreditBalanceAmount = null;

    /**
     * @var float $AppliedInvoiceAmount
     */
    protected $AppliedInvoiceAmount = null;

    /**
     * @var string $AuthTransactionId
     */
    protected $AuthTransactionId = null;

    /**
     * @var string $BankIdentificationNumber
     */
    protected $BankIdentificationNumber = null;

    /**
     * @var \DateTime $CancelledOn
     */
    protected $CancelledOn = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var string $Gateway
     */
    protected $Gateway = null;

    /**
     * @var GatewayOptionData $GatewayOptionData
     */
    protected $GatewayOptionData = null;

    /**
     * @var string $GatewayOrderId
     */
    protected $GatewayOrderId = null;

    /**
     * @var string $GatewayResponse
     */
    protected $GatewayResponse = null;

    /**
     * @var string $GatewayResponseCode
     */
    protected $GatewayResponseCode = null;

    /**
     * @var string $GatewayState
     */
    protected $GatewayState = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var InvoicePaymentData $InvoicePaymentData
     */
    protected $InvoicePaymentData = null;

    /**
     * @var \DateTime $MarkedForSubmissionOn
     */
    protected $MarkedForSubmissionOn = null;

    /**
     * @var ID $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @var ID $PaymentMethodSnapshotId
     */
    protected $PaymentMethodSnapshotId = null;

    /**
     * @var string $PaymentNumber
     */
    protected $PaymentNumber = null;

    /**
     * @var string $ReferenceId
     */
    protected $ReferenceId = null;

    /**
     * @var float $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var string $SecondPaymentReferenceId
     */
    protected $SecondPaymentReferenceId = null;

    /**
     * @var string $SEPALastFailedTransactionDate__c
     */
    protected $SEPALastFailedTransactionDate__c = null;

    /**
     * @var string $SEPALastSubmissionDate__c
     */
    protected $SEPALastSubmissionDate__c = null;

    /**
     * @var string $SEPANumSubmissions__c
     */
    protected $SEPANumSubmissions__c = null;

    /**
     * @var string $SEPARejectionCode__c
     */
    protected $SEPARejectionCode__c = null;

    /**
     * @var string $SEPARejectionReason__c
     */
    protected $SEPARejectionReason__c = null;

    /**
     * @var string $SEPAStatus__c
     */
    protected $SEPAStatus__c = null;

    /**
     * @var \DateTime $SettledOn
     */
    protected $SettledOn = null;

    /**
     * @var string $SoftDescriptor
     */
    protected $SoftDescriptor = null;

    /**
     * @var string $SoftDescriptorPhone
     */
    protected $SoftDescriptorPhone = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var string $SourceName
     */
    protected $SourceName = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $SubmittedOn
     */
    protected $SubmittedOn = null;

    /**
     * @var string $TransferredToAccounting
     */
    protected $TransferredToAccounting = null;

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
     * @return ID
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param ID $AccountId
     * @return \Zuora\Payment
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
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
     * @return \Zuora\Payment
     */
    public function setAccountingCode($AccountingCode)
    {
      $this->AccountingCode = $AccountingCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Zuora\Payment
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAppliedCreditBalanceAmount()
    {
      return $this->AppliedCreditBalanceAmount;
    }

    /**
     * @param float $AppliedCreditBalanceAmount
     * @return \Zuora\Payment
     */
    public function setAppliedCreditBalanceAmount($AppliedCreditBalanceAmount)
    {
      $this->AppliedCreditBalanceAmount = $AppliedCreditBalanceAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAppliedInvoiceAmount()
    {
      return $this->AppliedInvoiceAmount;
    }

    /**
     * @param float $AppliedInvoiceAmount
     * @return \Zuora\Payment
     */
    public function setAppliedInvoiceAmount($AppliedInvoiceAmount)
    {
      $this->AppliedInvoiceAmount = $AppliedInvoiceAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthTransactionId()
    {
      return $this->AuthTransactionId;
    }

    /**
     * @param string $AuthTransactionId
     * @return \Zuora\Payment
     */
    public function setAuthTransactionId($AuthTransactionId)
    {
      $this->AuthTransactionId = $AuthTransactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankIdentificationNumber()
    {
      return $this->BankIdentificationNumber;
    }

    /**
     * @param string $BankIdentificationNumber
     * @return \Zuora\Payment
     */
    public function setBankIdentificationNumber($BankIdentificationNumber)
    {
      $this->BankIdentificationNumber = $BankIdentificationNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelledOn()
    {
      if ($this->CancelledOn == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CancelledOn);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CancelledOn
     * @return \Zuora\Payment
     */
    public function setCancelledOn(\DateTime $CancelledOn = null)
    {
      if ($CancelledOn == null) {
       $this->CancelledOn = null;
      } else {
        $this->CancelledOn = $CancelledOn->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Zuora\Payment
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
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
     * @return \Zuora\Payment
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
     * @return \Zuora\Payment
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
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \Zuora\Payment
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
      return $this->Gateway;
    }

    /**
     * @param string $Gateway
     * @return \Zuora\Payment
     */
    public function setGateway($Gateway)
    {
      $this->Gateway = $Gateway;
      return $this;
    }

    /**
     * @return GatewayOptionData
     */
    public function getGatewayOptionData()
    {
      return $this->GatewayOptionData;
    }

    /**
     * @param GatewayOptionData $GatewayOptionData
     * @return \Zuora\Payment
     */
    public function setGatewayOptionData($GatewayOptionData)
    {
      $this->GatewayOptionData = $GatewayOptionData;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayOrderId()
    {
      return $this->GatewayOrderId;
    }

    /**
     * @param string $GatewayOrderId
     * @return \Zuora\Payment
     */
    public function setGatewayOrderId($GatewayOrderId)
    {
      $this->GatewayOrderId = $GatewayOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayResponse()
    {
      return $this->GatewayResponse;
    }

    /**
     * @param string $GatewayResponse
     * @return \Zuora\Payment
     */
    public function setGatewayResponse($GatewayResponse)
    {
      $this->GatewayResponse = $GatewayResponse;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayResponseCode()
    {
      return $this->GatewayResponseCode;
    }

    /**
     * @param string $GatewayResponseCode
     * @return \Zuora\Payment
     */
    public function setGatewayResponseCode($GatewayResponseCode)
    {
      $this->GatewayResponseCode = $GatewayResponseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayState()
    {
      return $this->GatewayState;
    }

    /**
     * @param string $GatewayState
     * @return \Zuora\Payment
     */
    public function setGatewayState($GatewayState)
    {
      $this->GatewayState = $GatewayState;
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
     * @return \Zuora\Payment
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Zuora\Payment
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return InvoicePaymentData
     */
    public function getInvoicePaymentData()
    {
      return $this->InvoicePaymentData;
    }

    /**
     * @param InvoicePaymentData $InvoicePaymentData
     * @return \Zuora\Payment
     */
    public function setInvoicePaymentData($InvoicePaymentData)
    {
      $this->InvoicePaymentData = $InvoicePaymentData;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMarkedForSubmissionOn()
    {
      if ($this->MarkedForSubmissionOn == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MarkedForSubmissionOn);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MarkedForSubmissionOn
     * @return \Zuora\Payment
     */
    public function setMarkedForSubmissionOn(\DateTime $MarkedForSubmissionOn = null)
    {
      if ($MarkedForSubmissionOn == null) {
       $this->MarkedForSubmissionOn = null;
      } else {
        $this->MarkedForSubmissionOn = $MarkedForSubmissionOn->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ID
     */
    public function getPaymentMethodId()
    {
      return $this->PaymentMethodId;
    }

    /**
     * @param ID $PaymentMethodId
     * @return \Zuora\Payment
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPaymentMethodSnapshotId()
    {
      return $this->PaymentMethodSnapshotId;
    }

    /**
     * @param ID $PaymentMethodSnapshotId
     * @return \Zuora\Payment
     */
    public function setPaymentMethodSnapshotId($PaymentMethodSnapshotId)
    {
      $this->PaymentMethodSnapshotId = $PaymentMethodSnapshotId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentNumber()
    {
      return $this->PaymentNumber;
    }

    /**
     * @param string $PaymentNumber
     * @return \Zuora\Payment
     */
    public function setPaymentNumber($PaymentNumber)
    {
      $this->PaymentNumber = $PaymentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
      return $this->ReferenceId;
    }

    /**
     * @param string $ReferenceId
     * @return \Zuora\Payment
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
      return $this;
    }

    /**
     * @return float
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param float $RefundAmount
     * @return \Zuora\Payment
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondPaymentReferenceId()
    {
      return $this->SecondPaymentReferenceId;
    }

    /**
     * @param string $SecondPaymentReferenceId
     * @return \Zuora\Payment
     */
    public function setSecondPaymentReferenceId($SecondPaymentReferenceId)
    {
      $this->SecondPaymentReferenceId = $SecondPaymentReferenceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEPALastFailedTransactionDate__c()
    {
      return $this->SEPALastFailedTransactionDate__c;
    }

    /**
     * @param string $SEPALastFailedTransactionDate__c
     * @return \Zuora\Payment
     */
    public function setSEPALastFailedTransactionDate__c($SEPALastFailedTransactionDate__c)
    {
      $this->SEPALastFailedTransactionDate__c = $SEPALastFailedTransactionDate__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEPALastSubmissionDate__c()
    {
      return $this->SEPALastSubmissionDate__c;
    }

    /**
     * @param string $SEPALastSubmissionDate__c
     * @return \Zuora\Payment
     */
    public function setSEPALastSubmissionDate__c($SEPALastSubmissionDate__c)
    {
      $this->SEPALastSubmissionDate__c = $SEPALastSubmissionDate__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEPANumSubmissions__c()
    {
      return $this->SEPANumSubmissions__c;
    }

    /**
     * @param string $SEPANumSubmissions__c
     * @return \Zuora\Payment
     */
    public function setSEPANumSubmissions__c($SEPANumSubmissions__c)
    {
      $this->SEPANumSubmissions__c = $SEPANumSubmissions__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEPARejectionCode__c()
    {
      return $this->SEPARejectionCode__c;
    }

    /**
     * @param string $SEPARejectionCode__c
     * @return \Zuora\Payment
     */
    public function setSEPARejectionCode__c($SEPARejectionCode__c)
    {
      $this->SEPARejectionCode__c = $SEPARejectionCode__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEPARejectionReason__c()
    {
      return $this->SEPARejectionReason__c;
    }

    /**
     * @param string $SEPARejectionReason__c
     * @return \Zuora\Payment
     */
    public function setSEPARejectionReason__c($SEPARejectionReason__c)
    {
      $this->SEPARejectionReason__c = $SEPARejectionReason__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEPAStatus__c()
    {
      return $this->SEPAStatus__c;
    }

    /**
     * @param string $SEPAStatus__c
     * @return \Zuora\Payment
     */
    public function setSEPAStatus__c($SEPAStatus__c)
    {
      $this->SEPAStatus__c = $SEPAStatus__c;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSettledOn()
    {
      if ($this->SettledOn == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SettledOn);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SettledOn
     * @return \Zuora\Payment
     */
    public function setSettledOn(\DateTime $SettledOn = null)
    {
      if ($SettledOn == null) {
       $this->SettledOn = null;
      } else {
        $this->SettledOn = $SettledOn->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptor()
    {
      return $this->SoftDescriptor;
    }

    /**
     * @param string $SoftDescriptor
     * @return \Zuora\Payment
     */
    public function setSoftDescriptor($SoftDescriptor)
    {
      $this->SoftDescriptor = $SoftDescriptor;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptorPhone()
    {
      return $this->SoftDescriptorPhone;
    }

    /**
     * @param string $SoftDescriptorPhone
     * @return \Zuora\Payment
     */
    public function setSoftDescriptorPhone($SoftDescriptorPhone)
    {
      $this->SoftDescriptorPhone = $SoftDescriptorPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \Zuora\Payment
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceName()
    {
      return $this->SourceName;
    }

    /**
     * @param string $SourceName
     * @return \Zuora\Payment
     */
    public function setSourceName($SourceName)
    {
      $this->SourceName = $SourceName;
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
     * @return \Zuora\Payment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubmittedOn()
    {
      if ($this->SubmittedOn == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SubmittedOn);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SubmittedOn
     * @return \Zuora\Payment
     */
    public function setSubmittedOn(\DateTime $SubmittedOn = null)
    {
      if ($SubmittedOn == null) {
       $this->SubmittedOn = null;
      } else {
        $this->SubmittedOn = $SubmittedOn->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferredToAccounting()
    {
      return $this->TransferredToAccounting;
    }

    /**
     * @param string $TransferredToAccounting
     * @return \Zuora\Payment
     */
    public function setTransferredToAccounting($TransferredToAccounting)
    {
      $this->TransferredToAccounting = $TransferredToAccounting;
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
     * @return \Zuora\Payment
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
     * @return \Zuora\Payment
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
     * @return \Zuora\Payment
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
