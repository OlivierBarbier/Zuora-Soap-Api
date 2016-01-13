<?php

namespace Zuora;

class Refund extends zObject
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
     * @var string $Gateway
     */
    protected $Gateway = null;

    /**
     * @var GatewayOptionData $GatewayOptionData
     */
    protected $GatewayOptionData = null;

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
     * @var \DateTime $MarkedForSubmissionOn
     */
    protected $MarkedForSubmissionOn = null;

    /**
     * @var string $MethodType
     */
    protected $MethodType = null;

    /**
     * @var ID $PaymentId
     */
    protected $PaymentId = null;

    /**
     * @var ID $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @var ID $PaymentMethodSnapshotId
     */
    protected $PaymentMethodSnapshotId = null;

    /**
     * @var string $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var string $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var date $RefundDate
     */
    protected $RefundDate = null;

    /**
     * @var RefundInvoicePaymentData $RefundInvoicePaymentData
     */
    protected $RefundInvoicePaymentData = null;

    /**
     * @var string $RefundNumber
     */
    protected $RefundNumber = null;

    /**
     * @var \DateTime $RefundTransactionTime
     */
    protected $RefundTransactionTime = null;

    /**
     * @var string $SecondRefundReferenceId
     */
    protected $SecondRefundReferenceId = null;

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
     * @var string $SourceType
     */
    protected $SourceType = null;

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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
    public function getGateway()
    {
      return $this->Gateway;
    }

    /**
     * @param string $Gateway
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
     */
    public function setGatewayOptionData($GatewayOptionData)
    {
      $this->GatewayOptionData = $GatewayOptionData;
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
     */
    public function setGatewayState($GatewayState)
    {
      $this->GatewayState = $GatewayState;
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
     * @return \Zuora\Refund
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
     * @return string
     */
    public function getMethodType()
    {
      return $this->MethodType;
    }

    /**
     * @param string $MethodType
     * @return \Zuora\Refund
     */
    public function setMethodType($MethodType)
    {
      $this->MethodType = $MethodType;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPaymentId()
    {
      return $this->PaymentId;
    }

    /**
     * @param ID $PaymentId
     * @return \Zuora\Refund
     */
    public function setPaymentId($PaymentId)
    {
      $this->PaymentId = $PaymentId;
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
     */
    public function setPaymentMethodSnapshotId($PaymentMethodSnapshotId)
    {
      $this->PaymentMethodSnapshotId = $PaymentMethodSnapshotId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param string $ReasonCode
     * @return \Zuora\Refund
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param string $ReferenceID
     * @return \Zuora\Refund
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return date
     */
    public function getRefundDate()
    {
      return $this->RefundDate;
    }

    /**
     * @param date $RefundDate
     * @return \Zuora\Refund
     */
    public function setRefundDate($RefundDate)
    {
      $this->RefundDate = $RefundDate;
      return $this;
    }

    /**
     * @return RefundInvoicePaymentData
     */
    public function getRefundInvoicePaymentData()
    {
      return $this->RefundInvoicePaymentData;
    }

    /**
     * @param RefundInvoicePaymentData $RefundInvoicePaymentData
     * @return \Zuora\Refund
     */
    public function setRefundInvoicePaymentData($RefundInvoicePaymentData)
    {
      $this->RefundInvoicePaymentData = $RefundInvoicePaymentData;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundNumber()
    {
      return $this->RefundNumber;
    }

    /**
     * @param string $RefundNumber
     * @return \Zuora\Refund
     */
    public function setRefundNumber($RefundNumber)
    {
      $this->RefundNumber = $RefundNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRefundTransactionTime()
    {
      if ($this->RefundTransactionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RefundTransactionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RefundTransactionTime
     * @return \Zuora\Refund
     */
    public function setRefundTransactionTime(\DateTime $RefundTransactionTime = null)
    {
      if ($RefundTransactionTime == null) {
       $this->RefundTransactionTime = null;
      } else {
        $this->RefundTransactionTime = $RefundTransactionTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondRefundReferenceId()
    {
      return $this->SecondRefundReferenceId;
    }

    /**
     * @param string $SecondRefundReferenceId
     * @return \Zuora\Refund
     */
    public function setSecondRefundReferenceId($SecondRefundReferenceId)
    {
      $this->SecondRefundReferenceId = $SecondRefundReferenceId;
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
     */
    public function setSoftDescriptorPhone($SoftDescriptorPhone)
    {
      $this->SoftDescriptorPhone = $SoftDescriptorPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceType()
    {
      return $this->SourceType;
    }

    /**
     * @param string $SourceType
     * @return \Zuora\Refund
     */
    public function setSourceType($SourceType)
    {
      $this->SourceType = $SourceType;
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
     * @return \Zuora\Refund
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
