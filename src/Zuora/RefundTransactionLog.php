<?php

namespace Zuora;

class RefundTransactionLog extends zObject
{

    /**
     * @var string $BatchId
     */
    protected $BatchId = null;

    /**
     * @var string $Gateway
     */
    protected $Gateway = null;

    /**
     * @var string $GatewayReasonCode
     */
    protected $GatewayReasonCode = null;

    /**
     * @var string $GatewayReasonCodeDescription
     */
    protected $GatewayReasonCodeDescription = null;

    /**
     * @var string $GatewayState
     */
    protected $GatewayState = null;

    /**
     * @var string $GatewayTransactionType
     */
    protected $GatewayTransactionType = null;

    /**
     * @var ID $RefundId
     */
    protected $RefundId = null;

    /**
     * @var string $RequestString
     */
    protected $RequestString = null;

    /**
     * @var string $ResponseString
     */
    protected $ResponseString = null;

    /**
     * @var \DateTime $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getBatchId()
    {
      return $this->BatchId;
    }

    /**
     * @param string $BatchId
     * @return \Zuora\RefundTransactionLog
     */
    public function setBatchId($BatchId)
    {
      $this->BatchId = $BatchId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
      return $this->Gateway;
    }

    /**
     * @param string $Gateway
     * @return \Zuora\RefundTransactionLog
     */
    public function setGateway($Gateway)
    {
      $this->Gateway = $Gateway;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayReasonCode()
    {
      return $this->GatewayReasonCode;
    }

    /**
     * @param string $GatewayReasonCode
     * @return \Zuora\RefundTransactionLog
     */
    public function setGatewayReasonCode($GatewayReasonCode)
    {
      $this->GatewayReasonCode = $GatewayReasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayReasonCodeDescription()
    {
      return $this->GatewayReasonCodeDescription;
    }

    /**
     * @param string $GatewayReasonCodeDescription
     * @return \Zuora\RefundTransactionLog
     */
    public function setGatewayReasonCodeDescription($GatewayReasonCodeDescription)
    {
      $this->GatewayReasonCodeDescription = $GatewayReasonCodeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayState()
    {
      return $this->GatewayState;
    }

    /**
     * @param string $GatewayState
     * @return \Zuora\RefundTransactionLog
     */
    public function setGatewayState($GatewayState)
    {
      $this->GatewayState = $GatewayState;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayTransactionType()
    {
      return $this->GatewayTransactionType;
    }

    /**
     * @param string $GatewayTransactionType
     * @return \Zuora\RefundTransactionLog
     */
    public function setGatewayTransactionType($GatewayTransactionType)
    {
      $this->GatewayTransactionType = $GatewayTransactionType;
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
     * @return \Zuora\RefundTransactionLog
     */
    public function setRefundId($RefundId)
    {
      $this->RefundId = $RefundId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestString()
    {
      return $this->RequestString;
    }

    /**
     * @param string $RequestString
     * @return \Zuora\RefundTransactionLog
     */
    public function setRequestString($RequestString)
    {
      $this->RequestString = $RequestString;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseString()
    {
      return $this->ResponseString;
    }

    /**
     * @param string $ResponseString
     * @return \Zuora\RefundTransactionLog
     */
    public function setResponseString($ResponseString)
    {
      $this->ResponseString = $ResponseString;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionDate()
    {
      if ($this->TransactionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TransactionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TransactionDate
     * @return \Zuora\RefundTransactionLog
     */
    public function setTransactionDate(\DateTime $TransactionDate = null)
    {
      if ($TransactionDate == null) {
       $this->TransactionDate = null;
      } else {
        $this->TransactionDate = $TransactionDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
      return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \Zuora\RefundTransactionLog
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

}
