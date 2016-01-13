<?php

namespace Zuora;

class InvoiceItemAdjustment extends zObject
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
     * @var string $AdjustmentNumber
     */
    protected $AdjustmentNumber = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var ID $CancelledById
     */
    protected $CancelledById = null;

    /**
     * @var \DateTime $CancelledDate
     */
    protected $CancelledDate = null;

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
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $InvoiceItemName
     */
    protected $InvoiceItemName = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var string $ReferenceId
     */
    protected $ReferenceId = null;

    /**
     * @var date $ServiceEndDate
     */
    protected $ServiceEndDate = null;

    /**
     * @var date $ServiceStartDate
     */
    protected $ServiceStartDate = null;

    /**
     * @var string $SourceId
     */
    protected $SourceId = null;

    /**
     * @var string $SourceType
     */
    protected $SourceType = null;

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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setAdjustmentDate($AdjustmentDate)
    {
      $this->AdjustmentDate = $AdjustmentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentNumber()
    {
      return $this->AdjustmentNumber;
    }

    /**
     * @param string $AdjustmentNumber
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setAdjustmentNumber($AdjustmentNumber)
    {
      $this->AdjustmentNumber = $AdjustmentNumber;
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
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return ID
     */
    public function getCancelledById()
    {
      return $this->CancelledById;
    }

    /**
     * @param ID $CancelledById
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setCancelledById($CancelledById)
    {
      $this->CancelledById = $CancelledById;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDate()
    {
      if ($this->CancelledDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CancelledDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CancelledDate
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setCancelledDate(\DateTime $CancelledDate = null)
    {
      if ($CancelledDate == null) {
       $this->CancelledDate = null;
      } else {
        $this->CancelledDate = $CancelledDate->format(\DateTime::ATOM);
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
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
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceItemName()
    {
      return $this->InvoiceItemName;
    }

    /**
     * @param string $InvoiceItemName
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setInvoiceItemName($InvoiceItemName)
    {
      $this->InvoiceItemName = $InvoiceItemName;
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
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setServiceStartDate($ServiceStartDate)
    {
      $this->ServiceStartDate = $ServiceStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceId()
    {
      return $this->SourceId;
    }

    /**
     * @param string $SourceId
     * @return \Zuora\InvoiceItemAdjustment
     */
    public function setSourceId($SourceId)
    {
      $this->SourceId = $SourceId;
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
     * @return \Zuora\InvoiceItemAdjustment
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
