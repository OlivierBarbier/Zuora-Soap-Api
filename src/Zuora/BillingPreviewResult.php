<?php

namespace Zuora;

class BillingPreviewResult
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    /**
     * @var Error[] $Errors
     */
    protected $Errors = null;

    /**
     * @var InvoiceItem[] $InvoiceItem
     */
    protected $InvoiceItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ID
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param ID $AccountId
     * @return \Zuora\BillingPreviewResult
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
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
     * @return \Zuora\BillingPreviewResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->Size;
    }

    /**
     * @param int $Size
     * @return \Zuora\BillingPreviewResult
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
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
     * @return \Zuora\BillingPreviewResult
     */
    public function setErrors(array $Errors = null)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return InvoiceItem[]
     */
    public function getInvoiceItem()
    {
      return $this->InvoiceItem;
    }

    /**
     * @param InvoiceItem[] $InvoiceItem
     * @return \Zuora\BillingPreviewResult
     */
    public function setInvoiceItem(array $InvoiceItem = null)
    {
      $this->InvoiceItem = $InvoiceItem;
      return $this;
    }

}
