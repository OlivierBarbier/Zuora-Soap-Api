<?php

namespace Zuora;

class SubscribeOptions
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
     * @var boolean $ProcessPayments
     */
    protected $ProcessPayments = null;

    /**
     * @var SubscribeInvoiceProcessingOptions $SubscribeInvoiceProcessingOptions
     */
    protected $SubscribeInvoiceProcessingOptions = null;

    
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
     * @return \Zuora\SubscribeOptions
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
     * @return \Zuora\SubscribeOptions
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
     * @return \Zuora\SubscribeOptions
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
     * @return \Zuora\SubscribeOptions
     */
    public function setGenerateInvoice($GenerateInvoice)
    {
      $this->GenerateInvoice = $GenerateInvoice;
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
     * @return \Zuora\SubscribeOptions
     */
    public function setProcessPayments($ProcessPayments)
    {
      $this->ProcessPayments = $ProcessPayments;
      return $this;
    }

    /**
     * @return SubscribeInvoiceProcessingOptions
     */
    public function getSubscribeInvoiceProcessingOptions()
    {
      return $this->SubscribeInvoiceProcessingOptions;
    }

    /**
     * @param SubscribeInvoiceProcessingOptions $SubscribeInvoiceProcessingOptions
     * @return \Zuora\SubscribeOptions
     */
    public function setSubscribeInvoiceProcessingOptions($SubscribeInvoiceProcessingOptions)
    {
      $this->SubscribeInvoiceProcessingOptions = $SubscribeInvoiceProcessingOptions;
      return $this;
    }

}
