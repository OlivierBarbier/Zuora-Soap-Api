<?php

namespace Zuora;

class CreditBalanceAdjustment extends zObject
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
     * @var date $AdjustmentDate
     */
    protected $AdjustmentDate = null;

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
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var string $ReferenceId
     */
    protected $ReferenceId = null;

    /**
     * @var string $SourceTransactionId
     */
    protected $SourceTransactionId = null;

    /**
     * @var string $SourceTransactionNumber
     */
    protected $SourceTransactionNumber = null;

    /**
     * @var string $SourceTransactionType
     */
    protected $SourceTransactionType = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setAccountingCode($AccountingCode)
    {
      $this->AccountingCode = $AccountingCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getAdjustmentDate()
    {
      return $this->AdjustmentDate;
    }

    /**
     * @param date $AdjustmentDate
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setAdjustmentDate($AdjustmentDate)
    {
      $this->AdjustmentDate = $AdjustmentDate;
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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
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
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
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
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceTransactionId()
    {
      return $this->SourceTransactionId;
    }

    /**
     * @param string $SourceTransactionId
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setSourceTransactionId($SourceTransactionId)
    {
      $this->SourceTransactionId = $SourceTransactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceTransactionNumber()
    {
      return $this->SourceTransactionNumber;
    }

    /**
     * @param string $SourceTransactionNumber
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setSourceTransactionNumber($SourceTransactionNumber)
    {
      $this->SourceTransactionNumber = $SourceTransactionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceTransactionType()
    {
      return $this->SourceTransactionType;
    }

    /**
     * @param string $SourceTransactionType
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setSourceTransactionType($SourceTransactionType)
    {
      $this->SourceTransactionType = $SourceTransactionType;
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
     * @return \Zuora\CreditBalanceAdjustment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
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
     * @return \Zuora\CreditBalanceAdjustment
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
