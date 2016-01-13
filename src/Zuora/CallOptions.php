<?php

namespace Zuora;

class CallOptions
{

    /**
     * @var boolean $useSingleTransaction
     */
    protected $useSingleTransaction = null;

    /**
     * @param boolean $useSingleTransaction
     */
    public function __construct($useSingleTransaction)
    {
      $this->useSingleTransaction = $useSingleTransaction;
    }

    /**
     * @return boolean
     */
    public function getUseSingleTransaction()
    {
      return $this->useSingleTransaction;
    }

    /**
     * @param boolean $useSingleTransaction
     * @return \Zuora\CallOptions
     */
    public function setUseSingleTransaction($useSingleTransaction)
    {
      $this->useSingleTransaction = $useSingleTransaction;
      return $this;
    }

}
