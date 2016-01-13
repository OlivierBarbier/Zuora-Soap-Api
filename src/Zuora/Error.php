<?php

namespace Zuora;

class Error
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
     * @var string $Field
     */
    protected $Field = null;

    
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
     * @return \Zuora\Error
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
     * @return \Zuora\Error
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param string $Field
     * @return \Zuora\Error
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

}
