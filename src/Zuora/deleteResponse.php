<?php

namespace Zuora;

class deleteResponse
{

    /**
     * @var DeleteResult $result
     */
    protected $result = null;

    /**
     * @param DeleteResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return DeleteResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DeleteResult $result
     * @return \Zuora\deleteResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
