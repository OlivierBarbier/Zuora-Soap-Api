<?php

namespace Zuora;

class generateResponse
{

    /**
     * @var SaveResult $result
     */
    protected $result = null;

    /**
     * @param SaveResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return SaveResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param SaveResult $result
     * @return \Zuora\generateResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
