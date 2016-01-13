<?php

namespace Zuora;

class PaymentMethodSnapshot extends zObject
{

    /**
     * @var ID $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $AchAbaCode
     */
    protected $AchAbaCode = null;

    /**
     * @var string $AchAccountName
     */
    protected $AchAccountName = null;

    /**
     * @var string $AchAccountNumber
     */
    protected $AchAccountNumber = null;

    /**
     * @var string $AchAccountNumberMask
     */
    protected $AchAccountNumberMask = null;

    /**
     * @var string $AchAccountType
     */
    protected $AchAccountType = null;

    /**
     * @var string $AchBankName
     */
    protected $AchBankName = null;

    /**
     * @var string $BankBranchCode
     */
    protected $BankBranchCode = null;

    /**
     * @var string $BankCheckDigit
     */
    protected $BankCheckDigit = null;

    /**
     * @var string $BankCity
     */
    protected $BankCity = null;

    /**
     * @var string $BankCode
     */
    protected $BankCode = null;

    /**
     * @var string $BankIdentificationNumber
     */
    protected $BankIdentificationNumber = null;

    /**
     * @var string $BankName
     */
    protected $BankName = null;

    /**
     * @var string $BankPostalCode
     */
    protected $BankPostalCode = null;

    /**
     * @var string $BankStreetName
     */
    protected $BankStreetName = null;

    /**
     * @var string $BankStreetNumber
     */
    protected $BankStreetNumber = null;

    /**
     * @var string $BankTransferAccountName
     */
    protected $BankTransferAccountName = null;

    /**
     * @var string $BankTransferAccountNumber
     */
    protected $BankTransferAccountNumber = null;

    /**
     * @var string $BankTransferAccountNumberMask
     */
    protected $BankTransferAccountNumberMask = null;

    /**
     * @var string $BankTransferAccountType
     */
    protected $BankTransferAccountType = null;

    /**
     * @var string $BankTransferType
     */
    protected $BankTransferType = null;

    /**
     * @var string $BusinessIdentificationCode
     */
    protected $BusinessIdentificationCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $CreditCardAddress1
     */
    protected $CreditCardAddress1 = null;

    /**
     * @var string $CreditCardAddress2
     */
    protected $CreditCardAddress2 = null;

    /**
     * @var string $CreditCardCity
     */
    protected $CreditCardCity = null;

    /**
     * @var string $CreditCardCountry
     */
    protected $CreditCardCountry = null;

    /**
     * @var int $CreditCardExpirationMonth
     */
    protected $CreditCardExpirationMonth = null;

    /**
     * @var int $CreditCardExpirationYear
     */
    protected $CreditCardExpirationYear = null;

    /**
     * @var string $CreditCardHolderName
     */
    protected $CreditCardHolderName = null;

    /**
     * @var string $CreditCardMaskNumber
     */
    protected $CreditCardMaskNumber = null;

    /**
     * @var string $CreditCardNumber
     */
    protected $CreditCardNumber = null;

    /**
     * @var string $CreditCardPostalCode
     */
    protected $CreditCardPostalCode = null;

    /**
     * @var string $CreditCardState
     */
    protected $CreditCardState = null;

    /**
     * @var string $CreditCardType
     */
    protected $CreditCardType = null;

    /**
     * @var string $DeviceSessionId
     */
    protected $DeviceSessionId = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $ExistingMandate
     */
    protected $ExistingMandate = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $IBAN
     */
    protected $IBAN = null;

    /**
     * @var string $IPAddress
     */
    protected $IPAddress = null;

    /**
     * @var \DateTime $LastFailedSaleTransactionDate
     */
    protected $LastFailedSaleTransactionDate = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var \DateTime $LastTransactionDateTime
     */
    protected $LastTransactionDateTime = null;

    /**
     * @var string $LastTransactionStatus
     */
    protected $LastTransactionStatus = null;

    /**
     * @var date $MandateCreationDate
     */
    protected $MandateCreationDate = null;

    /**
     * @var string $MandateID
     */
    protected $MandateID = null;

    /**
     * @var string $MandateReceived
     */
    protected $MandateReceived = null;

    /**
     * @var date $MandateUpdateDate
     */
    protected $MandateUpdateDate = null;

    /**
     * @var int $MaxConsecutivePaymentFailures
     */
    protected $MaxConsecutivePaymentFailures = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $NumConsecutiveFailures
     */
    protected $NumConsecutiveFailures = null;

    /**
     * @var ID $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @var string $PaymentMethodStatus
     */
    protected $PaymentMethodStatus = null;

    /**
     * @var int $PaymentRetryWindow
     */
    protected $PaymentRetryWindow = null;

    /**
     * @var string $PaypalBaid
     */
    protected $PaypalBaid = null;

    /**
     * @var string $PaypalEmail
     */
    protected $PaypalEmail = null;

    /**
     * @var string $PaypalPreapprovalKey
     */
    protected $PaypalPreapprovalKey = null;

    /**
     * @var string $PaypalType
     */
    protected $PaypalType = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $SecondTokenId
     */
    protected $SecondTokenId = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $StreetName
     */
    protected $StreetName = null;

    /**
     * @var string $StreetNumber
     */
    protected $StreetNumber = null;

    /**
     * @var string $TokenId
     */
    protected $TokenId = null;

    /**
     * @var int $TotalNumberOfErrorPayments
     */
    protected $TotalNumberOfErrorPayments = null;

    /**
     * @var int $TotalNumberOfProcessedPayments
     */
    protected $TotalNumberOfProcessedPayments = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var boolean $UseDefaultRetryRule
     */
    protected $UseDefaultRetryRule = null;

    
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
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchAbaCode()
    {
      return $this->AchAbaCode;
    }

    /**
     * @param string $AchAbaCode
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setAchAbaCode($AchAbaCode)
    {
      $this->AchAbaCode = $AchAbaCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchAccountName()
    {
      return $this->AchAccountName;
    }

    /**
     * @param string $AchAccountName
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setAchAccountName($AchAccountName)
    {
      $this->AchAccountName = $AchAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchAccountNumber()
    {
      return $this->AchAccountNumber;
    }

    /**
     * @param string $AchAccountNumber
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setAchAccountNumber($AchAccountNumber)
    {
      $this->AchAccountNumber = $AchAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchAccountNumberMask()
    {
      return $this->AchAccountNumberMask;
    }

    /**
     * @param string $AchAccountNumberMask
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setAchAccountNumberMask($AchAccountNumberMask)
    {
      $this->AchAccountNumberMask = $AchAccountNumberMask;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchAccountType()
    {
      return $this->AchAccountType;
    }

    /**
     * @param string $AchAccountType
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setAchAccountType($AchAccountType)
    {
      $this->AchAccountType = $AchAccountType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchBankName()
    {
      return $this->AchBankName;
    }

    /**
     * @param string $AchBankName
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setAchBankName($AchBankName)
    {
      $this->AchBankName = $AchBankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankBranchCode()
    {
      return $this->BankBranchCode;
    }

    /**
     * @param string $BankBranchCode
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankBranchCode($BankBranchCode)
    {
      $this->BankBranchCode = $BankBranchCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCheckDigit()
    {
      return $this->BankCheckDigit;
    }

    /**
     * @param string $BankCheckDigit
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankCheckDigit($BankCheckDigit)
    {
      $this->BankCheckDigit = $BankCheckDigit;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCity()
    {
      return $this->BankCity;
    }

    /**
     * @param string $BankCity
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankCity($BankCity)
    {
      $this->BankCity = $BankCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
      return $this->BankCode;
    }

    /**
     * @param string $BankCode
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankCode($BankCode)
    {
      $this->BankCode = $BankCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankIdentificationNumber()
    {
      return $this->BankIdentificationNumber;
    }

    /**
     * @param string $BankIdentificationNumber
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankIdentificationNumber($BankIdentificationNumber)
    {
      $this->BankIdentificationNumber = $BankIdentificationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankName($BankName)
    {
      $this->BankName = $BankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankPostalCode()
    {
      return $this->BankPostalCode;
    }

    /**
     * @param string $BankPostalCode
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankPostalCode($BankPostalCode)
    {
      $this->BankPostalCode = $BankPostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankStreetName()
    {
      return $this->BankStreetName;
    }

    /**
     * @param string $BankStreetName
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankStreetName($BankStreetName)
    {
      $this->BankStreetName = $BankStreetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankStreetNumber()
    {
      return $this->BankStreetNumber;
    }

    /**
     * @param string $BankStreetNumber
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankStreetNumber($BankStreetNumber)
    {
      $this->BankStreetNumber = $BankStreetNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankTransferAccountName()
    {
      return $this->BankTransferAccountName;
    }

    /**
     * @param string $BankTransferAccountName
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankTransferAccountName($BankTransferAccountName)
    {
      $this->BankTransferAccountName = $BankTransferAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankTransferAccountNumber()
    {
      return $this->BankTransferAccountNumber;
    }

    /**
     * @param string $BankTransferAccountNumber
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankTransferAccountNumber($BankTransferAccountNumber)
    {
      $this->BankTransferAccountNumber = $BankTransferAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankTransferAccountNumberMask()
    {
      return $this->BankTransferAccountNumberMask;
    }

    /**
     * @param string $BankTransferAccountNumberMask
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankTransferAccountNumberMask($BankTransferAccountNumberMask)
    {
      $this->BankTransferAccountNumberMask = $BankTransferAccountNumberMask;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankTransferAccountType()
    {
      return $this->BankTransferAccountType;
    }

    /**
     * @param string $BankTransferAccountType
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankTransferAccountType($BankTransferAccountType)
    {
      $this->BankTransferAccountType = $BankTransferAccountType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankTransferType()
    {
      return $this->BankTransferType;
    }

    /**
     * @param string $BankTransferType
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBankTransferType($BankTransferType)
    {
      $this->BankTransferType = $BankTransferType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessIdentificationCode()
    {
      return $this->BusinessIdentificationCode;
    }

    /**
     * @param string $BusinessIdentificationCode
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setBusinessIdentificationCode($BusinessIdentificationCode)
    {
      $this->BusinessIdentificationCode = $BusinessIdentificationCode;
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
     * @return \Zuora\PaymentMethodSnapshot
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
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardAddress1()
    {
      return $this->CreditCardAddress1;
    }

    /**
     * @param string $CreditCardAddress1
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardAddress1($CreditCardAddress1)
    {
      $this->CreditCardAddress1 = $CreditCardAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardAddress2()
    {
      return $this->CreditCardAddress2;
    }

    /**
     * @param string $CreditCardAddress2
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardAddress2($CreditCardAddress2)
    {
      $this->CreditCardAddress2 = $CreditCardAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardCity()
    {
      return $this->CreditCardCity;
    }

    /**
     * @param string $CreditCardCity
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardCity($CreditCardCity)
    {
      $this->CreditCardCity = $CreditCardCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardCountry()
    {
      return $this->CreditCardCountry;
    }

    /**
     * @param string $CreditCardCountry
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardCountry($CreditCardCountry)
    {
      $this->CreditCardCountry = $CreditCardCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreditCardExpirationMonth()
    {
      return $this->CreditCardExpirationMonth;
    }

    /**
     * @param int $CreditCardExpirationMonth
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardExpirationMonth($CreditCardExpirationMonth)
    {
      $this->CreditCardExpirationMonth = $CreditCardExpirationMonth;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreditCardExpirationYear()
    {
      return $this->CreditCardExpirationYear;
    }

    /**
     * @param int $CreditCardExpirationYear
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardExpirationYear($CreditCardExpirationYear)
    {
      $this->CreditCardExpirationYear = $CreditCardExpirationYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardHolderName()
    {
      return $this->CreditCardHolderName;
    }

    /**
     * @param string $CreditCardHolderName
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardHolderName($CreditCardHolderName)
    {
      $this->CreditCardHolderName = $CreditCardHolderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardMaskNumber()
    {
      return $this->CreditCardMaskNumber;
    }

    /**
     * @param string $CreditCardMaskNumber
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardMaskNumber($CreditCardMaskNumber)
    {
      $this->CreditCardMaskNumber = $CreditCardMaskNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardNumber()
    {
      return $this->CreditCardNumber;
    }

    /**
     * @param string $CreditCardNumber
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardNumber($CreditCardNumber)
    {
      $this->CreditCardNumber = $CreditCardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardPostalCode()
    {
      return $this->CreditCardPostalCode;
    }

    /**
     * @param string $CreditCardPostalCode
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardPostalCode($CreditCardPostalCode)
    {
      $this->CreditCardPostalCode = $CreditCardPostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardState()
    {
      return $this->CreditCardState;
    }

    /**
     * @param string $CreditCardState
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardState($CreditCardState)
    {
      $this->CreditCardState = $CreditCardState;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardType()
    {
      return $this->CreditCardType;
    }

    /**
     * @param string $CreditCardType
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setCreditCardType($CreditCardType)
    {
      $this->CreditCardType = $CreditCardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeviceSessionId()
    {
      return $this->DeviceSessionId;
    }

    /**
     * @param string $DeviceSessionId
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setDeviceSessionId($DeviceSessionId)
    {
      $this->DeviceSessionId = $DeviceSessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getExistingMandate()
    {
      return $this->ExistingMandate;
    }

    /**
     * @param string $ExistingMandate
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setExistingMandate($ExistingMandate)
    {
      $this->ExistingMandate = $ExistingMandate;
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
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getIBAN()
    {
      return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setIBAN($IBAN)
    {
      $this->IBAN = $IBAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
      return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setIPAddress($IPAddress)
    {
      $this->IPAddress = $IPAddress;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastFailedSaleTransactionDate()
    {
      if ($this->LastFailedSaleTransactionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastFailedSaleTransactionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastFailedSaleTransactionDate
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setLastFailedSaleTransactionDate(\DateTime $LastFailedSaleTransactionDate = null)
    {
      if ($LastFailedSaleTransactionDate == null) {
       $this->LastFailedSaleTransactionDate = null;
      } else {
        $this->LastFailedSaleTransactionDate = $LastFailedSaleTransactionDate->format(\DateTime::ATOM);
      }
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
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTransactionDateTime()
    {
      if ($this->LastTransactionDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTransactionDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTransactionDateTime
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setLastTransactionDateTime(\DateTime $LastTransactionDateTime = null)
    {
      if ($LastTransactionDateTime == null) {
       $this->LastTransactionDateTime = null;
      } else {
        $this->LastTransactionDateTime = $LastTransactionDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getLastTransactionStatus()
    {
      return $this->LastTransactionStatus;
    }

    /**
     * @param string $LastTransactionStatus
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setLastTransactionStatus($LastTransactionStatus)
    {
      $this->LastTransactionStatus = $LastTransactionStatus;
      return $this;
    }

    /**
     * @return date
     */
    public function getMandateCreationDate()
    {
      return $this->MandateCreationDate;
    }

    /**
     * @param date $MandateCreationDate
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setMandateCreationDate($MandateCreationDate)
    {
      $this->MandateCreationDate = $MandateCreationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getMandateID()
    {
      return $this->MandateID;
    }

    /**
     * @param string $MandateID
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setMandateID($MandateID)
    {
      $this->MandateID = $MandateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMandateReceived()
    {
      return $this->MandateReceived;
    }

    /**
     * @param string $MandateReceived
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setMandateReceived($MandateReceived)
    {
      $this->MandateReceived = $MandateReceived;
      return $this;
    }

    /**
     * @return date
     */
    public function getMandateUpdateDate()
    {
      return $this->MandateUpdateDate;
    }

    /**
     * @param date $MandateUpdateDate
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setMandateUpdateDate($MandateUpdateDate)
    {
      $this->MandateUpdateDate = $MandateUpdateDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConsecutivePaymentFailures()
    {
      return $this->MaxConsecutivePaymentFailures;
    }

    /**
     * @param int $MaxConsecutivePaymentFailures
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setMaxConsecutivePaymentFailures($MaxConsecutivePaymentFailures)
    {
      $this->MaxConsecutivePaymentFailures = $MaxConsecutivePaymentFailures;
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
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumConsecutiveFailures()
    {
      return $this->NumConsecutiveFailures;
    }

    /**
     * @param int $NumConsecutiveFailures
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setNumConsecutiveFailures($NumConsecutiveFailures)
    {
      $this->NumConsecutiveFailures = $NumConsecutiveFailures;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPaymentMethodId()
    {
      return $this->PaymentMethodId;
    }

    /**
     * @param ID $PaymentMethodId
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodStatus()
    {
      return $this->PaymentMethodStatus;
    }

    /**
     * @param string $PaymentMethodStatus
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPaymentMethodStatus($PaymentMethodStatus)
    {
      $this->PaymentMethodStatus = $PaymentMethodStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentRetryWindow()
    {
      return $this->PaymentRetryWindow;
    }

    /**
     * @param int $PaymentRetryWindow
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPaymentRetryWindow($PaymentRetryWindow)
    {
      $this->PaymentRetryWindow = $PaymentRetryWindow;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaypalBaid()
    {
      return $this->PaypalBaid;
    }

    /**
     * @param string $PaypalBaid
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPaypalBaid($PaypalBaid)
    {
      $this->PaypalBaid = $PaypalBaid;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaypalEmail()
    {
      return $this->PaypalEmail;
    }

    /**
     * @param string $PaypalEmail
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPaypalEmail($PaypalEmail)
    {
      $this->PaypalEmail = $PaypalEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaypalPreapprovalKey()
    {
      return $this->PaypalPreapprovalKey;
    }

    /**
     * @param string $PaypalPreapprovalKey
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPaypalPreapprovalKey($PaypalPreapprovalKey)
    {
      $this->PaypalPreapprovalKey = $PaypalPreapprovalKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaypalType()
    {
      return $this->PaypalType;
    }

    /**
     * @param string $PaypalType
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPaypalType($PaypalType)
    {
      $this->PaypalType = $PaypalType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
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
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondTokenId()
    {
      return $this->SecondTokenId;
    }

    /**
     * @param string $SecondTokenId
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setSecondTokenId($SecondTokenId)
    {
      $this->SecondTokenId = $SecondTokenId;
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
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
      return $this->StreetName;
    }

    /**
     * @param string $StreetName
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setStreetName($StreetName)
    {
      $this->StreetName = $StreetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
      return $this->StreetNumber;
    }

    /**
     * @param string $StreetNumber
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setStreetNumber($StreetNumber)
    {
      $this->StreetNumber = $StreetNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenId()
    {
      return $this->TokenId;
    }

    /**
     * @param string $TokenId
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setTokenId($TokenId)
    {
      $this->TokenId = $TokenId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfErrorPayments()
    {
      return $this->TotalNumberOfErrorPayments;
    }

    /**
     * @param int $TotalNumberOfErrorPayments
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setTotalNumberOfErrorPayments($TotalNumberOfErrorPayments)
    {
      $this->TotalNumberOfErrorPayments = $TotalNumberOfErrorPayments;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfProcessedPayments()
    {
      return $this->TotalNumberOfProcessedPayments;
    }

    /**
     * @param int $TotalNumberOfProcessedPayments
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setTotalNumberOfProcessedPayments($TotalNumberOfProcessedPayments)
    {
      $this->TotalNumberOfProcessedPayments = $TotalNumberOfProcessedPayments;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDefaultRetryRule()
    {
      return $this->UseDefaultRetryRule;
    }

    /**
     * @param boolean $UseDefaultRetryRule
     * @return \Zuora\PaymentMethodSnapshot
     */
    public function setUseDefaultRetryRule($UseDefaultRetryRule)
    {
      $this->UseDefaultRetryRule = $UseDefaultRetryRule;
      return $this;
    }

}
