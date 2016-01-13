<?php

namespace Zuora;

class calculateResponse
{

    /**
     * @var calculateResult $results
     */
    protected $results = null;

    /**
     * @param calculateResult $results
     */
    public function __construct($results)
    {
      $this->results = $results;
    }

    /**
     * @return calculateResult
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param calculateResult $results
     * @return \Zuora\calculateResponse
     */
    public function setResults($results)
    {
      $this->results = $results;
      return $this;
    }

}
