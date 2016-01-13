<?php

namespace Zuora;

class billingPreviewResponse
{

    /**
     * @var BillingPreviewResult $results
     */
    protected $results = null;

    /**
     * @param BillingPreviewResult $results
     */
    public function __construct($results)
    {
      $this->results = $results;
    }

    /**
     * @return BillingPreviewResult
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param BillingPreviewResult $results
     * @return \Zuora\billingPreviewResponse
     */
    public function setResults($results)
    {
      $this->results = $results;
      return $this;
    }

}
