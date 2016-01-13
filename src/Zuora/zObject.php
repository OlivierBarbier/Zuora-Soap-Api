<?php

namespace Zuora;

class zObject
{

    /**
     * @var string[] $fieldsToNull
     */
    protected $fieldsToNull = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getFieldsToNull()
    {
      return $this->fieldsToNull;
    }

    /**
     * @param string[] $fieldsToNull
     * @return \Zuora\zObject
     */
    public function setFieldsToNull(array $fieldsToNull = null)
    {
      $this->fieldsToNull = $fieldsToNull;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param ID $Id
     * @return \Zuora\zObject
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
