<?php

namespace Zuora;

class amendResponse
{

    /**
     * @var AmendResult $results
     */
    protected $results = null;

    /**
     * @param AmendResult $results
     */
    public function __construct($results)
    {
      $this->results = $results;
    }

    /**
     * @return AmendResult
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param AmendResult $results
     * @return \Zuora\amendResponse
     */
    public function setResults($results)
    {
      $this->results = $results;
      return $this;
    }

}
