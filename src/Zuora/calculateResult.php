<?php

namespace Zuora;

class calculateResult
{

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    /**
     * @var ChargeMetricsError[] $Error
     */
    protected $Error = null;

    /**
     * @var ChargeMetrics[] $ChargeMetrics
     */
    protected $ChargeMetrics = null;

    /**
     * @param boolean $Success
     */
    public function __construct($Success)
    {
      $this->Success = $Success;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \Zuora\calculateResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->Size;
    }

    /**
     * @param int $Size
     * @return \Zuora\calculateResult
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

    /**
     * @return ChargeMetricsError[]
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param ChargeMetricsError[] $Error
     * @return \Zuora\calculateResult
     */
    public function setError(array $Error = null)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ChargeMetrics[]
     */
    public function getChargeMetrics()
    {
      return $this->ChargeMetrics;
    }

    /**
     * @param ChargeMetrics[] $ChargeMetrics
     * @return \Zuora\calculateResult
     */
    public function setChargeMetrics(array $ChargeMetrics = null)
    {
      $this->ChargeMetrics = $ChargeMetrics;
      return $this;
    }

}
