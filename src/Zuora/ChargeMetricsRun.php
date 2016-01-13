<?php

namespace Zuora;

class ChargeMetricsRun extends zObject
{

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
     * @var string $ErrorFileUrl
     */
    protected $ErrorFileUrl = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var int $ProcessedAccounts
     */
    protected $ProcessedAccounts = null;

    /**
     * @var int $ProcessedCharges
     */
    protected $ProcessedCharges = null;

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
     * @return ID
     */
    public function getCreatedById()
    {
      return $this->CreatedById;
    }

    /**
     * @param ID $CreatedById
     * @return \Zuora\ChargeMetricsRun
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
     * @return \Zuora\ChargeMetricsRun
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
     * @return \Zuora\ChargeMetricsRun
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
    public function getErrorFileUrl()
    {
      return $this->ErrorFileUrl;
    }

    /**
     * @param string $ErrorFileUrl
     * @return \Zuora\ChargeMetricsRun
     */
    public function setErrorFileUrl($ErrorFileUrl)
    {
      $this->ErrorFileUrl = $ErrorFileUrl;
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
     * @return \Zuora\ChargeMetricsRun
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getProcessedAccounts()
    {
      return $this->ProcessedAccounts;
    }

    /**
     * @param int $ProcessedAccounts
     * @return \Zuora\ChargeMetricsRun
     */
    public function setProcessedAccounts($ProcessedAccounts)
    {
      $this->ProcessedAccounts = $ProcessedAccounts;
      return $this;
    }

    /**
     * @return int
     */
    public function getProcessedCharges()
    {
      return $this->ProcessedCharges;
    }

    /**
     * @param int $ProcessedCharges
     * @return \Zuora\ChargeMetricsRun
     */
    public function setProcessedCharges($ProcessedCharges)
    {
      $this->ProcessedCharges = $ProcessedCharges;
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
     * @return \Zuora\ChargeMetricsRun
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
     * @return \Zuora\ChargeMetricsRun
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
     * @return \Zuora\ChargeMetricsRun
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
     * @return \Zuora\ChargeMetricsRun
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \Zuora\ChargeMetricsRun
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
     * @return \Zuora\ChargeMetricsRun
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
     * @return \Zuora\ChargeMetricsRun
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
