<?php

namespace Zuora;

class loginResponse
{

    /**
     * @var LoginResult $result
     */
    protected $result = null;

    /**
     * @param LoginResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return LoginResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param LoginResult $result
     * @return \Zuora\loginResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
