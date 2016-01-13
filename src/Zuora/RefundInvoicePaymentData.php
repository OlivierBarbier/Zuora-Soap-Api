<?php

namespace Zuora;

class RefundInvoicePaymentData
{

    /**
     * @var RefundInvoicePayment[] $RefundInvoicePayment
     */
    protected $RefundInvoicePayment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RefundInvoicePayment[]
     */
    public function getRefundInvoicePayment()
    {
      return $this->RefundInvoicePayment;
    }

    /**
     * @param RefundInvoicePayment[] $RefundInvoicePayment
     * @return \Zuora\RefundInvoicePaymentData
     */
    public function setRefundInvoicePayment(array $RefundInvoicePayment = null)
    {
      $this->RefundInvoicePayment = $RefundInvoicePayment;
      return $this;
    }

}
