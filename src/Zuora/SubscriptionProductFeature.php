<?php

namespace Zuora;

class SubscriptionProductFeature extends zObject
{

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $FeatureCode
     */
    protected $FeatureCode = null;

    /**
     * @var ID $FeatureId
     */
    protected $FeatureId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ID $RatePlanId
     */
    protected $RatePlanId = null;

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
    public function getCreatedById()
    {
      return $this->CreatedById;
    }

    /**
     * @param ID $CreatedById
     * @return \Zuora\SubscriptionProductFeature
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
     * @return \Zuora\SubscriptionProductFeature
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
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Zuora\SubscriptionProductFeature
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeatureCode()
    {
      return $this->FeatureCode;
    }

    /**
     * @param string $FeatureCode
     * @return \Zuora\SubscriptionProductFeature
     */
    public function setFeatureCode($FeatureCode)
    {
      $this->FeatureCode = $FeatureCode;
      return $this;
    }

    /**
     * @return ID
     */
    public function getFeatureId()
    {
      return $this->FeatureId;
    }

    /**
     * @param ID $FeatureId
     * @return \Zuora\SubscriptionProductFeature
     */
    public function setFeatureId($FeatureId)
    {
      $this->FeatureId = $FeatureId;
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
     * @return \Zuora\SubscriptionProductFeature
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ID
     */
    public function getRatePlanId()
    {
      return $this->RatePlanId;
    }

    /**
     * @param ID $RatePlanId
     * @return \Zuora\SubscriptionProductFeature
     */
    public function setRatePlanId($RatePlanId)
    {
      $this->RatePlanId = $RatePlanId;
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
     * @return \Zuora\SubscriptionProductFeature
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
     * @return \Zuora\SubscriptionProductFeature
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
