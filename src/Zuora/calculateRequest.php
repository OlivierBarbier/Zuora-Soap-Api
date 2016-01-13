<?php

namespace Zuora;

class calculateRequest
{

    /**
     * @var string $chargeId
     */
    protected $chargeId = null;

    /**
     * @param string $chargeId
     */
    public function __construct($chargeId)
    {
      $this->chargeId = $chargeId;
    }

    /**
     * @return string
     */
    public function getChargeId()
    {
      return $this->chargeId;
    }

    /**
     * @param string $chargeId
     * @return \Zuora\calculateRequest
     */
    public function setChargeId($chargeId)
    {
      $this->chargeId = $chargeId;
      return $this;
    }

}
