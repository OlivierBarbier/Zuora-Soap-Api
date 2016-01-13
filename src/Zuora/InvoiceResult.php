<?php

namespace Zuora;

class InvoiceResult
{

    /**
     * @var Invoice[] $Invoice
     */
    protected $Invoice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Invoice[]
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param Invoice[] $Invoice
     * @return \Zuora\InvoiceResult
     */
    public function setInvoice(array $Invoice = null)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

}
