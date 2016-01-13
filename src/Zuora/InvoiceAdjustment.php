<?php

namespace Zuora;

class InvoiceAdjustment extends zObject
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
     * @var \DateTime $CancelledOn
     */
    protected $CancelledOn = null;

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
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var float $ImpactAmount
     */
    protected $ImpactAmount = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
     */
    public function setCancelledById($CancelledById)
    {
      $this->CancelledById = $CancelledById;
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
     * @return \Zuora\InvoiceAdjustment
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
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getImpactAmount()
    {
      return $this->ImpactAmount;
    }

    /**
     * @param float $ImpactAmount
     * @return \Zuora\InvoiceAdjustment
     */
    public function setImpactAmount($ImpactAmount)
    {
      $this->ImpactAmount = $ImpactAmount;
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
     * @return \Zuora\InvoiceAdjustment
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
