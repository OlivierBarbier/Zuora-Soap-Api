<?php

namespace Zuora;

class SubscribeRequest
{

    /**
     * @var Account $Account
     */
    protected $Account = null;

    /**
     * @var PaymentMethod $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var Contact $BillToContact
     */
    protected $BillToContact = null;

    /**
     * @var PreviewOptions $PreviewOptions
     */
    protected $PreviewOptions = null;

    /**
     * @var Contact $SoldToContact
     */
    protected $SoldToContact = null;

    /**
     * @var SubscribeOptions $SubscribeOptions
     */
    protected $SubscribeOptions = null;

    /**
     * @var SubscriptionData $SubscriptionData
     */
    protected $SubscriptionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param Account $Account
     * @return \Zuora\SubscribeRequest
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param PaymentMethod $PaymentMethod
     * @return \Zuora\SubscribeRequest
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getBillToContact()
    {
      return $this->BillToContact;
    }

    /**
     * @param Contact $BillToContact
     * @return \Zuora\SubscribeRequest
     */
    public function setBillToContact($BillToContact)
    {
      $this->BillToContact = $BillToContact;
      return $this;
    }

    /**
     * @return PreviewOptions
     */
    public function getPreviewOptions()
    {
      return $this->PreviewOptions;
    }

    /**
     * @param PreviewOptions $PreviewOptions
     * @return \Zuora\SubscribeRequest
     */
    public function setPreviewOptions($PreviewOptions)
    {
      $this->PreviewOptions = $PreviewOptions;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getSoldToContact()
    {
      return $this->SoldToContact;
    }

    /**
     * @param Contact $SoldToContact
     * @return \Zuora\SubscribeRequest
     */
    public function setSoldToContact($SoldToContact)
    {
      $this->SoldToContact = $SoldToContact;
      return $this;
    }

    /**
     * @return SubscribeOptions
     */
    public function getSubscribeOptions()
    {
      return $this->SubscribeOptions;
    }

    /**
     * @param SubscribeOptions $SubscribeOptions
     * @return \Zuora\SubscribeRequest
     */
    public function setSubscribeOptions($SubscribeOptions)
    {
      $this->SubscribeOptions = $SubscribeOptions;
      return $this;
    }

    /**
     * @return SubscriptionData
     */
    public function getSubscriptionData()
    {
      return $this->SubscriptionData;
    }

    /**
     * @param SubscriptionData $SubscriptionData
     * @return \Zuora\SubscribeRequest
     */
    public function setSubscriptionData($SubscriptionData)
    {
      $this->SubscriptionData = $SubscriptionData;
      return $this;
    }

}
