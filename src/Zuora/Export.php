<?php

namespace Zuora;

class Export extends zObject
{

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var boolean $Encrypted
     */
    protected $Encrypted = null;

    /**
     * @var ID $FileId
     */
    protected $FileId = null;

    /**
     * @var string $Format
     */
    protected $Format = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Query
     */
    protected $Query = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $StatusReason
     */
    protected $StatusReason = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    /**
     * @var boolean $Zip
     */
    protected $Zip = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ID
     */
    public function getCreatedById()
    {
      return $this->CreatedById;
    }

    /**
     * @param ID $CreatedById
     * @return \Zuora\Export
     */
    public function setCreatedById($CreatedById)
    {
      $this->CreatedById = $CreatedById;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \Zuora\Export
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEncrypted()
    {
      return $this->Encrypted;
    }

    /**
     * @param boolean $Encrypted
     * @return \Zuora\Export
     */
    public function setEncrypted($Encrypted)
    {
      $this->Encrypted = $Encrypted;
      return $this;
    }

    /**
     * @return ID
     */
    public function getFileId()
    {
      return $this->FileId;
    }

    /**
     * @param ID $FileId
     * @return \Zuora\Export
     */
    public function setFileId($FileId)
    {
      $this->FileId = $FileId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param string $Format
     * @return \Zuora\Export
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Zuora\Export
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
      return $this->Query;
    }

    /**
     * @param string $Query
     * @return \Zuora\Export
     */
    public function setQuery($Query)
    {
      $this->Query = $Query;
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
     * @return \Zuora\Export
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Zuora\Export
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusReason()
    {
      return $this->StatusReason;
    }

    /**
     * @param string $StatusReason
     * @return \Zuora\Export
     */
    public function setStatusReason($StatusReason)
    {
      $this->StatusReason = $StatusReason;
      return $this;
    }

    /**
     * @return ID
     */
    public function getUpdatedById()
    {
      return $this->UpdatedById;
    }

    /**
     * @param ID $UpdatedById
     * @return \Zuora\Export
     */
    public function setUpdatedById($UpdatedById)
    {
      $this->UpdatedById = $UpdatedById;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
      if ($this->UpdatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdatedDate
     * @return \Zuora\Export
     */
    public function setUpdatedDate(\DateTime $UpdatedDate = null)
    {
      if ($UpdatedDate == null) {
       $this->UpdatedDate = null;
      } else {
        $this->UpdatedDate = $UpdatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZip()
    {
      return $this->Zip;
    }

    /**
     * @param boolean $Zip
     * @return \Zuora\Export
     */
    public function setZip($Zip)
    {
      $this->Zip = $Zip;
      return $this;
    }

}
