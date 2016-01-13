<?php

namespace Zuora;

class ExternalPaymentOptions
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var string $GatewayOrderId
     */
    protected $GatewayOrderId = null;

    /**
     * @var ID $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @var string $ReferenceId
     */
    protected $ReferenceId = null;

    
    public function __construct()
    {
    
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
     * @return \Zuora\ExternalPaymentOptions
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \Zuora\ExternalPaymentOptions
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayOrderId()
    {
      return $this->GatewayOrderId;
    }

    /**
     * @param string $GatewayOrderId
     * @return \Zuora\ExternalPaymentOptions
     */
    public function setGatewayOrderId($GatewayOrderId)
    {
      $this->GatewayOrderId = $GatewayOrderId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPaymentMethodId()
    {
      return $this->PaymentMethodId;
    }

    /**
     * @param ID $PaymentMethodId
     * @return \Zuora\ExternalPaymentOptions
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
      $this->PaymentMethodId = $PaymentMethodId;
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
     * @return \Zuora\ExternalPaymentOptions
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
      return $this;
    }

}
