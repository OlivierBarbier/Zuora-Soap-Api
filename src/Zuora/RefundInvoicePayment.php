<?php

namespace Zuora;

class RefundInvoicePayment extends zObject
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
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var ID $InvoicePaymentId
     */
    protected $InvoicePaymentId = null;

    /**
     * @var float $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var ID $RefundId
     */
    protected $RefundId = null;

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
     * @return \Zuora\RefundInvoicePayment
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
     * @return \Zuora\RefundInvoicePayment
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
     * @return ID
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param ID $InvoiceId
     * @return \Zuora\RefundInvoicePayment
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getInvoicePaymentId()
    {
      return $this->InvoicePaymentId;
    }

    /**
     * @param ID $InvoicePaymentId
     * @return \Zuora\RefundInvoicePayment
     */
    public function setInvoicePaymentId($InvoicePaymentId)
    {
      $this->InvoicePaymentId = $InvoicePaymentId;
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
     * @return \Zuora\RefundInvoicePayment
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return ID
     */
    public function getRefundId()
    {
      return $this->RefundId;
    }

    /**
     * @param ID $RefundId
     * @return \Zuora\RefundInvoicePayment
     */
    public function setRefundId($RefundId)
    {
      $this->RefundId = $RefundId;
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
     * @return \Zuora\RefundInvoicePayment
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
     * @return \Zuora\RefundInvoicePayment
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
