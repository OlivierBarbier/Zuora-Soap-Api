<?php

namespace Zuora;

class InvoicePaymentData
{

    /**
     * @var InvoicePayment[] $InvoicePayment
     */
    protected $InvoicePayment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoicePayment[]
     */
    public function getInvoicePayment()
    {
      return $this->InvoicePayment;
    }

    /**
     * @param InvoicePayment[] $InvoicePayment
     * @return \Zuora\InvoicePaymentData
     */
    public function setInvoicePayment(array $InvoicePayment = null)
    {
      $this->InvoicePayment = $InvoicePayment;
      return $this;
    }

}
