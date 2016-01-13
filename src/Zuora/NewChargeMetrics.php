<?php

namespace Zuora;

class NewChargeMetrics
{

    /**
     * @var string $ChargeNumber
     */
    protected $ChargeNumber = null;

    /**
     * @var float $DMRR
     */
    protected $DMRR = null;

    /**
     * @var float $DTCV
     */
    protected $DTCV = null;

    /**
     * @var float $MRR
     */
    protected $MRR = null;

    /**
     * @var ID $OriginalId
     */
    protected $OriginalId = null;

    /**
     * @var ID $OriginalRatePlanId
     */
    protected $OriginalRatePlanId = null;

    /**
     * @var ID $ProductRatePlanChargeId
     */
    protected $ProductRatePlanChargeId = null;

    /**
     * @var ID $ProductRatePlanId
     */
    protected $ProductRatePlanId = null;

    /**
     * @var float $TCV
     */
    protected $TCV = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getChargeNumber()
    {
      return $this->ChargeNumber;
    }

    /**
     * @param string $ChargeNumber
     * @return \Zuora\NewChargeMetrics
     */
    public function setChargeNumber($ChargeNumber)
    {
      $this->ChargeNumber = $ChargeNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getDMRR()
    {
      return $this->DMRR;
    }

    /**
     * @param float $DMRR
     * @return \Zuora\NewChargeMetrics
     */
    public function setDMRR($DMRR)
    {
      $this->DMRR = $DMRR;
      return $this;
    }

    /**
     * @return float
     */
    public function getDTCV()
    {
      return $this->DTCV;
    }

    /**
     * @param float $DTCV
     * @return \Zuora\NewChargeMetrics
     */
    public function setDTCV($DTCV)
    {
      $this->DTCV = $DTCV;
      return $this;
    }

    /**
     * @return float
     */
    public function getMRR()
    {
      return $this->MRR;
    }

    /**
     * @param float $MRR
     * @return \Zuora\NewChargeMetrics
     */
    public function setMRR($MRR)
    {
      $this->MRR = $MRR;
      return $this;
    }

    /**
     * @return ID
     */
    public function getOriginalId()
    {
      return $this->OriginalId;
    }

    /**
     * @param ID $OriginalId
     * @return \Zuora\NewChargeMetrics
     */
    public function setOriginalId($OriginalId)
    {
      $this->OriginalId = $OriginalId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getOriginalRatePlanId()
    {
      return $this->OriginalRatePlanId;
    }

    /**
     * @param ID $OriginalRatePlanId
     * @return \Zuora\NewChargeMetrics
     */
    public function setOriginalRatePlanId($OriginalRatePlanId)
    {
      $this->OriginalRatePlanId = $OriginalRatePlanId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getProductRatePlanChargeId()
    {
      return $this->ProductRatePlanChargeId;
    }

    /**
     * @param ID $ProductRatePlanChargeId
     * @return \Zuora\NewChargeMetrics
     */
    public function setProductRatePlanChargeId($ProductRatePlanChargeId)
    {
      $this->ProductRatePlanChargeId = $ProductRatePlanChargeId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getProductRatePlanId()
    {
      return $this->ProductRatePlanId;
    }

    /**
     * @param ID $ProductRatePlanId
     * @return \Zuora\NewChargeMetrics
     */
    public function setProductRatePlanId($ProductRatePlanId)
    {
      $this->ProductRatePlanId = $ProductRatePlanId;
      return $this;
    }

    /**
     * @return float
     */
    public function getTCV()
    {
      return $this->TCV;
    }

    /**
     * @param float $TCV
     * @return \Zuora\NewChargeMetrics
     */
    public function setTCV($TCV)
    {
      $this->TCV = $TCV;
      return $this;
    }

}
