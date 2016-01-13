<?php

namespace Zuora;

class UnitOfMeasure extends zObject
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var int $DecimalPlaces
     */
    protected $DecimalPlaces = null;

    /**
     * @var string $DisplayedAs
     */
    protected $DisplayedAs = null;

    /**
     * @var string $RoundingMode
     */
    protected $RoundingMode = null;

    /**
     * @var string $UomName
     */
    protected $UomName = null;

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
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \Zuora\UnitOfMeasure
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
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
     * @return \Zuora\UnitOfMeasure
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
     * @return \Zuora\UnitOfMeasure
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
     * @return int
     */
    public function getDecimalPlaces()
    {
      return $this->DecimalPlaces;
    }

    /**
     * @param int $DecimalPlaces
     * @return \Zuora\UnitOfMeasure
     */
    public function setDecimalPlaces($DecimalPlaces)
    {
      $this->DecimalPlaces = $DecimalPlaces;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayedAs()
    {
      return $this->DisplayedAs;
    }

    /**
     * @param string $DisplayedAs
     * @return \Zuora\UnitOfMeasure
     */
    public function setDisplayedAs($DisplayedAs)
    {
      $this->DisplayedAs = $DisplayedAs;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoundingMode()
    {
      return $this->RoundingMode;
    }

    /**
     * @param string $RoundingMode
     * @return \Zuora\UnitOfMeasure
     */
    public function setRoundingMode($RoundingMode)
    {
      $this->RoundingMode = $RoundingMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUomName()
    {
      return $this->UomName;
    }

    /**
     * @param string $UomName
     * @return \Zuora\UnitOfMeasure
     */
    public function setUomName($UomName)
    {
      $this->UomName = $UomName;
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
     * @return \Zuora\UnitOfMeasure
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
     * @return \Zuora\UnitOfMeasure
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
