<?php

namespace Zuora;

class Product extends zObject
{

    /**
     * @var boolean $AllowFeatureChanges
     */
    protected $AllowFeatureChanges = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var ID $CreatedById
     */
    protected $CreatedById = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var date $EffectiveEndDate
     */
    protected $EffectiveEndDate = null;

    /**
     * @var date $EffectiveStartDate
     */
    protected $EffectiveStartDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    /**
     * @var string $ZZ01_Website__c
     */
    protected $ZZ01_Website__c = null;

    /**
     * @var string $ZZ02_MobileSite__c
     */
    protected $ZZ02_MobileSite__c = null;

    /**
     * @var string $ZZ03_Statistics__c
     */
    protected $ZZ03_Statistics__c = null;

    /**
     * @var string $ZZ04_CallTracking__c
     */
    protected $ZZ04_CallTracking__c = null;

    /**
     * @var string $ZZ05_Facebook__c
     */
    protected $ZZ05_Facebook__c = null;

    /**
     * @var string $ZZ06_Listings__c
     */
    protected $ZZ06_Listings__c = null;

    /**
     * @var string $ZZ07_Multipostings__c
     */
    protected $ZZ07_Multipostings__c = null;

    /**
     * @var string $ZZ08_CustomerSupport__c
     */
    protected $ZZ08_CustomerSupport__c = null;

    /**
     * @var string $ZZ09_Customerfile__c
     */
    protected $ZZ09_Customerfile__c = null;

    /**
     * @var string $ZZ10_ereputation__c
     */
    protected $ZZ10_ereputation__c = null;

    /**
     * @var string $ZZ11_SetupTraining__c
     */
    protected $ZZ11_SetupTraining__c = null;

    /**
     * @var string $ZZ12_BookingEngine__c
     */
    protected $ZZ12_BookingEngine__c = null;

    /**
     * @var string $ZZ13_Newsletters__c
     */
    protected $ZZ13_Newsletters__c = null;

    /**
     * @var string $ZZ14_Reviews__c
     */
    protected $ZZ14_Reviews__c = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAllowFeatureChanges()
    {
      return $this->AllowFeatureChanges;
    }

    /**
     * @param boolean $AllowFeatureChanges
     * @return \Zuora\Product
     */
    public function setAllowFeatureChanges($AllowFeatureChanges)
    {
      $this->AllowFeatureChanges = $AllowFeatureChanges;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \Zuora\Product
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
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
     * @return \Zuora\Product
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
     * @return \Zuora\Product
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
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Zuora\Product
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveEndDate()
    {
      return $this->EffectiveEndDate;
    }

    /**
     * @param date $EffectiveEndDate
     * @return \Zuora\Product
     */
    public function setEffectiveEndDate($EffectiveEndDate)
    {
      $this->EffectiveEndDate = $EffectiveEndDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveStartDate()
    {
      return $this->EffectiveStartDate;
    }

    /**
     * @param date $EffectiveStartDate
     * @return \Zuora\Product
     */
    public function setEffectiveStartDate($EffectiveStartDate)
    {
      $this->EffectiveStartDate = $EffectiveStartDate;
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
     * @return \Zuora\Product
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return \Zuora\Product
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
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
     * @return \Zuora\Product
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
     * @return \Zuora\Product
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
     * @return string
     */
    public function getZZ01_Website__c()
    {
      return $this->ZZ01_Website__c;
    }

    /**
     * @param string $ZZ01_Website__c
     * @return \Zuora\Product
     */
    public function setZZ01_Website__c($ZZ01_Website__c)
    {
      $this->ZZ01_Website__c = $ZZ01_Website__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ02_MobileSite__c()
    {
      return $this->ZZ02_MobileSite__c;
    }

    /**
     * @param string $ZZ02_MobileSite__c
     * @return \Zuora\Product
     */
    public function setZZ02_MobileSite__c($ZZ02_MobileSite__c)
    {
      $this->ZZ02_MobileSite__c = $ZZ02_MobileSite__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ03_Statistics__c()
    {
      return $this->ZZ03_Statistics__c;
    }

    /**
     * @param string $ZZ03_Statistics__c
     * @return \Zuora\Product
     */
    public function setZZ03_Statistics__c($ZZ03_Statistics__c)
    {
      $this->ZZ03_Statistics__c = $ZZ03_Statistics__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ04_CallTracking__c()
    {
      return $this->ZZ04_CallTracking__c;
    }

    /**
     * @param string $ZZ04_CallTracking__c
     * @return \Zuora\Product
     */
    public function setZZ04_CallTracking__c($ZZ04_CallTracking__c)
    {
      $this->ZZ04_CallTracking__c = $ZZ04_CallTracking__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ05_Facebook__c()
    {
      return $this->ZZ05_Facebook__c;
    }

    /**
     * @param string $ZZ05_Facebook__c
     * @return \Zuora\Product
     */
    public function setZZ05_Facebook__c($ZZ05_Facebook__c)
    {
      $this->ZZ05_Facebook__c = $ZZ05_Facebook__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ06_Listings__c()
    {
      return $this->ZZ06_Listings__c;
    }

    /**
     * @param string $ZZ06_Listings__c
     * @return \Zuora\Product
     */
    public function setZZ06_Listings__c($ZZ06_Listings__c)
    {
      $this->ZZ06_Listings__c = $ZZ06_Listings__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ07_Multipostings__c()
    {
      return $this->ZZ07_Multipostings__c;
    }

    /**
     * @param string $ZZ07_Multipostings__c
     * @return \Zuora\Product
     */
    public function setZZ07_Multipostings__c($ZZ07_Multipostings__c)
    {
      $this->ZZ07_Multipostings__c = $ZZ07_Multipostings__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ08_CustomerSupport__c()
    {
      return $this->ZZ08_CustomerSupport__c;
    }

    /**
     * @param string $ZZ08_CustomerSupport__c
     * @return \Zuora\Product
     */
    public function setZZ08_CustomerSupport__c($ZZ08_CustomerSupport__c)
    {
      $this->ZZ08_CustomerSupport__c = $ZZ08_CustomerSupport__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ09_Customerfile__c()
    {
      return $this->ZZ09_Customerfile__c;
    }

    /**
     * @param string $ZZ09_Customerfile__c
     * @return \Zuora\Product
     */
    public function setZZ09_Customerfile__c($ZZ09_Customerfile__c)
    {
      $this->ZZ09_Customerfile__c = $ZZ09_Customerfile__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ10_ereputation__c()
    {
      return $this->ZZ10_ereputation__c;
    }

    /**
     * @param string $ZZ10_ereputation__c
     * @return \Zuora\Product
     */
    public function setZZ10_ereputation__c($ZZ10_ereputation__c)
    {
      $this->ZZ10_ereputation__c = $ZZ10_ereputation__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ11_SetupTraining__c()
    {
      return $this->ZZ11_SetupTraining__c;
    }

    /**
     * @param string $ZZ11_SetupTraining__c
     * @return \Zuora\Product
     */
    public function setZZ11_SetupTraining__c($ZZ11_SetupTraining__c)
    {
      $this->ZZ11_SetupTraining__c = $ZZ11_SetupTraining__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ12_BookingEngine__c()
    {
      return $this->ZZ12_BookingEngine__c;
    }

    /**
     * @param string $ZZ12_BookingEngine__c
     * @return \Zuora\Product
     */
    public function setZZ12_BookingEngine__c($ZZ12_BookingEngine__c)
    {
      $this->ZZ12_BookingEngine__c = $ZZ12_BookingEngine__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ13_Newsletters__c()
    {
      return $this->ZZ13_Newsletters__c;
    }

    /**
     * @param string $ZZ13_Newsletters__c
     * @return \Zuora\Product
     */
    public function setZZ13_Newsletters__c($ZZ13_Newsletters__c)
    {
      $this->ZZ13_Newsletters__c = $ZZ13_Newsletters__c;
      return $this;
    }

    /**
     * @return string
     */
    public function getZZ14_Reviews__c()
    {
      return $this->ZZ14_Reviews__c;
    }

    /**
     * @param string $ZZ14_Reviews__c
     * @return \Zuora\Product
     */
    public function setZZ14_Reviews__c($ZZ14_Reviews__c)
    {
      $this->ZZ14_Reviews__c = $ZZ14_Reviews__c;
      return $this;
    }

}
