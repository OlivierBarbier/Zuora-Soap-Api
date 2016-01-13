<?php

namespace Zuora;

class calculateChargeMetrics
{

    /**
     * @var calculateRequest $request
     */
    protected $request = null;

    /**
     * @param calculateRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return calculateRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param calculateRequest $request
     * @return \Zuora\calculateChargeMetrics
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
