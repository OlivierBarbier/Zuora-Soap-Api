<?php

namespace Zuora;

class AmendOptions
{

    /**
     * @var boolean $ApplyCreditBalance
     */
    protected $ApplyCreditBalance = null;

    /**
     * @var ElectronicPaymentOptions $ElectronicPaymentOptions
     */
    protected $ElectronicPaymentOptions = null;

    /**
     * @var ExternalPaymentOptions $ExternalPaymentOptions
     */
    protected $ExternalPaymentOptions = null;

    /**
     * @var boolean $GenerateInvoice
     */
    protected $GenerateInvoice = null;

    /**
     * @var InvoiceProcessingOptions $InvoiceProcessingOptions
     */
    protected $InvoiceProcessingOptions = null;

    /**
     * @var boolean $ProcessPayments
     */
    protected $ProcessPayments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getApplyCreditBalance()
    {
      return $this->ApplyCreditBalance;
    }

    /**
     * @param boolean $ApplyCreditBalance
     * @return \Zuora\AmendOptions
     */
    public function setApplyCreditBalance($ApplyCreditBalance)
    {
      $this->ApplyCreditBalance = $ApplyCreditBalance;
      return $this;
    }

    /**
     * @return ElectronicPaymentOptions
     */
    public function getElectronicPaymentOptions()
    {
      return $this->ElectronicPaymentOptions;
    }

    /**
     * @param ElectronicPaymentOptions $ElectronicPaymentOptions
     * @return \Zuora\AmendOptions
     */
    public function setElectronicPaymentOptions($ElectronicPaymentOptions)
    {
      $this->ElectronicPaymentOptions = $ElectronicPaymentOptions;
      return $this;
    }

    /**
     * @return ExternalPaymentOptions
     */
    public function getExternalPaymentOptions()
    {
      return $this->ExternalPaymentOptions;
    }

    /**
     * @param ExternalPaymentOptions $ExternalPaymentOptions
     * @return \Zuora\AmendOptions
     */
    public function setExternalPaymentOptions($ExternalPaymentOptions)
    {
      $this->ExternalPaymentOptions = $ExternalPaymentOptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenerateInvoice()
    {
      return $this->GenerateInvoice;
    }

    /**
     * @param boolean $GenerateInvoice
     * @return \Zuora\AmendOptions
     */
    public function setGenerateInvoice($GenerateInvoice)
    {
      $this->GenerateInvoice = $GenerateInvoice;
      return $this;
    }

    /**
     * @return InvoiceProcessingOptions
     */
    public function getInvoiceProcessingOptions()
    {
      return $this->InvoiceProcessingOptions;
    }

    /**
     * @param InvoiceProcessingOptions $InvoiceProcessingOptions
     * @return \Zuora\AmendOptions
     */
    public function setInvoiceProcessingOptions($InvoiceProcessingOptions)
    {
      $this->InvoiceProcessingOptions = $InvoiceProcessingOptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProcessPayments()
    {
      return $this->ProcessPayments;
    }

    /**
     * @param boolean $ProcessPayments
     * @return \Zuora\AmendOptions
     */
    public function setProcessPayments($ProcessPayments)
    {
      $this->ProcessPayments = $ProcessPayments;
      return $this;
    }

}
