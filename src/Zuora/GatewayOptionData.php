<?php

namespace Zuora;

class GatewayOptionData
{

    /**
     * @var GatewayOption $GatewayOption
     */
    protected $GatewayOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GatewayOption
     */
    public function getGatewayOption()
    {
      return $this->GatewayOption;
    }

    /**
     * @param GatewayOption $GatewayOption
     * @return \Zuora\GatewayOptionData
     */
    public function setGatewayOption($GatewayOption)
    {
      $this->GatewayOption = $GatewayOption;
      return $this;
    }

}
