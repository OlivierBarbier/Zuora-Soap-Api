<?php

namespace Zuora;

class generate
{

    /**
     * @var zObject $zObjects
     */
    protected $zObjects = null;

    /**
     * @param zObject $zObjects
     */
    public function __construct($zObjects)
    {
      $this->zObjects = $zObjects;
    }

    /**
     * @return zObject
     */
    public function getZObjects()
    {
      return $this->zObjects;
    }

    /**
     * @param zObject $zObjects
     * @return \Zuora\generate
     */
    public function setZObjects($zObjects)
    {
      $this->zObjects = $zObjects;
      return $this;
    }

}
