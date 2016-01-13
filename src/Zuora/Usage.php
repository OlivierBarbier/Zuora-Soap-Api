<?php

namespace Zuora;

class Usage extends zObject
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var ID $AncestorAccountId
     */
    protected $AncestorAccountId = null;

    /**
     * @var ID $ChargeId
     */
    protected $ChargeId = null;

    /**
     * @var string $ChargeNumber
     */
    protected $ChargeNumber = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $EndDateTime
     */
    protected $EndDateTime = null;

    /**
     * @var ID $ImportId
     */
    protected $ImportId = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $RbeStatus
     */
    protected $RbeStatus = null;

    /**
     * @var string $SourceName
     */
    protected $SourceName = null;

    /**
     * @var string $SourceType
     */
    protected $SourceType = null;

    /**
     * @var \DateTime $StartDateTime
     */
    protected $StartDateTime = null;

    /**
     * @var \DateTime $SubmissionDateTime
     */
    protected $SubmissionDateTime = null;

    /**
     * @var ID $SubscriptionId
     */
    protected $SubscriptionId = null;

    /**
     * @var string $SubscriptionNumber
     */
    protected $SubscriptionNumber = null;

    /**
     * @var string $UOM
     */
    protected $UOM = null;

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
     * @return \Zuora\Usage
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
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
     * @return \Zuora\Usage
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return ID
     */
    public function getAncestorAccountId()
    {
      return $this->AncestorAccountId;
    }

    /**
     * @param ID $AncestorAccountId
     * @return \Zuora\Usage
     */
    public function setAncestorAccountId($AncestorAccountId)
    {
      $this->AncestorAccountId = $AncestorAccountId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getChargeId()
    {
      return $this->ChargeId;
    }

    /**
     * @param ID $ChargeId
     * @return \Zuora\Usage
     */
    public function setChargeId($ChargeId)
    {
      $this->ChargeId = $ChargeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeNumber()
    {
      return $this->ChargeNumber;
    }

    /**
     * @param string $ChargeNumber
     * @return \Zuora\Usage
     */
    public function setChargeNumber($ChargeNumber)
    {
      $this->ChargeNumber = $ChargeNumber;
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
     * @return \Zuora\Usage
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
     * @return \Zuora\Usage
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
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Zuora\Usage
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime()
    {
      if ($this->EndDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDateTime
     * @return \Zuora\Usage
     */
    public function setEndDateTime(\DateTime $EndDateTime = null)
    {
      if ($EndDateTime == null) {
       $this->EndDateTime = null;
      } else {
        $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ID
     */
    public function getImportId()
    {
      return $this->ImportId;
    }

    /**
     * @param ID $ImportId
     * @return \Zuora\Usage
     */
    public function setImportId($ImportId)
    {
      $this->ImportId = $ImportId;
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
     * @return \Zuora\Usage
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
     * @return \Zuora\Usage
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \Zuora\Usage
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getRbeStatus()
    {
      return $this->RbeStatus;
    }

    /**
     * @param string $RbeStatus
     * @return \Zuora\Usage
     */
    public function setRbeStatus($RbeStatus)
    {
      $this->RbeStatus = $RbeStatus;
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
     * @return \Zuora\Usage
     */
    public function setSourceName($SourceName)
    {
      $this->SourceName = $SourceName;
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
     * @return \Zuora\Usage
     */
    public function setSourceType($SourceType)
    {
      $this->SourceType = $SourceType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
      if ($this->StartDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDateTime
     * @return \Zuora\Usage
     */
    public function setStartDateTime(\DateTime $StartDateTime = null)
    {
      if ($StartDateTime == null) {
       $this->StartDateTime = null;
      } else {
        $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubmissionDateTime()
    {
      if ($this->SubmissionDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SubmissionDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SubmissionDateTime
     * @return \Zuora\Usage
     */
    public function setSubmissionDateTime(\DateTime $SubmissionDateTime = null)
    {
      if ($SubmissionDateTime == null) {
       $this->SubmissionDateTime = null;
      } else {
        $this->SubmissionDateTime = $SubmissionDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ID
     */
    public function getSubscriptionId()
    {
      return $this->SubscriptionId;
    }

    /**
     * @param ID $SubscriptionId
     * @return \Zuora\Usage
     */
    public function setSubscriptionId($SubscriptionId)
    {
      $this->SubscriptionId = $SubscriptionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionNumber()
    {
      return $this->SubscriptionNumber;
    }

    /**
     * @param string $SubscriptionNumber
     * @return \Zuora\Usage
     */
    public function setSubscriptionNumber($SubscriptionNumber)
    {
      $this->SubscriptionNumber = $SubscriptionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getUOM()
    {
      return $this->UOM;
    }

    /**
     * @param string $UOM
     * @return \Zuora\Usage
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
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
     * @return \Zuora\Usage
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
     * @return \Zuora\Usage
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
