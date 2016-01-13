<?php

namespace Zuora;

class BillingPreviewRequest
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $ChargeTypeToExclude
     */
    protected $ChargeTypeToExclude = null;

    /**
     * @var date $TargetDate
     */
    protected $TargetDate = null;

    /**
     * @var boolean $IncludingEvergreenSubscription
     */
    protected $IncludingEvergreenSubscription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ID
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param ID $AccountId
     * @return \Zuora\BillingPreviewRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeTypeToExclude()
    {
      return $this->ChargeTypeToExclude;
    }

    /**
     * @param string $ChargeTypeToExclude
     * @return \Zuora\BillingPreviewRequest
     */
    public function setChargeTypeToExclude($ChargeTypeToExclude)
    {
      $this->ChargeTypeToExclude = $ChargeTypeToExclude;
      return $this;
    }

    /**
     * @return date
     */
    public function getTargetDate()
    {
      return $this->TargetDate;
    }

    /**
     * @param date $TargetDate
     * @return \Zuora\BillingPreviewRequest
     */
    public function setTargetDate($TargetDate)
    {
      $this->TargetDate = $TargetDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludingEvergreenSubscription()
    {
      return $this->IncludingEvergreenSubscription;
    }

    /**
     * @param boolean $IncludingEvergreenSubscription
     * @return \Zuora\BillingPreviewRequest
     */
    public function setIncludingEvergreenSubscription($IncludingEvergreenSubscription)
    {
      $this->IncludingEvergreenSubscription = $IncludingEvergreenSubscription;
      return $this;
    }

}
