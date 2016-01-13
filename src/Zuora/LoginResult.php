<?php

namespace Zuora;

class LoginResult
{

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var string $ServerUrl
     */
    protected $ServerUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param string $Session
     * @return \Zuora\LoginResult
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

    /**
     * @return string
     */
    public function getServerUrl()
    {
      return $this->ServerUrl;
    }

    /**
     * @param string $ServerUrl
     * @return \Zuora\LoginResult
     */
    public function setServerUrl($ServerUrl)
    {
      $this->ServerUrl = $ServerUrl;
      return $this;
    }

}
