<?php

namespace Zuora;

class ElectronicPaymentOptions
{

    /**
     * @var ID $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    
    public function __construct()
    {
    
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
     * @return \Zuora\ElectronicPaymentOptions
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

}
