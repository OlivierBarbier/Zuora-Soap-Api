<?php

namespace Zuora;

class query
{

    /**
     * @var string $queryString
     */
    protected $queryString = null;

    /**
     * @param string $queryString
     */
    public function __construct($queryString)
    {
      $this->queryString = $queryString;
    }

    /**
     * @return string
     */
    public function getQueryString()
    {
      return $this->queryString;
    }

    /**
     * @param string $queryString
     * @return \Zuora\query
     */
    public function setQueryString($queryString)
    {
      $this->queryString = $queryString;
      return $this;
    }

}
