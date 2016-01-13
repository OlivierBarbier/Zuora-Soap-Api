<?php

namespace Zuora;

class SubscribeInvoiceProcessingOptions
{

    /**
     * @var date $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $InvoiceProcessingScope
     */
    protected $InvoiceProcessingScope = null;

    /**
     * @var date $InvoiceTargetDate
     */
    protected $InvoiceTargetDate = null;

    
    public function __construct()
    {
    
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
     * @return \Zuora\SubscribeInvoiceProcessingOptions
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceProcessingScope()
    {
      return $this->InvoiceProcessingScope;
    }

    /**
     * @param string $InvoiceProcessingScope
     * @return \Zuora\SubscribeInvoiceProcessingOptions
     */
    public function setInvoiceProcessingScope($InvoiceProcessingScope)
    {
      $this->InvoiceProcessingScope = $InvoiceProcessingScope;
      return $this;
    }

    /**
     * @return date
     */
    public function getInvoiceTargetDate()
    {
      return $this->InvoiceTargetDate;
    }

    /**
     * @param date $InvoiceTargetDate
     * @return \Zuora\SubscribeInvoiceProcessingOptions
     */
    public function setInvoiceTargetDate($InvoiceTargetDate)
    {
      $this->InvoiceTargetDate = $InvoiceTargetDate;
      return $this;
    }

}
