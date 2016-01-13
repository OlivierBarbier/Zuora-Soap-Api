<?php

namespace Zuora;

class InvoiceSplitItem extends zObject
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
     * @var date $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var ID $InvoiceSplitId
     */
    protected $InvoiceSplitId = null;

    /**
     * @var string $PaymentTerm
     */
    protected $PaymentTerm = null;

    /**
     * @var int $SplitPercentage
     */
    protected $SplitPercentage = null;

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
     * @return \Zuora\InvoiceSplitItem
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
     * @return \Zuora\InvoiceSplitItem
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
    public function getInvoiceDate()
    {
      return $this->InvoiceDate;
    }

    /**
     * @param date $InvoiceDate
     * @return \Zuora\InvoiceSplitItem
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
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
     * @return \Zuora\InvoiceSplitItem
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getInvoiceSplitId()
    {
      return $this->InvoiceSplitId;
    }

    /**
     * @param ID $InvoiceSplitId
     * @return \Zuora\InvoiceSplitItem
     */
    public function setInvoiceSplitId($InvoiceSplitId)
    {
      $this->InvoiceSplitId = $InvoiceSplitId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentTerm()
    {
      return $this->PaymentTerm;
    }

    /**
     * @param string $PaymentTerm
     * @return \Zuora\InvoiceSplitItem
     */
    public function setPaymentTerm($PaymentTerm)
    {
      $this->PaymentTerm = $PaymentTerm;
      return $this;
    }

    /**
     * @return int
     */
    public function getSplitPercentage()
    {
      return $this->SplitPercentage;
    }

    /**
     * @param int $SplitPercentage
     * @return \Zuora\InvoiceSplitItem
     */
    public function setSplitPercentage($SplitPercentage)
    {
      $this->SplitPercentage = $SplitPercentage;
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
     * @return \Zuora\InvoiceSplitItem
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
     * @return \Zuora\InvoiceSplitItem
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
