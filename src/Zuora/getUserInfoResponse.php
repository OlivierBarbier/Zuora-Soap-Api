<?php

namespace Zuora;

class getUserInfoResponse
{

    /**
     * @var string $TenantId
     */
    protected $TenantId = null;

    /**
     * @var string $TenantName
     */
    protected $TenantName = null;

    /**
     * @var string $UserEmail
     */
    protected $UserEmail = null;

    /**
     * @var string $UserFullName
     */
    protected $UserFullName = null;

    /**
     * @var string $UserId
     */
    protected $UserId = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @param string $TenantId
     * @param string $TenantName
     * @param string $UserEmail
     * @param string $UserFullName
     * @param string $UserId
     * @param string $Username
     */
    public function __construct($TenantId, $TenantName, $UserEmail, $UserFullName, $UserId, $Username)
    {
      $this->TenantId = $TenantId;
      $this->TenantName = $TenantName;
      $this->UserEmail = $UserEmail;
      $this->UserFullName = $UserFullName;
      $this->UserId = $UserId;
      $this->Username = $Username;
    }

    /**
     * @return string
     */
    public function getTenantId()
    {
      return $this->TenantId;
    }

    /**
     * @param string $TenantId
     * @return \Zuora\getUserInfoResponse
     */
    public function setTenantId($TenantId)
    {
      $this->TenantId = $TenantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTenantName()
    {
      return $this->TenantName;
    }

    /**
     * @param string $TenantName
     * @return \Zuora\getUserInfoResponse
     */
    public function setTenantName($TenantName)
    {
      $this->TenantName = $TenantName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
      return $this->UserEmail;
    }

    /**
     * @param string $UserEmail
     * @return \Zuora\getUserInfoResponse
     */
    public function setUserEmail($UserEmail)
    {
      $this->UserEmail = $UserEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserFullName()
    {
      return $this->UserFullName;
    }

    /**
     * @param string $UserFullName
     * @return \Zuora\getUserInfoResponse
     */
    public function setUserFullName($UserFullName)
    {
      $this->UserFullName = $UserFullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param string $UserId
     * @return \Zuora\getUserInfoResponse
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \Zuora\getUserInfoResponse
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

}
