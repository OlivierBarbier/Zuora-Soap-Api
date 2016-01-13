<?php

namespace Zuora;

class executeResponse
{

    /**
     * @var ExecuteResult $result
     */
    protected $result = null;

    /**
     * @param ExecuteResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ExecuteResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ExecuteResult $result
     * @return \Zuora\executeResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
