<?php

namespace Zuora;

class queryResponse
{

    /**
     * @var QueryResult $result
     */
    protected $result = null;

    /**
     * @param QueryResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return QueryResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param QueryResult $result
     * @return \Zuora\queryResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
