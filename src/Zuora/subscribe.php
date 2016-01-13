<?php

namespace Zuora;

class subscribe
{

    /**
     * @var SubscribeRequest $subscribes
     */
    protected $subscribes = null;

    /**
     * @param SubscribeRequest $subscribes
     */
    public function __construct($subscribes)
    {
      $this->subscribes = $subscribes;
    }

    /**
     * @return SubscribeRequest
     */
    public function getSubscribes()
    {
      return $this->subscribes;
    }

    /**
     * @param SubscribeRequest $subscribes
     * @return \Zuora\subscribe
     */
    public function setSubscribes($subscribes)
    {
      $this->subscribes = $subscribes;
      return $this;
    }

}
