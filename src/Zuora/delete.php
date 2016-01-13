<?php

namespace Zuora;

class delete
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var ID $ids
     */
    protected $ids = null;

    /**
     * @param string $type
     * @param ID $ids
     */
    public function __construct($type, $ids)
    {
      $this->type = $type;
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
     * @return \Zuora\delete
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Zuora\delete
     */
    public function setIds($ids)
    {
      $this->ids = $ids;
      return $this;
    }

}
