<?php

namespace Zuora;

class AmendRequest
{

    /**
     * @var Amendment[] $Amendments
     */
    protected $Amendments = null;

    /**
     * @var AmendOptions $AmendOptions
     */
    protected $AmendOptions = null;

    /**
     * @var PreviewOptions $PreviewOptions
     */
    protected $PreviewOptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Amendment[]
     */
    public function getAmendments()
    {
      return $this->Amendments;
    }

    /**
     * @param Amendment[] $Amendments
     * @return \Zuora\AmendRequest
     */
    public function setAmendments(array $Amendments = null)
    {
      $this->Amendments = $Amendments;
      return $this;
    }

    /**
     * @return AmendOptions
     */
    public function getAmendOptions()
    {
      return $this->AmendOptions;
    }

    /**
     * @param AmendOptions $AmendOptions
     * @return \Zuora\AmendRequest
     */
    public function setAmendOptions($AmendOptions)
    {
      $this->AmendOptions = $AmendOptions;
      return $this;
    }

    /**
     * @return PreviewOptions
     */
    public function getPreviewOptions()
    {
      return $this->PreviewOptions;
    }

    /**
     * @param PreviewOptions $PreviewOptions
     * @return \Zuora\AmendRequest
     */
    public function setPreviewOptions($PreviewOptions)
    {
      $this->PreviewOptions = $PreviewOptions;
      return $this;
    }

}
