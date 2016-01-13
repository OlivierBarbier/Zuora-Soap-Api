<?php

namespace Zuora;

class DeleteResult
{

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var boolean $success
     */
    protected $success = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \Zuora\DeleteResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \Zuora\DeleteResult
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->success;
    }

    /**
     * @param boolean $success
     * @return \Zuora\DeleteResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
