<?php

namespace Zuora;

class ApiFault
{

    /**
     * @var ErrorCode $FaultCode
     */
    protected $FaultCode = null;

    /**
     * @var string $FaultMessage
     */
    protected $FaultMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ErrorCode
     */
    public function getFaultCode()
    {
      return $this->FaultCode;
    }

    /**
     * @param ErrorCode $FaultCode
     * @return \Zuora\ApiFault
     */
    public function setFaultCode($FaultCode)
    {
      $this->FaultCode = $FaultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaultMessage()
    {
      return $this->FaultMessage;
    }

    /**
     * @param string $FaultMessage
     * @return \Zuora\ApiFault
     */
    public function setFaultMessage($FaultMessage)
    {
      $this->FaultMessage = $FaultMessage;
      return $this;
    }

}
