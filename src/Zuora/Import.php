<?php

namespace Zuora;

class Import extends zObject
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
     * @var base64Binary $FileContent
     */
    protected $FileContent = null;

    /**
     * @var int $ImportedCount
     */
    protected $ImportedCount = null;

    /**
     * @var string $ImportType
     */
    protected $ImportType = null;

    /**
     * @var string $Md5
     */
    protected $Md5 = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $OriginalResourceUrl
     */
    protected $OriginalResourceUrl = null;

    /**
     * @var string $ResultResourceUrl
     */
    protected $ResultResourceUrl = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $StatusReason
     */
    protected $StatusReason = null;

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    
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
     * @return \Zuora\Import
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
     * @return \Zuora\Import
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
     * @return base64Binary
     */
    public function getFileContent()
    {
      return $this->FileContent;
    }

    /**
     * @param base64Binary $FileContent
     * @return \Zuora\Import
     */
    public function setFileContent($FileContent)
    {
      $this->FileContent = $FileContent;
      return $this;
    }

    /**
     * @return int
     */
    public function getImportedCount()
    {
      return $this->ImportedCount;
    }

    /**
     * @param int $ImportedCount
     * @return \Zuora\Import
     */
    public function setImportedCount($ImportedCount)
    {
      $this->ImportedCount = $ImportedCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getImportType()
    {
      return $this->ImportType;
    }

    /**
     * @param string $ImportType
     * @return \Zuora\Import
     */
    public function setImportType($ImportType)
    {
      $this->ImportType = $ImportType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMd5()
    {
      return $this->Md5;
    }

    /**
     * @param string $Md5
     * @return \Zuora\Import
     */
    public function setMd5($Md5)
    {
      $this->Md5 = $Md5;
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
     * @return \Zuora\Import
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalResourceUrl()
    {
      return $this->OriginalResourceUrl;
    }

    /**
     * @param string $OriginalResourceUrl
     * @return \Zuora\Import
     */
    public function setOriginalResourceUrl($OriginalResourceUrl)
    {
      $this->OriginalResourceUrl = $OriginalResourceUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultResourceUrl()
    {
      return $this->ResultResourceUrl;
    }

    /**
     * @param string $ResultResourceUrl
     * @return \Zuora\Import
     */
    public function setResultResourceUrl($ResultResourceUrl)
    {
      $this->ResultResourceUrl = $ResultResourceUrl;
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
     * @return \Zuora\Import
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
     * @return \Zuora\Import
     */
    public function setStatusReason($StatusReason)
    {
      $this->StatusReason = $StatusReason;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return \Zuora\Import
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
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
     * @return \Zuora\Import
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
     * @return \Zuora\Import
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

}
