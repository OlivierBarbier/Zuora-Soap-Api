<?php

namespace Zuora;

class SaveResult
{

    /**
     * @var Error[] $Errors
     */
    protected $Errors = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param Error[] $Errors
     * @return \Zuora\SaveResult
     */
    public function setErrors(array $Errors = null)
    {
      $this->Errors = $Errors;
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
     * @return \Zuora\SaveResult
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \Zuora\SaveResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
