<?php

namespace Zuora;

class amend
{

    /**
     * @var AmendRequest $requests
     */
    protected $requests = null;

    /**
     * @param AmendRequest $requests
     */
    public function __construct($requests)
    {
      $this->requests = $requests;
    }

    /**
     * @return AmendRequest
     */
    public function getRequests()
    {
      return $this->requests;
    }

    /**
     * @param AmendRequest $requests
     * @return \Zuora\amend
     */
    public function setRequests($requests)
    {
      $this->requests = $requests;
      return $this;
    }

}
