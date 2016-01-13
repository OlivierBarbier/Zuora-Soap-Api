<?php

namespace Zuora;

class InvoiceData
{

    /**
     * @var Invoice $Invoice
     */
    protected $Invoice = null;

    /**
     * @var InvoiceItem[] $InvoiceItem
     */
    protected $InvoiceItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param Invoice $Invoice
     * @return \Zuora\InvoiceData
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return InvoiceItem[]
     */
    public function getInvoiceItem()
    {
      return $this->InvoiceItem;
    }

    /**
     * @param InvoiceItem[] $InvoiceItem
     * @return \Zuora\InvoiceData
     */
    public function setInvoiceItem(array $InvoiceItem = null)
    {
      $this->InvoiceItem = $InvoiceItem;
      return $this;
    }

}
