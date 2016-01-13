<?php

namespace Zuora;

class InvoiceProcessingOptions
{

    /**
     * @var date $InvoiceDate
     */
    protected $InvoiceDate = null;

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
     * @return \Zuora\InvoiceProcessingOptions
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
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
     * @return \Zuora\InvoiceProcessingOptions
     */
    public function setInvoiceTargetDate($InvoiceTargetDate)
    {
      $this->InvoiceTargetDate = $InvoiceTargetDate;
      return $this;
    }

}
