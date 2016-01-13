<?php

namespace Zuora;

class BillRun extends zObject
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var boolean $AutoEmail
     */
    protected $AutoEmail = null;

    /**
     * @var boolean $AutoPost
     */
    protected $AutoPost = null;

    /**
     * @var boolean $AutoRenewal
     */
    protected $AutoRenewal = null;

    /**
     * @var string $Batch
     */
    protected $Batch = null;

    /**
     * @var string $BillCycleDay
     */
    protected $BillCycleDay = null;

    /**
     * @var string $BillRunNumber
     */
    protected $BillRunNumber = null;

    /**
     * @var string $ChargeTypeToExclude
     */
    protected $ChargeTypeToExclude = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var \DateTime $ExecutedDate
     */
    protected $ExecutedDate = null;

    /**
     * @var date $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var boolean $InvoicesEmailed
     */
    protected $InvoicesEmailed = null;

    /**
     * @var \DateTime $LastEmailSentTime
     */
    protected $LastEmailSentTime = null;

    /**
     * @var boolean $NoEmailForZeroAmountInvoice
     */
    protected $NoEmailForZeroAmountInvoice = null;

    /**
     * @var int $NumberOfAccounts
     */
    protected $NumberOfAccounts = null;

    /**
     * @var int $NumberOfInvoices
     */
    protected $NumberOfInvoices = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var date $TargetDate
     */
    protected $TargetDate = null;

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
     * @return \Zuora\BillRun
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoEmail()
    {
      return $this->AutoEmail;
    }

    /**
     * @param boolean $AutoEmail
     * @return \Zuora\BillRun
     */
    public function setAutoEmail($AutoEmail)
    {
      $this->AutoEmail = $AutoEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoPost()
    {
      return $this->AutoPost;
    }

    /**
     * @param boolean $AutoPost
     * @return \Zuora\BillRun
     */
    public function setAutoPost($AutoPost)
    {
      $this->AutoPost = $AutoPost;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoRenewal()
    {
      return $this->AutoRenewal;
    }

    /**
     * @param boolean $AutoRenewal
     * @return \Zuora\BillRun
     */
    public function setAutoRenewal($AutoRenewal)
    {
      $this->AutoRenewal = $AutoRenewal;
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
     * @return \Zuora\BillRun
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillCycleDay()
    {
      return $this->BillCycleDay;
    }

    /**
     * @param string $BillCycleDay
     * @return \Zuora\BillRun
     */
    public function setBillCycleDay($BillCycleDay)
    {
      $this->BillCycleDay = $BillCycleDay;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillRunNumber()
    {
      return $this->BillRunNumber;
    }

    /**
     * @param string $BillRunNumber
     * @return \Zuora\BillRun
     */
    public function setBillRunNumber($BillRunNumber)
    {
      $this->BillRunNumber = $BillRunNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeTypeToExclude()
    {
      return $this->ChargeTypeToExclude;
    }

    /**
     * @param string $ChargeTypeToExclude
     * @return \Zuora\BillRun
     */
    public function setChargeTypeToExclude($ChargeTypeToExclude)
    {
      $this->ChargeTypeToExclude = $ChargeTypeToExclude;
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
     * @return \Zuora\BillRun
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
     * @return \Zuora\BillRun
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
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Zuora\BillRun
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExecutedDate()
    {
      if ($this->ExecutedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExecutedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExecutedDate
     * @return \Zuora\BillRun
     */
    public function setExecutedDate(\DateTime $ExecutedDate = null)
    {
      if ($ExecutedDate == null) {
       $this->ExecutedDate = null;
      } else {
        $this->ExecutedDate = $ExecutedDate->format(\DateTime::ATOM);
      }
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
     * @return \Zuora\BillRun
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInvoicesEmailed()
    {
      return $this->InvoicesEmailed;
    }

    /**
     * @param boolean $InvoicesEmailed
     * @return \Zuora\BillRun
     */
    public function setInvoicesEmailed($InvoicesEmailed)
    {
      $this->InvoicesEmailed = $InvoicesEmailed;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastEmailSentTime()
    {
      if ($this->LastEmailSentTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastEmailSentTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastEmailSentTime
     * @return \Zuora\BillRun
     */
    public function setLastEmailSentTime(\DateTime $LastEmailSentTime = null)
    {
      if ($LastEmailSentTime == null) {
       $this->LastEmailSentTime = null;
      } else {
        $this->LastEmailSentTime = $LastEmailSentTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoEmailForZeroAmountInvoice()
    {
      return $this->NoEmailForZeroAmountInvoice;
    }

    /**
     * @param boolean $NoEmailForZeroAmountInvoice
     * @return \Zuora\BillRun
     */
    public function setNoEmailForZeroAmountInvoice($NoEmailForZeroAmountInvoice)
    {
      $this->NoEmailForZeroAmountInvoice = $NoEmailForZeroAmountInvoice;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAccounts()
    {
      return $this->NumberOfAccounts;
    }

    /**
     * @param int $NumberOfAccounts
     * @return \Zuora\BillRun
     */
    public function setNumberOfAccounts($NumberOfAccounts)
    {
      $this->NumberOfAccounts = $NumberOfAccounts;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfInvoices()
    {
      return $this->NumberOfInvoices;
    }

    /**
     * @param int $NumberOfInvoices
     * @return \Zuora\BillRun
     */
    public function setNumberOfInvoices($NumberOfInvoices)
    {
      $this->NumberOfInvoices = $NumberOfInvoices;
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
     * @return \Zuora\BillRun
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
     * @return \Zuora\BillRun
     */
    public function setTargetDate($TargetDate)
    {
      $this->TargetDate = $TargetDate;
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
     * @return \Zuora\BillRun
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
     * @return \Zuora\BillRun
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
