<?php

namespace Zuora;

class subscribeResponse
{

    /**
     * @var SubscribeResult $result
     */
    protected $result = null;

    /**
     * @param SubscribeResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return SubscribeResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param SubscribeResult $result
     * @return \Zuora\subscribeResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
