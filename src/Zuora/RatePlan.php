<?php

namespace Zuora;

class RatePlan extends zObject
{

    /**
     * @var ID $AmendmentId
     */
    protected $AmendmentId = null;

    /**
     * @var ID $AmendmentSubscriptionRatePlanId
     */
    protected $AmendmentSubscriptionRatePlanId = null;

    /**
     * @var string $AmendmentType
     */
    protected $AmendmentType = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ID $ProductRatePlanId
     */
    protected $ProductRatePlanId = null;

    /**
     * @var ID $SubscriptionId
     */
    protected $SubscriptionId = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ID
     */
    public function getAmendmentId()
    {
      return $this->AmendmentId;
    }

    /**
     * @param ID $AmendmentId
     * @return \Zuora\RatePlan
     */
    public function setAmendmentId($AmendmentId)
    {
      $this->AmendmentId = $AmendmentId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getAmendmentSubscriptionRatePlanId()
    {
      return $this->AmendmentSubscriptionRatePlanId;
    }

    /**
     * @param ID $AmendmentSubscriptionRatePlanId
     * @return \Zuora\RatePlan
     */
    public function setAmendmentSubscriptionRatePlanId($AmendmentSubscriptionRatePlanId)
    {
      $this->AmendmentSubscriptionRatePlanId = $AmendmentSubscriptionRatePlanId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmendmentType()
    {
      return $this->AmendmentType;
    }

    /**
     * @param string $AmendmentType
     * @return \Zuora\RatePlan
     */
    public function setAmendmentType($AmendmentType)
    {
      $this->AmendmentType = $AmendmentType;
      return $this;
    }

    /**
     * @return ID
     */
    public function getCreatedById()
    {
      return $this->CreatedById;
    }

    /**
     * @param ID $CreatedById
     * @return \Zuora\RatePlan
     */
    public function setCreatedById($CreatedById)
    {
      $this->CreatedById = $CreatedById;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \Zuora\RatePlan
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Zuora\RatePlan
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Zuora\RatePlan
     */
    public function setProductRatePlanId($ProductRatePlanId)
    {
      $this->ProductRatePlanId = $ProductRatePlanId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getSubscriptionId()
    {
      return $this->SubscriptionId;
    }

    /**
     * @param ID $SubscriptionId
     * @return \Zuora\RatePlan
     */
    public function setSubscriptionId($SubscriptionId)
    {
      $this->SubscriptionId = $SubscriptionId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getUpdatedById()
    {
      return $this->UpdatedById;
    }

    /**
     * @param ID $UpdatedById
     * @return \Zuora\RatePlan
     */
    public function setUpdatedById($UpdatedById)
    {
      $this->UpdatedById = $UpdatedById;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
      if ($this->UpdatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdatedDate
     * @return \Zuora\RatePlan
     */
    public function setUpdatedDate(\DateTime $UpdatedDate = null)
    {
      if ($UpdatedDate == null) {
       $this->UpdatedDate = null;
      } else {
        $this->UpdatedDate = $UpdatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
