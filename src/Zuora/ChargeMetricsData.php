<?php

namespace Zuora;

class ChargeMetricsData
{

    /**
     * @var NewChargeMetrics[] $ChargeMetrics
     */
    protected $ChargeMetrics = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NewChargeMetrics[]
     */
    public function getChargeMetrics()
    {
      return $this->ChargeMetrics;
    }

    /**
     * @param NewChargeMetrics[] $ChargeMetrics
     * @return \Zuora\ChargeMetricsData
     */
    public function setChargeMetrics(array $ChargeMetrics = null)
    {
      $this->ChargeMetrics = $ChargeMetrics;
      return $this;
    }

}
