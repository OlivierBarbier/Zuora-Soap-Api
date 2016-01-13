<?php

namespace Zuora;

class SubscribeResult
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var ChargeMetricsData $ChargeMetricsData
     */
    protected $ChargeMetricsData = null;

    /**
     * @var Error[] $Errors
     */
    protected $Errors = null;

    /**
     * @var string $GatewayResponse
     */
    protected $GatewayResponse = null;

    /**
     * @var string $GatewayResponseCode
     */
    protected $GatewayResponseCode = null;

    /**
     * @var InvoiceData[] $InvoiceData
     */
    protected $InvoiceData = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var InvoiceResult $InvoiceResult
     */
    protected $InvoiceResult = null;

    /**
     * @var ID $PaymentId
     */
    protected $PaymentId = null;

    /**
     * @var string $PaymentTransactionNumber
     */
    protected $PaymentTransactionNumber = null;

    /**
     * @var ID $SubscriptionId
     */
    protected $SubscriptionId = null;

    /**
     * @var string $SubscriptionNumber
     */
    protected $SubscriptionNumber = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var float $TotalMrr
     */
    protected $TotalMrr = null;

    /**
     * @var float $TotalTcv
     */
    protected $TotalTcv = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ID
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param ID $AccountId
     * @return \Zuora\SubscribeResult
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \Zuora\SubscribeResult
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return ChargeMetricsData
     */
    public function getChargeMetricsData()
    {
      return $this->ChargeMetricsData;
    }

    /**
     * @param ChargeMetricsData $ChargeMetricsData
     * @return \Zuora\SubscribeResult
     */
    public function setChargeMetricsData($ChargeMetricsData)
    {
      $this->ChargeMetricsData = $ChargeMetricsData;
      return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param Error[] $Errors
     * @return \Zuora\SubscribeResult
     */
    public function setErrors(array $Errors = null)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayResponse()
    {
      return $this->GatewayResponse;
    }

    /**
     * @param string $GatewayResponse
     * @return \Zuora\SubscribeResult
     */
    public function setGatewayResponse($GatewayResponse)
    {
      $this->GatewayResponse = $GatewayResponse;
      return $this;
    }

    /**
     * @return string
     */
    public function getGatewayResponseCode()
    {
      return $this->GatewayResponseCode;
    }

    /**
     * @param string $GatewayResponseCode
     * @return \Zuora\SubscribeResult
     */
    public function setGatewayResponseCode($GatewayResponseCode)
    {
      $this->GatewayResponseCode = $GatewayResponseCode;
      return $this;
    }

    /**
     * @return InvoiceData[]
     */
    public function getInvoiceData()
    {
      return $this->InvoiceData;
    }

    /**
     * @param InvoiceData[] $InvoiceData
     * @return \Zuora\SubscribeResult
     */
    public function setInvoiceData(array $InvoiceData = null)
    {
      $this->InvoiceData = $InvoiceData;
      return $this;
    }

    /**
     * @return ID
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param ID $InvoiceId
     * @return \Zuora\SubscribeResult
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Zuora\SubscribeResult
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return InvoiceResult
     */
    public function getInvoiceResult()
    {
      return $this->InvoiceResult;
    }

    /**
     * @param InvoiceResult $InvoiceResult
     * @return \Zuora\SubscribeResult
     */
    public function setInvoiceResult($InvoiceResult)
    {
      $this->InvoiceResult = $InvoiceResult;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPaymentId()
    {
      return $this->PaymentId;
    }

    /**
     * @param ID $PaymentId
     * @return \Zuora\SubscribeResult
     */
    public function setPaymentId($PaymentId)
    {
      $this->PaymentId = $PaymentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentTransactionNumber()
    {
      return $this->PaymentTransactionNumber;
    }

    /**
     * @param string $PaymentTransactionNumber
     * @return \Zuora\SubscribeResult
     */
    public function setPaymentTransactionNumber($PaymentTransactionNumber)
    {
      $this->PaymentTransactionNumber = $PaymentTransactionNumber;
      return $this;
    }

    /**
     * @return ID
     */
    public function getSubscriptionId()
    {
      return $this->SubscriptionId;
    }

    /**
     * @param ID $SubscriptionId
     * @return \Zuora\SubscribeResult
     */
    public function setSubscriptionId($SubscriptionId)
    {
      $this->SubscriptionId = $SubscriptionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionNumber()
    {
      return $this->SubscriptionNumber;
    }

    /**
     * @param string $SubscriptionNumber
     * @return \Zuora\SubscribeResult
     */
    public function setSubscriptionNumber($SubscriptionNumber)
    {
      $this->SubscriptionNumber = $SubscriptionNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \Zuora\SubscribeResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalMrr()
    {
      return $this->TotalMrr;
    }

    /**
     * @param float $TotalMrr
     * @return \Zuora\SubscribeResult
     */
    public function setTotalMrr($TotalMrr)
    {
      $this->TotalMrr = $TotalMrr;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalTcv()
    {
      return $this->TotalTcv;
    }

    /**
     * @param float $TotalTcv
     * @return \Zuora\SubscribeResult
     */
    public function setTotalTcv($TotalTcv)
    {
      $this->TotalTcv = $TotalTcv;
      return $this;
    }

}
