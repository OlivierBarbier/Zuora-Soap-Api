<?php

namespace Zuora;

class queryMore
{

    /**
     * @var QueryLocator $queryLocator
     */
    protected $queryLocator = null;

    /**
     * @param QueryLocator $queryLocator
     */
    public function __construct($queryLocator)
    {
      $this->queryLocator = $queryLocator;
    }

    /**
     * @return QueryLocator
     */
    public function getQueryLocator()
    {
      return $this->queryLocator;
    }

    /**
     * @param QueryLocator $queryLocator
     * @return \Zuora\queryMore
     */
    public function setQueryLocator($queryLocator)
    {
      $this->queryLocator = $queryLocator;
      return $this;
    }

}
