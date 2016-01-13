<?php

namespace Zuora;

class SessionHeader
{

    /**
     * @var string $session
     */
    protected $session = null;

    /**
     * @param string $session
     */
    public function __construct($session)
    {
      $this->session = $session;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->session;
    }

    /**
     * @param string $session
     * @return \Zuora\SessionHeader
     */
    public function setSession($session)
    {
      $this->session = $session;
      return $this;
    }

}
