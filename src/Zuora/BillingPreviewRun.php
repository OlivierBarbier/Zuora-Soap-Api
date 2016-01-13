<?php

namespace Zuora;

class BillingPreviewRun extends zObject
{

    /**
     * @var string $Batch
     */
    protected $Batch = null;

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
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var boolean $IncludingEvergreenSubscription
     */
    protected $IncludingEvergreenSubscription = null;

    /**
     * @var string $ResultFileUrl
     */
    protected $ResultFileUrl = null;

    /**
     * @var string $RunNumber
     */
    protected $RunNumber = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var int $SucceededAccounts
     */
    protected $SucceededAccounts = null;

    /**
     * @var date $TargetDate
     */
    protected $TargetDate = null;

    /**
     * @var int $TotalAccounts
     */
    protected $TotalAccounts = null;

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
     * @return string
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param string $Batch
     * @return \Zuora\BillingPreviewRun
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
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
     * @return \Zuora\BillingPreviewRun
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
     * @return \Zuora\BillingPreviewRun
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
     * @return \Zuora\BillingPreviewRun
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
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Zuora\BillingPreviewRun
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
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
     * @return \Zuora\BillingPreviewRun
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludingEvergreenSubscription()
    {
      return $this->IncludingEvergreenSubscription;
    }

    /**
     * @param boolean $IncludingEvergreenSubscription
     * @return \Zuora\BillingPreviewRun
     */
    public function setIncludingEvergreenSubscription($IncludingEvergreenSubscription)
    {
      $this->IncludingEvergreenSubscription = $IncludingEvergreenSubscription;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultFileUrl()
    {
      return $this->ResultFileUrl;
    }

    /**
     * @param string $ResultFileUrl
     * @return \Zuora\BillingPreviewRun
     */
    public function setResultFileUrl($ResultFileUrl)
    {
      $this->ResultFileUrl = $ResultFileUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getRunNumber()
    {
      return $this->RunNumber;
    }

    /**
     * @param string $RunNumber
     * @return \Zuora\BillingPreviewRun
     */
    public function setRunNumber($RunNumber)
    {
      $this->RunNumber = $RunNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Zuora\BillingPreviewRun
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
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
     * @return \Zuora\BillingPreviewRun
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getSucceededAccounts()
    {
      return $this->SucceededAccounts;
    }

    /**
     * @param int $SucceededAccounts
     * @return \Zuora\BillingPreviewRun
     */
    public function setSucceededAccounts($SucceededAccounts)
    {
      $this->SucceededAccounts = $SucceededAccounts;
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
     * @return \Zuora\BillingPreviewRun
     */
    public function setTargetDate($TargetDate)
    {
      $this->TargetDate = $TargetDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalAccounts()
    {
      return $this->TotalAccounts;
    }

    /**
     * @param int $TotalAccounts
     * @return \Zuora\BillingPreviewRun
     */
    public function setTotalAccounts($TotalAccounts)
    {
      $this->TotalAccounts = $TotalAccounts;
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
     * @return \Zuora\BillingPreviewRun
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
     * @return \Zuora\BillingPreviewRun
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
