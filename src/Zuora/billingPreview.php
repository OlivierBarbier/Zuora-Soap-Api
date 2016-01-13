<?php

namespace Zuora;

class billingPreview
{

    /**
     * @var BillingPreviewRequest $requests
     */
    protected $requests = null;

    /**
     * @param BillingPreviewRequest $requests
     */
    public function __construct($requests)
    {
      $this->requests = $requests;
    }

    /**
     * @return BillingPreviewRequest
     */
    public function getRequests()
    {
      return $this->requests;
    }

    /**
     * @param BillingPreviewRequest $requests
     * @return \Zuora\billingPreview
     */
    public function setRequests($requests)
    {
      $this->requests = $requests;
      return $this;
    }

}
