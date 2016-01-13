<?php

namespace Zuora;

class PreviewOptions
{

    /**
     * @var boolean $EnablePreviewMode
     */
    protected $EnablePreviewMode = null;

    /**
     * @var int $NumberOfPeriods
     */
    protected $NumberOfPeriods = null;

    /**
     * @var boolean $PreviewThroughTermEnd
     */
    protected $PreviewThroughTermEnd = null;

    /**
     * @var string $PreviewType
     */
    protected $PreviewType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getEnablePreviewMode()
    {
      return $this->EnablePreviewMode;
    }

    /**
     * @param boolean $EnablePreviewMode
     * @return \Zuora\PreviewOptions
     */
    public function setEnablePreviewMode($EnablePreviewMode)
    {
      $this->EnablePreviewMode = $EnablePreviewMode;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPeriods()
    {
      return $this->NumberOfPeriods;
    }

    /**
     * @param int $NumberOfPeriods
     * @return \Zuora\PreviewOptions
     */
    public function setNumberOfPeriods($NumberOfPeriods)
    {
      $this->NumberOfPeriods = $NumberOfPeriods;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreviewThroughTermEnd()
    {
      return $this->PreviewThroughTermEnd;
    }

    /**
     * @param boolean $PreviewThroughTermEnd
     * @return \Zuora\PreviewOptions
     */
    public function setPreviewThroughTermEnd($PreviewThroughTermEnd)
    {
      $this->PreviewThroughTermEnd = $PreviewThroughTermEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreviewType()
    {
      return $this->PreviewType;
    }

    /**
     * @param string $PreviewType
     * @return \Zuora\PreviewOptions
     */
    public function setPreviewType($PreviewType)
    {
      $this->PreviewType = $PreviewType;
      return $this;
    }

}
