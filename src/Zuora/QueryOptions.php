<?php

namespace Zuora;

class QueryOptions
{

    /**
     * @var int $batchSize
     */
    protected $batchSize = null;

    /**
     * @var boolean $caseSensitive
     */
    protected $caseSensitive = null;

    /**
     * @param int $batchSize
     * @param boolean $caseSensitive
     */
    public function __construct($batchSize, $caseSensitive)
    {
      $this->batchSize = $batchSize;
      $this->caseSensitive = $caseSensitive;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
      return $this->batchSize;
    }

    /**
     * @param int $batchSize
     * @return \Zuora\QueryOptions
     */
    public function setBatchSize($batchSize)
    {
      $this->batchSize = $batchSize;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCaseSensitive()
    {
      return $this->caseSensitive;
    }

    /**
     * @param boolean $caseSensitive
     * @return \Zuora\QueryOptions
     */
    public function setCaseSensitive($caseSensitive)
    {
      $this->caseSensitive = $caseSensitive;
      return $this;
    }

}
