<?php

namespace Zuora;

class Contact extends zObject
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $County
     */
    protected $County = null;

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
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $HomePhone
     */
    protected $HomePhone = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @var string $NickName
     */
    protected $NickName = null;

    /**
     * @var string $OtherPhone
     */
    protected $OtherPhone = null;

    /**
     * @var string $OtherPhoneType
     */
    protected $OtherPhoneType = null;

    /**
     * @var string $PersonalEmail
     */
    protected $PersonalEmail = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $TaxRegion
     */
    protected $TaxRegion = null;

    /**
     * @var ID $UpdatedById
     */
    protected $UpdatedById = null;

    /**
     * @var \DateTime $UpdatedDate
     */
    protected $UpdatedDate = null;

    /**
     * @var string $WorkEmail
     */
    protected $WorkEmail = null;

    /**
     * @var string $WorkPhone
     */
    protected $WorkPhone = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Zuora\Contact
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \Zuora\Contact
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Zuora\Contact
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Zuora\Contact
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Zuora\Contact
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return \Zuora\Contact
     */
    public function setCounty($County)
    {
      $this->County = $County;
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
     * @return \Zuora\Contact
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
     * @return \Zuora\Contact
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
     * @return \Zuora\Contact
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \Zuora\Contact
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Zuora\Contact
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
      return $this->HomePhone;
    }

    /**
     * @param string $HomePhone
     * @return \Zuora\Contact
     */
    public function setHomePhone($HomePhone)
    {
      $this->HomePhone = $HomePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Zuora\Contact
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
      return $this->MobilePhone;
    }

    /**
     * @param string $MobilePhone
     * @return \Zuora\Contact
     */
    public function setMobilePhone($MobilePhone)
    {
      $this->MobilePhone = $MobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getNickName()
    {
      return $this->NickName;
    }

    /**
     * @param string $NickName
     * @return \Zuora\Contact
     */
    public function setNickName($NickName)
    {
      $this->NickName = $NickName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOtherPhone()
    {
      return $this->OtherPhone;
    }

    /**
     * @param string $OtherPhone
     * @return \Zuora\Contact
     */
    public function setOtherPhone($OtherPhone)
    {
      $this->OtherPhone = $OtherPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getOtherPhoneType()
    {
      return $this->OtherPhoneType;
    }

    /**
     * @param string $OtherPhoneType
     * @return \Zuora\Contact
     */
    public function setOtherPhoneType($OtherPhoneType)
    {
      $this->OtherPhoneType = $OtherPhoneType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonalEmail()
    {
      return $this->PersonalEmail;
    }

    /**
     * @param string $PersonalEmail
     * @return \Zuora\Contact
     */
    public function setPersonalEmail($PersonalEmail)
    {
      $this->PersonalEmail = $PersonalEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \Zuora\Contact
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \Zuora\Contact
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxRegion()
    {
      return $this->TaxRegion;
    }

    /**
     * @param string $TaxRegion
     * @return \Zuora\Contact
     */
    public function setTaxRegion($TaxRegion)
    {
      $this->TaxRegion = $TaxRegion;
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
     * @return \Zuora\Contact
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
     * @return \Zuora\Contact
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
    public function getWorkEmail()
    {
      return $this->WorkEmail;
    }

    /**
     * @param string $WorkEmail
     * @return \Zuora\Contact
     */
    public function setWorkEmail($WorkEmail)
    {
      $this->WorkEmail = $WorkEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
      return $this->WorkPhone;
    }

    /**
     * @param string $WorkPhone
     * @return \Zuora\Contact
     */
    public function setWorkPhone($WorkPhone)
    {
      $this->WorkPhone = $WorkPhone;
      return $this;
    }

}
