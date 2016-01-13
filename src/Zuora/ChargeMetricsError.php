<?php

namespace Zuora;

class ChargeMetricsError
{

    /**
     * @var ErrorCode $Code
     */
    protected $Code = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $ChageId
     */
    protected $ChageId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ErrorCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param ErrorCode $Code
     * @return \Zuora\ChargeMetricsError
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Zuora\ChargeMetricsError
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getChageId()
    {
      return $this->ChageId;
    }

    /**
     * @param string $ChageId
     * @return \Zuora\ChargeMetricsError
     */
    public function setChageId($ChageId)
    {
      $this->ChageId = $ChageId;
      return $this;
    }

}
