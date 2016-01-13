<?php

namespace Zuora;

class PaymentMethodTransactionLog extends zObject
{

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
     * @var string $GatewayTransactionType
     */
    protected $GatewayTransactionType = null;

    /**
     * @var string $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @var string $PaymentMethodType
     */
    protected $PaymentMethodType = null;

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
    public function getGateway()
    {
      return $this->Gateway;
    }

    /**
     * @param string $Gateway
     * @return \Zuora\PaymentMethodTransactionLog
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
     * @return \Zuora\PaymentMethodTransactionLog
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
     * @return \Zuora\PaymentMethodTransactionLog
     */
    public function setGatewayReasonCodeDescription($GatewayReasonCodeDescription)
    {
      $this->GatewayReasonCodeDescription = $GatewayReasonCodeDescription;
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
     * @return \Zuora\PaymentMethodTransactionLog
     */
    public function setGatewayTransactionType($GatewayTransactionType)
    {
      $this->GatewayTransactionType = $GatewayTransactionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
      return $this->PaymentMethodId;
    }

    /**
     * @param string $PaymentMethodId
     * @return \Zuora\PaymentMethodTransactionLog
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodType()
    {
      return $this->PaymentMethodType;
    }

    /**
     * @param string $PaymentMethodType
     * @return \Zuora\PaymentMethodTransactionLog
     */
    public function setPaymentMethodType($PaymentMethodType)
    {
      $this->PaymentMethodType = $PaymentMethodType;
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
     * @return \Zuora\PaymentMethodTransactionLog
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
     * @return \Zuora\PaymentMethodTransactionLog
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
     * @return \Zuora\PaymentMethodTransactionLog
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
     * @return \Zuora\PaymentMethodTransactionLog
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

}
