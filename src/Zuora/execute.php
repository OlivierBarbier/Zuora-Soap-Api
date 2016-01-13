<?php

namespace Zuora;

class execute
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var boolean $synchronous
     */
    protected $synchronous = null;

    /**
     * @var ID $ids
     */
    protected $ids = null;

    /**
     * @param string $type
     * @param boolean $synchronous
     * @param ID $ids
     */
    public function __construct($type, $synchronous, $ids)
    {
      $this->type = $type;
      $this->synchronous = $synchronous;
      $this->ids = $ids;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Zuora\execute
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSynchronous()
    {
      return $this->synchronous;
    }

    /**
     * @param boolean $synchronous
     * @return \Zuora\execute
     */
    public function setSynchronous($synchronous)
    {
      $this->synchronous = $synchronous;
      return $this;
    }

    /**
     * @return ID
     */
    public function getIds()
    {
      return $this->ids;
    }

    /**
     * @param ID $ids
     * @return \Zuora\execute
     */
    public function setIds($ids)
    {
      $this->ids = $ids;
      return $this;
    }

}
