<?php namespace Zuora;

use Exception;
use SoapClient;
use SoapHeader;

/**
 * Zuora PHP Library.
 *
 * This class implements singleton pattern and allows user to call
 * any of Zuora's API Calls except for login which will be called
 * automatically prior to any other call
 */
class ZuoraFault extends Exception
{
    protected $previous = null;

    public function __construct($message = '', SoapFault $previous = null, $request_headers = '', $last_request = '', $response_headers = '', $last_response = '')
    {
        $this->request_headers = $request_headers;
        $this->last_request = $last_request;
        $this->response_headers = $response_headers;
        $this->last_response = $last_response;
        $this->previous = $previous;
        parent::__construct($message);
    }

    public function __toString()
    {
        $message = $this->getMessage().' in '.$this->getFile().':'.$this->getLine()."\n";
        if ($this->previous) {
            $message .= $this->previous->faultstring."\n";
        }

        return $message;
    }

    /**
     * Similar to the PHP 5.3 Exception API.
     */
    public function getPreviousException()
    {
        return $this->previous;
    }
}

class API
{
    /**
     * Singleton instance.
     *
     * Marked only as protected to allow extension of the class. To extend,
     * simply override {@link getInstance()}.
     *
     * @var API
     */
    protected static $_instance = null;

    protected static $_config = null;

    /**
     * Soap Client.
     *
     * @var SoapClient
     */
    protected $_client;

    public function client()
    {
        return $this->_client;
    }
    /**
     * @var SoapHeader
     */
    protected $_header;

    protected $_endpoint = null;

    protected static $_classmap = array(
        'zObject'                       => 'Zuora\Object',
        'Account'                       => 'Zuora\Account',
        'InvoiceAdjustment'             => 'Zuora\InvoiceAdjustment',
        'InvoiceItemAdjustment'         => 'Zuora\InvoiceItemAdjustment',
        'Amendment'                     => 'Zuora\Amendment',
        'BillRun'                       => 'Zuora\BillRun',
        'Contact'                       => 'Zuora\Contact',
        'CreditBalanceAdjustment'       => 'Zuora\CreditBalanceAdjustment',
        'Invoice'                       => 'Zuora\Invoice',
        'InvoiceItem'                   => 'Zuora\InvoiceItem',
        'Refund'                        => 'Zuora\Refund',
        'RefundInvoicePayment'          => 'Zuora\RefundInvoicePayment',
        'InvoiceItem'                   => 'Zuora\InvoiceItem',
        'InvoicePayment'                => 'Zuora\InvoicePayment',
        'Payment'                       => 'Zuora\Payment',
        'PaymentMethod'                 => 'Zuora\PaymentMethod',
        'Product'                       => 'Zuora\Product',
        'ProductRatePlan'               => 'Zuora\ProductRatePlan',
        'ProductRatePlanCharge'         => 'Zuora\ProductRatePlanCharge',
        'ProductRatePlanChargeTier'     => 'Zuora\ProductRatePlanChargeTier',
        'RatePlan'                      => 'Zuora\RatePlan',
        'RatePlanCharge'                => 'Zuora\RatePlanCharge',
        'RatePlanChargeTier'            => 'Zuora\RatePlanChargeTier',
        'Subscription'                  => 'Zuora\Subscription',
        'Usage'                         => 'Zuora\Usage',
        'Export'                        => 'Zuora\Export',
        'ID'                            => 'Zuora\ID',
        'SubscribeRequest'              => 'Zuora\SubscribeRequest',
        'SubscribeOptions'              => 'Zuora\SubscribeOptions',
        'SubscriptionData'              => 'Zuora\SubscriptionData',
        'RatePlanData'                  => 'Zuora\RatePlanData',
        'RatePlanChargeData'            => 'Zuora\RatePlanChargeData',
        'ProductRatePlanChargeTierData' => 'Zuora\ProductRatePlanChargeTierData',
        'InvoiceData'                   => 'Zuora\InvoiceData',
        'PreviewOptions'                => 'Zuora\PreviewOptions',
        'SubscribeResult'               => 'Zuora\SubscribeResult',
        'QueryLocator'                  => 'Zuora\QueryLocator',
        'Error'                         => 'Zuora\Error',
        'ErrorCode'                     => 'Zuora\ErrorCode',
        'SessionHeader'                 => 'Zuora\SessionHeader',
        'DummyHeader'                   => 'Zuora\DummyHeader',
        'ApiFault'                      => 'Zuora\ApiFault',
        'LoginFault'                    => 'Zuora\LoginFault',
        'InvalidTypeFault'              => 'Zuora\InvalidTypeFault',
        'InvalidValueFault'             => 'Zuora\InvalidValueFault',
        'MalformedQueryFault'           => 'Zuora\MalformedQueryFault',
        'InvalidQueryLocatorFault'      => 'Zuora\InvalidQueryLocatorFault',
        'UnexpectedErrorFault'          => 'Zuora\UnexpectedErrorFault',
        'TaxationItem'                  => 'Zuora\TaxationItem',
        'PaymentMethodSnapshot'         => 'Zuora\PaymentMethodSnapshot',
        'RefundInvoicePayment'          => 'Zuora\RefundInvoicePayment',
    );

    /**
     * Constructor.
     *
     * Instantiate using {@link getInstance()}; API is a singleton
     * object.
     */
    protected function __construct($config)
    {
        self::$_config = $config;

        $this->_client = new SoapClient(self::$_config->wsdl,
            array(
                'soap_version' => SOAP_1_1,
                'trace'        => 1,
                'classmap'     => self::$_classmap,
                'cache_wsdl'   => WSDL_CACHE_NONE,
            )
        );
    }

    /**
     * Log in to Zuora and create a session.
     *
     * @return bool
     *
     * @throws ZuoraFault
     */
    public function login($username, $password)
    {
        if ($this->_endpoint) {
            $this->setLocation($this->_endpoint);
        }
        try {
            $result = $this->_client->login(array('username' => $username, 'password' => $password));
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }
        $header = new SoapHeader(
            'http://api.zuora.com/',
            'SessionHeader',
            array(
                'session' => $result->result->Session,
            )
        );
        $this->addHeader($header);
        $this->_client->__setLocation($result->result->ServerUrl);

        return true;
    }

    public function clearHeaders()
    {
        $this->_header = null;
    }

    public function addHeader($hdr)
    {
        if (!$this->_header) {
            $this->_header = array();
        }
        $this->_header[] = $hdr;
    }

    public function setQueryOptions($batchSize)
    {
        $header = new SoapHeader(
            'http://api.zuora.com/',
            'QueryOptions',
            array(
                'batchSize' => $batchSize,
            )
        );
        $this->addHeader($header);
    }

    public function setQueueHeader($resultEmail, $userId)
    {
        $header = new SoapHeader(
            'http://api.zuora.com/',
            'QueueHeader',
            array(
                'resultEmail' => $resultEmail,
                'userId'      => $userId,
            )
        );
        $this->addHeader($header);
    }

    public function setLocation($endpoint)
    {
        $this->_endpoint = $endpoint;
        $this->_client->__setLocation($this->_endpoint);
    }

    /**
     * Execute subscribe() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function subscribe(
        Account $zAccount,
        SubscriptionData $zSubscriptionData,
        Contact $zBillToContact = null,
        PaymentMethod $zPaymentMethod = null,
        SubscribeOptions $zSubscribeOptions = null,
        Contact $zSoldToContact = null
    ) {
        $subscribeRequest = array(
            'Account'          => $zAccount->getSoapVar(),
            'SubscriptionData' => $zSubscriptionData->getSoapVar(),
        );

        // Optional variables
        foreach (array('BillToContact', 'PaymentMethod', 'SoldToContact', 'SubscribeOptions') as $var) {
            $localVarName = "z{$var}";
            if (isset($$localVarName)) {
                $subscribeRequest[$var] = $$localVarName->getSoapVar();
            }
        }

        try {
            $result = $this->call('subscribe', array('zObjects' => array($subscribeRequest)), null, $this->_header);
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute subscribeWithExistingAccount() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function subscribeWithExistingAccount(
        Account $zAccount,
        SubscriptionData $zSubscriptionData,
        SubscribeOptions $zSubscribeOptions = null
    ) {
        $subscribeRequest = array(
            'Account'          => $zAccount->getSoapVar(),
            'SubscriptionData' => $zSubscriptionData->getSoapVar(),
        );

        if (isset($zSubscribeOptions)) {
            $subscribeRequest['SubscribeOptions'] = $zSubscribeOptions->getSoapVar();
        }

        try {
            $result = $this->call('subscribe', array('zObjects' => array($subscribeRequest)), null, $this->_header);
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute create() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function create(array $zObjects)
    {
        if (count($zObjects) > 50) {
            throw new ZuoraFault('ERROR in '.__METHOD__.': only supports up to 50 objects');
        }
        $soapVars = array();
        $type = 'Zuora\Object';

        foreach ($zObjects as $zObject) {
            if ($zObject instanceof $type) {
                $type = get_class($zObject);
                $soapVars[] = $zObject->getSoapVar();
            } else {
                throw new ZuoraFault('ERROR in '.__METHOD__.': all objects must be of the same type');
            }
        }
        $create = array(
            'zObjects' => $soapVars,
        );
        try {
            $result = $this->call('create', $create, null, $this->_header);
            // echo $this->_client->__getLastRequest();
            // echo "\n\n";
            // echo $this->_client->__getLastResponse();
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute generate() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function generate(array $zObjects)
    {
        if (count($zObjects) > 50) {
            throw new ZuoraFault('ERROR in '.__METHOD__.': only supports up to 50 objects');
        }
        $soapVars = array();
        $type = 'Zuora\Object';
        foreach ($zObjects as $zObject) {
            if ($zObject instanceof $type) {
                $type = get_class($zObject);
                $soapVars[] = $zObject->getSoapVar();
            } else {
                throw new ZuoraFault('ERROR in '.__METHOD__.': all objects must be of the same type');
            }
        }
        $generate = array(
            'zObjects' => $soapVars,
        );
        try {
            $result = $this->call('generate', $generate, null, $this->_header);
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute update() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function update(array $zObjects)
    {
        if (count($zObjects) > 50) {
            ZuoraFault('ERROR in '.__METHOD__.': only supports up to 50 objects');
        }
        $soapVars = array();
        $type = 'Zuora\Object';
        foreach ($zObjects as $zObject) {
            if ($zObject instanceof $type) {
                $type = get_class($zObject);
                $soapVars[] = $zObject->getSoapVar();
            } else {
                throw new ZuoraFault('ERROR in '.__METHOD__.': all objects must be of the same type');
            }
        }
        $update = array(
            'zObjects' => $soapVars,
        );
        try {
            $result = $this->call('update', $update, null, $this->_header);
            // echo $this->_client->__getLastRequest();
            // echo "\n\n";
            // echo $this->_client->__getLastResponse();
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute delete() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function delete($type, $ids)
    {
        $delete = array(
            'type' => $type,
            'ids'  => $ids,
        );
        $deleteWrapper = array(
            'delete' => $delete,
        );

        try {
            $result = $this->call('delete', $deleteWrapper, null, $this->_header);

            $result->result->Success = $result->result->success;
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute executet() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function execute($type, $syncronous, $ids)
    {
        $execute = array(
            'type'        => $type,
            'synchronous' => $syncronous,
            'ids'         => $ids,
        );
        $executeWrapper = array(
            'execute' => $execute,
        );

        try {
            $result = $this->call('execute', $executeWrapper, null, $this->_header);
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute getUserInfo() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function getUserInfo()
    {
        try {
            $result = $this->call('getUserInfo', array(), null, $this->_header);
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Execute query() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function query($zoql)
    {
        $query = array(
            'queryString' => $zoql,
        );
        $queryWrapper = array(
            'query' => $query,
        );

        try {
            $result = $this->call('query', $queryWrapper, null, $this->_header);
        } catch (SoapFault $e) {
            //throw new ZuoraFault('ERROR in ' . __METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
            die('ERROR in '.__METHOD__.' '.$e->getMessage());
        }

        return $result;
    }

    /**
     * Execute queryMore() API call.
     *
     * @return result object
     *
     * @throws ZuoraFault
     */
    public function queryMore($zoql)
    {
        $query = array(
            'queryLocator' => $zoql,
        );
        $queryWrapper = array(
            'queryMore' => $query,
        );

        try {
            $result = $this->call('queryMore', $queryWrapper, null, $this->_header);
        } catch (SoapFault $e) {
            throw new ZuoraFault('ERROR in '.__METHOD__, $e, $this->_client->__getLastRequestHeaders(), $this->_client->__getLastRequest(), $this->_client->__getLastResponseHeaders(), $this->_client->__getLastResponse());
        }

        return $result;
    }

    /**
     * Enforce singleton; disallow cloning.
     */
    private function __clone()
    {
    }

    /**
     * Singleton instance.
     *
     * @return API
     */
    public static function getInstance($config)
    {
        if (null === self::$_instance || $config != self::$_config) {
            self::$_instance = new self($config);
        }

        return self::$_instance;
    }

    public function call($function_name, array $arguments, array $options = null, $input_headers = null, array &$output_headers = null)
    {
        $call = $this->_client->__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);

        // $soapRequest = $this->_client->__getLastRequest()."\n\n";
        // $soapResponse = $this->_client->__getLastResponse()."\n\n\n";
        // file_put_contents('/tmp/soap.xml', $soapRequest, FILE_APPEND) .  "\n";
        // file_put_contents('/tmp/soap.xml', $soapResponse, FILE_APPEND) .  "\n";

        $this->throwExceptionOnError($call);

        return $call;
    }

    protected function throwExceptionOnError($response)
    {
        if (isset($response->result->Success) && !$response->result->Success) {
            $errors = isset($response->result->Errors) ? $response->result->Errors : $response->result->errors;

            throw new \Exception($errors->Message);
        }
    }
}
