<?php

namespace Zuora;

class ZuoraService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'zObject' => 'Zuora\\zObject',
      'AccountingCode' => 'Zuora\\AccountingCode',
      'AccountingPeriod' => 'Zuora\\AccountingPeriod',
      'Account' => 'Zuora\\Account',
      'InvoiceAdjustment' => 'Zuora\\InvoiceAdjustment',
      'InvoiceItemAdjustment' => 'Zuora\\InvoiceItemAdjustment',
      'Amendment' => 'Zuora\\Amendment',
      'BillRun' => 'Zuora\\BillRun',
      'Contact' => 'Zuora\\Contact',
      'Invoice' => 'Zuora\\Invoice',
      'InvoiceFile' => 'Zuora\\InvoiceFile',
      'Refund' => 'Zuora\\Refund',
      'RefundInvoicePayment' => 'Zuora\\RefundInvoicePayment',
      'RefundTransactionLog' => 'Zuora\\RefundTransactionLog',
      'InvoiceItem' => 'Zuora\\InvoiceItem',
      'InvoicePayment' => 'Zuora\\InvoicePayment',
      'Payment' => 'Zuora\\Payment',
      'PaymentTransactionLog' => 'Zuora\\PaymentTransactionLog',
      'PaymentMethod' => 'Zuora\\PaymentMethod',
      'PaymentMethodTransactionLog' => 'Zuora\\PaymentMethodTransactionLog',
      'PaymentMethodSnapshot' => 'Zuora\\PaymentMethodSnapshot',
      'UnitOfMeasure' => 'Zuora\\UnitOfMeasure',
      'Product' => 'Zuora\\Product',
      'Feature' => 'Zuora\\Feature',
      'ProductFeature' => 'Zuora\\ProductFeature',
      'ProductRatePlan' => 'Zuora\\ProductRatePlan',
      'ProductRatePlanCharge' => 'Zuora\\ProductRatePlanCharge',
      'ProductRatePlanChargeTier' => 'Zuora\\ProductRatePlanChargeTier',
      'GatewayOption' => 'Zuora\\GatewayOption',
      'RatePlan' => 'Zuora\\RatePlan',
      'SubscriptionProductFeature' => 'Zuora\\SubscriptionProductFeature',
      'RatePlanCharge' => 'Zuora\\RatePlanCharge',
      'RatePlanChargeTier' => 'Zuora\\RatePlanChargeTier',
      'Subscription' => 'Zuora\\Subscription',
      'TaxationItem' => 'Zuora\\TaxationItem',
      'Usage' => 'Zuora\\Usage',
      'Import' => 'Zuora\\Import',
      'CreditBalanceAdjustment' => 'Zuora\\CreditBalanceAdjustment',
      'Export' => 'Zuora\\Export',
      'CommunicationProfile' => 'Zuora\\CommunicationProfile',
      'InvoiceSplit' => 'Zuora\\InvoiceSplit',
      'InvoiceSplitItem' => 'Zuora\\InvoiceSplitItem',
      'BillingPreviewRun' => 'Zuora\\BillingPreviewRun',
      'ChargeMetrics' => 'Zuora\\ChargeMetrics',
      'ChargeMetricsRun' => 'Zuora\\ChargeMetricsRun',
      'LoginResult' => 'Zuora\\LoginResult',
      'SubscribeRequest' => 'Zuora\\SubscribeRequest',
      'SubscribeOptions' => 'Zuora\\SubscribeOptions',
      'SubscribeInvoiceProcessingOptions' => 'Zuora\\SubscribeInvoiceProcessingOptions',
      'SubscriptionData' => 'Zuora\\SubscriptionData',
      'RatePlanData' => 'Zuora\\RatePlanData',
      'SubscriptionProductFeatureList' => 'Zuora\\SubscriptionProductFeatureList',
      'RatePlanChargeData' => 'Zuora\\RatePlanChargeData',
      'ProductRatePlanChargeTierData' => 'Zuora\\ProductRatePlanChargeTierData',
      'InvoicePaymentData' => 'Zuora\\InvoicePaymentData',
      'RefundInvoicePaymentData' => 'Zuora\\RefundInvoicePaymentData',
      'GatewayOptionData' => 'Zuora\\GatewayOptionData',
      'InvoiceData' => 'Zuora\\InvoiceData',
      'InvoiceResult' => 'Zuora\\InvoiceResult',
      'ChargeMetricsData' => 'Zuora\\ChargeMetricsData',
      'NewChargeMetrics' => 'Zuora\\NewChargeMetrics',
      'PreviewOptions' => 'Zuora\\PreviewOptions',
      'SubscribeResult' => 'Zuora\\SubscribeResult',
      'SaveResult' => 'Zuora\\SaveResult',
      'DeleteResult' => 'Zuora\\DeleteResult',
      'ExecuteResult' => 'Zuora\\ExecuteResult',
      'QueryResult' => 'Zuora\\QueryResult',
      'Error' => 'Zuora\\Error',
      'ChargeMetricsError' => 'Zuora\\ChargeMetricsError',
      'login' => 'Zuora\\login',
      'loginResponse' => 'Zuora\\loginResponse',
      'calculateRequest' => 'Zuora\\calculateRequest',
      'calculateChargeMetrics' => 'Zuora\\calculateChargeMetrics',
      'calculateResult' => 'Zuora\\calculateResult',
      'calculateResponse' => 'Zuora\\calculateResponse',
      'subscribe' => 'Zuora\\subscribe',
      'subscribeResponse' => 'Zuora\\subscribeResponse',
      'create' => 'Zuora\\create',
      'createResponse' => 'Zuora\\createResponse',
      'generate' => 'Zuora\\generate',
      'generateResponse' => 'Zuora\\generateResponse',
      'update' => 'Zuora\\update',
      'updateResponse' => 'Zuora\\updateResponse',
      'delete' => 'Zuora\\delete',
      'deleteResponse' => 'Zuora\\deleteResponse',
      'execute' => 'Zuora\\execute',
      'executeResponse' => 'Zuora\\executeResponse',
      'query' => 'Zuora\\query',
      'queryResponse' => 'Zuora\\queryResponse',
      'queryMore' => 'Zuora\\queryMore',
      'queryMoreResponse' => 'Zuora\\queryMoreResponse',
      'SessionHeader' => 'Zuora\\SessionHeader',
      'QueryOptions' => 'Zuora\\QueryOptions',
      'getUserInfoResponse' => 'Zuora\\getUserInfoResponse',
      'getUserInfo' => 'Zuora\\getUserInfo',
      'DummyHeader' => 'Zuora\\DummyHeader',
      'CallOptions' => 'Zuora\\CallOptions',
      'InvoiceProcessingOptions' => 'Zuora\\InvoiceProcessingOptions',
      'AmendOptions' => 'Zuora\\AmendOptions',
      'AmendRequest' => 'Zuora\\AmendRequest',
      'amend' => 'Zuora\\amend',
      'AmendResult' => 'Zuora\\AmendResult',
      'amendResponse' => 'Zuora\\amendResponse',
      'ElectronicPaymentOptions' => 'Zuora\\ElectronicPaymentOptions',
      'ExternalPaymentOptions' => 'Zuora\\ExternalPaymentOptions',
      'BillingPreviewRequest' => 'Zuora\\BillingPreviewRequest',
      'billingPreview' => 'Zuora\\billingPreview',
      'BillingPreviewResult' => 'Zuora\\BillingPreviewResult',
      'billingPreviewResponse' => 'Zuora\\billingPreviewResponse',
      'ApiFault' => 'Zuora\\ApiFault',
      'LoginFault' => 'Zuora\\LoginFault',
      'InvalidTypeFault' => 'Zuora\\InvalidTypeFault',
      'InvalidValueFault' => 'Zuora\\InvalidValueFault',
      'MalformedQueryFault' => 'Zuora\\MalformedQueryFault',
      'InvalidQueryLocatorFault' => 'Zuora\\InvalidQueryLocatorFault',
      'UnexpectedErrorFault' => 'Zuora\\UnexpectedErrorFault',
    );
  
    private $header;

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = __DIR__ . '/../wsdl/zuora.a.71.0.sandbox.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param login $parameters
     * @return loginResponse
     */
    public function login(login $parameters)
    {
      $loginResponse = $this->__soapCall('login', array($parameters));
      $loginResult = $loginResponse->getResult();
      $this->__setLocation($loginResult->getServerUrl());

      $this->header = new \SoapHeader(
          'http://api.zuora.com/',
          'SessionHeader',
          array(
              'session' => $loginResult->getSession()
          )
      );

      return $loginResponse;
    }

    /**
     * @param calculateChargeMetrics $parameters
     * @return calculateResponse
     */
    public function calculateChargeMetrics(calculateChargeMetrics $parameters)
    {
      return $this->__soapCall('calculateChargeMetrics', array($parameters), null, $this->header);
    }

    /**
     * @param subscribe $parameters
     * @return subscribeResponse
     */
    public function subscribe(subscribe $parameters)
    {
      return $this->__soapCall('subscribe', array($parameters), null, $this->header);
    }

    /**
     * @param create $parameters
     * @return createResponse
     */
    public function create(create $parameters)
    {
      return $this->__soapCall('create', array($parameters), null, $this->header);
    }

    /**
     * @param generate $parameters
     * @return generateResponse
     */
    public function generate(generate $parameters)
    {
      return $this->__soapCall('generate', array($parameters), null, $this->header);
    }

    /**
     * @param update $parameters
     * @return updateResponse
     */
    public function update(update $parameters)
    {
      return $this->__soapCall('update', array($parameters), null, $this->header);
    }

    /**
     * @param query $parameters
     * @return queryResponse
     */
    public function query(query $parameters)
    {
      return $this->__soapCall('query', array($parameters), null, $this->header);
    }

    /**
     * Gets the next batch of sObjects from a query
     *
     * @param queryMore $parameters
     * @return queryMoreResponse
     */
    public function queryMore(queryMore $parameters)
    {
      return $this->__soapCall('queryMore', array($parameters), null, $this->header);
    }

    /**
     * @param delete $parameters
     * @return deleteResponse
     */
    public function delete(delete $parameters)
    {
      return $this->__soapCall('delete', array($parameters), null, $this->header);
    }

    /**
     * @param getUserInfo $getUserInfo
     * @return getUserInfoResponse
     */
    public function getUserInfo(getUserInfo $getUserInfo)
    {
      return $this->__soapCall('getUserInfo', array($getUserInfo), null, $this->header);
    }

    /**
     * @param amend $parameters
     * @return amendResponse
     */
    public function amend(amend $parameters)
    {
      return $this->__soapCall('amend', array($parameters), null, $this->header);
    }

    /**
     * @param execute $parameters
     * @return executeResponse
     */
    public function execute(execute $parameters)
    {
      return $this->__soapCall('execute', array($parameters), null, $this->header);
    }

    /**
     * @param billingPreview $parameters
     * @return billingPreviewResponse
     */
    public function billingPreview(billingPreview $parameters)
    {
      return $this->__soapCall('billingPreview', array($parameters), null, $this->header);
    }

}
