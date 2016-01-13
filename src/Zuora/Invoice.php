<?php

namespace Zuora;

class Invoice extends zObject
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var float $AdjustmentAmount
     */
    protected $AdjustmentAmount = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $AmountWithoutTax
     */
    protected $AmountWithoutTax = null;

    /**
     * @var float $Balance
     */
    protected $Balance = null;

    /**
     * @var ID $BillRunId
     */
    protected $BillRunId = null;

    /**
     * @var string $Body
     */
    protected $Body = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var float $CreditBalanceAdjustmentAmount
     */
    protected $CreditBalanceAdjustmentAmount = null;

    /**
     * @var date $DueDate
     */
    protected $DueDate = null;

    /**
     * @var boolean $IncludesOneTime
     */
    protected $IncludesOneTime = null;

    /**
     * @var boolean $IncludesRecurring
     */
    protected $IncludesRecurring = null;

    /**
     * @var boolean $IncludesUsage
     */
    protected $IncludesUsage = null;

    /**
     * @var date $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var \DateTime $LastEmailSentDate
     */
    protected $LastEmailSentDate = null;

    /**
     * @var float $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var ID $PostedBy
     */
    protected $PostedBy = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var float $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var boolean $RegenerateInvoicePDF
     */
    protected $RegenerateInvoicePDF = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var date $TargetDate
     */
    protected $TargetDate = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var float $TaxExemptAmount
     */
    protected $TaxExemptAmount = null;

    /**
     * @var string $TransferredToAccounting
     */
    protected $TransferredToAccounting = null;

    /**
     * @var string $Unrecoverable__c
     */
    protected $Unrecoverable__c = null;

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
     * @return \Zuora\Invoice
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentAmount()
    {
      return $this->AdjustmentAmount;
    }

    /**
     * @param float $AdjustmentAmount
     * @return \Zuora\Invoice
     */
    public function setAdjustmentAmount($AdjustmentAmount)
    {
      $this->AdjustmentAmount = $AdjustmentAmount;
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
     * @return \Zuora\Invoice
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountWithoutTax()
    {
      return $this->AmountWithoutTax;
    }

    /**
     * @param float $AmountWithoutTax
     * @return \Zuora\Invoice
     */
    public function setAmountWithoutTax($AmountWithoutTax)
    {
      $this->AmountWithoutTax = $AmountWithoutTax;
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
     * @return \Zuora\Invoice
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
      return $this;
    }

    /**
     * @return ID
     */
    public function getBillRunId()
    {
      return $this->BillRunId;
    }

    /**
     * @param ID $BillRunId
     * @return \Zuora\Invoice
     */
    public function setBillRunId($BillRunId)
    {
      $this->BillRunId = $BillRunId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param string $Body
     * @return \Zuora\Invoice
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \Zuora\Invoice
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
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
     * @return \Zuora\Invoice
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
     * @return \Zuora\Invoice
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
    public function getCreditBalanceAdjustmentAmount()
    {
      return $this->CreditBalanceAdjustmentAmount;
    }

    /**
     * @param float $CreditBalanceAdjustmentAmount
     * @return \Zuora\Invoice
     */
    public function setCreditBalanceAdjustmentAmount($CreditBalanceAdjustmentAmount)
    {
      $this->CreditBalanceAdjustmentAmount = $CreditBalanceAdjustmentAmount;
      return $this;
    }

    /**
     * @return date
     */
    public function getDueDate()
    {
      return $this->DueDate;
    }

    /**
     * @param date $DueDate
     * @return \Zuora\Invoice
     */
    public function setDueDate($DueDate)
    {
      $this->DueDate = $DueDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludesOneTime()
    {
      return $this->IncludesOneTime;
    }

    /**
     * @param boolean $IncludesOneTime
     * @return \Zuora\Invoice
     */
    public function setIncludesOneTime($IncludesOneTime)
    {
      $this->IncludesOneTime = $IncludesOneTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludesRecurring()
    {
      return $this->IncludesRecurring;
    }

    /**
     * @param boolean $IncludesRecurring
     * @return \Zuora\Invoice
     */
    public function setIncludesRecurring($IncludesRecurring)
    {
      $this->IncludesRecurring = $IncludesRecurring;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludesUsage()
    {
      return $this->IncludesUsage;
    }

    /**
     * @param boolean $IncludesUsage
     * @return \Zuora\Invoice
     */
    public function setIncludesUsage($IncludesUsage)
    {
      $this->IncludesUsage = $IncludesUsage;
      return $this;
    }

    /**
     * @return date
     */
    public function getInvoiceDate()
    {
      return $this->InvoiceDate;
    }

    /**
     * @param date $InvoiceDate
     * @return \Zuora\Invoice
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
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
     * @return \Zuora\Invoice
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastEmailSentDate()
    {
      if ($this->LastEmailSentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastEmailSentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastEmailSentDate
     * @return \Zuora\Invoice
     */
    public function setLastEmailSentDate(\DateTime $LastEmailSentDate = null)
    {
      if ($LastEmailSentDate == null) {
       $this->LastEmailSentDate = null;
      } else {
        $this->LastEmailSentDate = $LastEmailSentDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param float $PaymentAmount
     * @return \Zuora\Invoice
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPostedBy()
    {
      return $this->PostedBy;
    }

    /**
     * @param ID $PostedBy
     * @return \Zuora\Invoice
     */
    public function setPostedBy($PostedBy)
    {
      $this->PostedBy = $PostedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostedDate()
    {
      if ($this->PostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PostedDate
     * @return \Zuora\Invoice
     */
    public function setPostedDate(\DateTime $PostedDate = null)
    {
      if ($PostedDate == null) {
       $this->PostedDate = null;
      } else {
        $this->PostedDate = $PostedDate->format(\DateTime::ATOM);
      }
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
     * @return \Zuora\Invoice
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRegenerateInvoicePDF()
    {
      return $this->RegenerateInvoicePDF;
    }

    /**
     * @param boolean $RegenerateInvoicePDF
     * @return \Zuora\Invoice
     */
    public function setRegenerateInvoicePDF($RegenerateInvoicePDF)
    {
      $this->RegenerateInvoicePDF = $RegenerateInvoicePDF;
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
     * @return \Zuora\Invoice
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return date
     */
    public function getTargetDate()
    {
      return $this->TargetDate;
    }

    /**
     * @param date $TargetDate
     * @return \Zuora\Invoice
     */
    public function setTargetDate($TargetDate)
    {
      $this->TargetDate = $TargetDate;
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
     * @return \Zuora\Invoice
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
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
     * @return \Zuora\Invoice
     */
    public function setTaxExemptAmount($TaxExemptAmount)
    {
      $this->TaxExemptAmount = $TaxExemptAmount;
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
     * @return \Zuora\Invoice
     */
    public function setTransferredToAccounting($TransferredToAccounting)
    {
      $this->TransferredToAccounting = $TransferredToAccounting;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnrecoverable__c()
    {
      return $this->Unrecoverable__c;
    }

    /**
     * @param string $Unrecoverable__c
     * @return \Zuora\Invoice
     */
    public function setUnrecoverable__c($Unrecoverable__c)
    {
      $this->Unrecoverable__c = $Unrecoverable__c;
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
     * @return \Zuora\Invoice
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
     * @return \Zuora\Invoice
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
