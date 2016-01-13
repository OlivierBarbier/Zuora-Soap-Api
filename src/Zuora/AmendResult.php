<?php

namespace Zuora;

class AmendResult
{

    /**
     * @var ID[] $AmendmentIds
     */
    protected $AmendmentIds = null;

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
     * @var InvoiceData[] $InvoiceDatas
     */
    protected $InvoiceDatas = null;

    /**
     * @var ID $InvoiceId
     */
    protected $InvoiceId = null;

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
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var float $TotalDeltaMrr
     */
    protected $TotalDeltaMrr = null;

    /**
     * @var float $TotalDeltaTcv
     */
    protected $TotalDeltaTcv = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ID[]
     */
    public function getAmendmentIds()
    {
      return $this->AmendmentIds;
    }

    /**
     * @param ID[] $AmendmentIds
     * @return \Zuora\AmendResult
     */
    public function setAmendmentIds(array $AmendmentIds = null)
    {
      $this->AmendmentIds = $AmendmentIds;
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
     * @return \Zuora\AmendResult
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
     * @return \Zuora\AmendResult
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
     * @return \Zuora\AmendResult
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
     * @return \Zuora\AmendResult
     */
    public function setGatewayResponseCode($GatewayResponseCode)
    {
      $this->GatewayResponseCode = $GatewayResponseCode;
      return $this;
    }

    /**
     * @return InvoiceData[]
     */
    public function getInvoiceDatas()
    {
      return $this->InvoiceDatas;
    }

    /**
     * @param InvoiceData[] $InvoiceDatas
     * @return \Zuora\AmendResult
     */
    public function setInvoiceDatas(array $InvoiceDatas = null)
    {
      $this->InvoiceDatas = $InvoiceDatas;
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
     * @return \Zuora\AmendResult
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
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
     * @return \Zuora\AmendResult
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
     * @return \Zuora\AmendResult
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
     * @return \Zuora\AmendResult
     */
    public function setSubscriptionId($SubscriptionId)
    {
      $this->SubscriptionId = $SubscriptionId;
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
     * @return \Zuora\AmendResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalDeltaMrr()
    {
      return $this->TotalDeltaMrr;
    }

    /**
     * @param float $TotalDeltaMrr
     * @return \Zuora\AmendResult
     */
    public function setTotalDeltaMrr($TotalDeltaMrr)
    {
      $this->TotalDeltaMrr = $TotalDeltaMrr;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalDeltaTcv()
    {
      return $this->TotalDeltaTcv;
    }

    /**
     * @param float $TotalDeltaTcv
     * @return \Zuora\AmendResult
     */
    public function setTotalDeltaTcv($TotalDeltaTcv)
    {
      $this->TotalDeltaTcv = $TotalDeltaTcv;
      return $this;
    }

}
