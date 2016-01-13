<?php

namespace Zuora;

class DummyHeader
{

    /**
     * @var Account $Account
     */
    protected $Account = null;

    /**
     * @var AccountingCode $AccountingCode
     */
    protected $AccountingCode = null;

    /**
     * @var AccountingPeriod $AccountingPeriod
     */
    protected $AccountingPeriod = null;

    /**
     * @var InvoiceAdjustment $InvoiceAdjustment
     */
    protected $InvoiceAdjustment = null;

    /**
     * @var Amendment $Amendment
     */
    protected $Amendment = null;

    /**
     * @var Invoice $Invoice
     */
    protected $Invoice = null;

    /**
     * @var InvoiceItem $InvoiceItem
     */
    protected $InvoiceItem = null;

    /**
     * @var InvoicePayment $InvoicePayment
     */
    protected $InvoicePayment = null;

    /**
     * @var Import $Import
     */
    protected $Import = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var PaymentMethodSnapshot $PaymentMethodSnapshot
     */
    protected $PaymentMethodSnapshot = null;

    /**
     * @var UnitOfMeasure $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @var Product $Product
     */
    protected $Product = null;

    /**
     * @var Feature $Feature
     */
    protected $Feature = null;

    /**
     * @var ProductFeature $ProductFeature
     */
    protected $ProductFeature = null;

    /**
     * @var ProductRatePlan $ProductRatePlan
     */
    protected $ProductRatePlan = null;

    /**
     * @var ProductRatePlanCharge $ProductRatePlanCharge
     */
    protected $ProductRatePlanCharge = null;

    /**
     * @var ProductRatePlanChargeTier $ProductRatePlanChargeTier
     */
    protected $ProductRatePlanChargeTier = null;

    /**
     * @var RatePlan $RatePlan
     */
    protected $RatePlan = null;

    /**
     * @var RatePlanCharge $RatePlanCharge
     */
    protected $RatePlanCharge = null;

    /**
     * @var RatePlanChargeTier $RatePlanChargeTier
     */
    protected $RatePlanChargeTier = null;

    /**
     * @var TaxationItem $TaxationItem
     */
    protected $TaxationItem = null;

    /**
     * @var Usage $Usage
     */
    protected $Usage = null;

    /**
     * @var Refund $Refund
     */
    protected $Refund = null;

    /**
     * @var RefundInvoicePayment $RefundInvoicePayment
     */
    protected $RefundInvoicePayment = null;

    /**
     * @var CreditBalanceAdjustment $CreditBalanceAdjustment
     */
    protected $CreditBalanceAdjustment = null;

    /**
     * @var Export $Export
     */
    protected $Export = null;

    /**
     * @var InvoiceItemAdjustment $InvoiceItemAdjustment
     */
    protected $InvoiceItemAdjustment = null;

    /**
     * @var CommunicationProfile $CommunicationProfile
     */
    protected $CommunicationProfile = null;

    /**
     * @var InvoiceSplit $InvoiceSplit
     */
    protected $InvoiceSplit = null;

    /**
     * @var InvoiceSplitItem $InvoiceSplitItem
     */
    protected $InvoiceSplitItem = null;

    /**
     * @var BillingPreviewRun $BillingPreviewRun
     */
    protected $BillingPreviewRun = null;

    /**
     * @var ChargeMetricsRun $ChargeMetricsRun
     */
    protected $ChargeMetricsRun = null;

    /**
     * @var BillRun $BillRun
     */
    protected $BillRun = null;

    /**
     * @var InvoiceFile $InvoiceFile
     */
    protected $InvoiceFile = null;

    /**
     * @param Account $Account
     * @param AccountingCode $AccountingCode
     * @param AccountingPeriod $AccountingPeriod
     * @param InvoiceAdjustment $InvoiceAdjustment
     * @param Amendment $Amendment
     * @param Invoice $Invoice
     * @param InvoiceItem $InvoiceItem
     * @param InvoicePayment $InvoicePayment
     * @param Import $Import
     * @param Payment $Payment
     * @param PaymentMethodSnapshot $PaymentMethodSnapshot
     * @param UnitOfMeasure $UnitOfMeasure
     * @param Product $Product
     * @param Feature $Feature
     * @param ProductFeature $ProductFeature
     * @param ProductRatePlan $ProductRatePlan
     * @param ProductRatePlanCharge $ProductRatePlanCharge
     * @param ProductRatePlanChargeTier $ProductRatePlanChargeTier
     * @param RatePlan $RatePlan
     * @param RatePlanCharge $RatePlanCharge
     * @param RatePlanChargeTier $RatePlanChargeTier
     * @param TaxationItem $TaxationItem
     * @param Usage $Usage
     * @param Refund $Refund
     * @param RefundInvoicePayment $RefundInvoicePayment
     * @param CreditBalanceAdjustment $CreditBalanceAdjustment
     * @param Export $Export
     * @param InvoiceItemAdjustment $InvoiceItemAdjustment
     * @param CommunicationProfile $CommunicationProfile
     * @param InvoiceSplit $InvoiceSplit
     * @param InvoiceSplitItem $InvoiceSplitItem
     * @param BillingPreviewRun $BillingPreviewRun
     * @param ChargeMetricsRun $ChargeMetricsRun
     * @param BillRun $BillRun
     * @param InvoiceFile $InvoiceFile
     */
    public function __construct($Account, $AccountingCode, $AccountingPeriod, $InvoiceAdjustment, $Amendment, $Invoice, $InvoiceItem, $InvoicePayment, $Import, $Payment, $PaymentMethodSnapshot, $UnitOfMeasure, $Product, $Feature, $ProductFeature, $ProductRatePlan, $ProductRatePlanCharge, $ProductRatePlanChargeTier, $RatePlan, $RatePlanCharge, $RatePlanChargeTier, $TaxationItem, $Usage, $Refund, $RefundInvoicePayment, $CreditBalanceAdjustment, $Export, $InvoiceItemAdjustment, $CommunicationProfile, $InvoiceSplit, $InvoiceSplitItem, $BillingPreviewRun, $ChargeMetricsRun, $BillRun, $InvoiceFile)
    {
      $this->Account = $Account;
      $this->AccountingCode = $AccountingCode;
      $this->AccountingPeriod = $AccountingPeriod;
      $this->InvoiceAdjustment = $InvoiceAdjustment;
      $this->Amendment = $Amendment;
      $this->Invoice = $Invoice;
      $this->InvoiceItem = $InvoiceItem;
      $this->InvoicePayment = $InvoicePayment;
      $this->Import = $Import;
      $this->Payment = $Payment;
      $this->PaymentMethodSnapshot = $PaymentMethodSnapshot;
      $this->UnitOfMeasure = $UnitOfMeasure;
      $this->Product = $Product;
      $this->Feature = $Feature;
      $this->ProductFeature = $ProductFeature;
      $this->ProductRatePlan = $ProductRatePlan;
      $this->ProductRatePlanCharge = $ProductRatePlanCharge;
      $this->ProductRatePlanChargeTier = $ProductRatePlanChargeTier;
      $this->RatePlan = $RatePlan;
      $this->RatePlanCharge = $RatePlanCharge;
      $this->RatePlanChargeTier = $RatePlanChargeTier;
      $this->TaxationItem = $TaxationItem;
      $this->Usage = $Usage;
      $this->Refund = $Refund;
      $this->RefundInvoicePayment = $RefundInvoicePayment;
      $this->CreditBalanceAdjustment = $CreditBalanceAdjustment;
      $this->Export = $Export;
      $this->InvoiceItemAdjustment = $InvoiceItemAdjustment;
      $this->CommunicationProfile = $CommunicationProfile;
      $this->InvoiceSplit = $InvoiceSplit;
      $this->InvoiceSplitItem = $InvoiceSplitItem;
      $this->BillingPreviewRun = $BillingPreviewRun;
      $this->ChargeMetricsRun = $ChargeMetricsRun;
      $this->BillRun = $BillRun;
      $this->InvoiceFile = $InvoiceFile;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param Account $Account
     * @return \Zuora\DummyHeader
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return AccountingCode
     */
    public function getAccountingCode()
    {
      return $this->AccountingCode;
    }

    /**
     * @param AccountingCode $AccountingCode
     * @return \Zuora\DummyHeader
     */
    public function setAccountingCode($AccountingCode)
    {
      $this->AccountingCode = $AccountingCode;
      return $this;
    }

    /**
     * @return AccountingPeriod
     */
    public function getAccountingPeriod()
    {
      return $this->AccountingPeriod;
    }

    /**
     * @param AccountingPeriod $AccountingPeriod
     * @return \Zuora\DummyHeader
     */
    public function setAccountingPeriod($AccountingPeriod)
    {
      $this->AccountingPeriod = $AccountingPeriod;
      return $this;
    }

    /**
     * @return InvoiceAdjustment
     */
    public function getInvoiceAdjustment()
    {
      return $this->InvoiceAdjustment;
    }

    /**
     * @param InvoiceAdjustment $InvoiceAdjustment
     * @return \Zuora\DummyHeader
     */
    public function setInvoiceAdjustment($InvoiceAdjustment)
    {
      $this->InvoiceAdjustment = $InvoiceAdjustment;
      return $this;
    }

    /**
     * @return Amendment
     */
    public function getAmendment()
    {
      return $this->Amendment;
    }

    /**
     * @param Amendment $Amendment
     * @return \Zuora\DummyHeader
     */
    public function setAmendment($Amendment)
    {
      $this->Amendment = $Amendment;
      return $this;
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param Invoice $Invoice
     * @return \Zuora\DummyHeader
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return InvoiceItem
     */
    public function getInvoiceItem()
    {
      return $this->InvoiceItem;
    }

    /**
     * @param InvoiceItem $InvoiceItem
     * @return \Zuora\DummyHeader
     */
    public function setInvoiceItem($InvoiceItem)
    {
      $this->InvoiceItem = $InvoiceItem;
      return $this;
    }

    /**
     * @return InvoicePayment
     */
    public function getInvoicePayment()
    {
      return $this->InvoicePayment;
    }

    /**
     * @param InvoicePayment $InvoicePayment
     * @return \Zuora\DummyHeader
     */
    public function setInvoicePayment($InvoicePayment)
    {
      $this->InvoicePayment = $InvoicePayment;
      return $this;
    }

    /**
     * @return Import
     */
    public function getImport()
    {
      return $this->Import;
    }

    /**
     * @param Import $Import
     * @return \Zuora\DummyHeader
     */
    public function setImport($Import)
    {
      $this->Import = $Import;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \Zuora\DummyHeader
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return PaymentMethodSnapshot
     */
    public function getPaymentMethodSnapshot()
    {
      return $this->PaymentMethodSnapshot;
    }

    /**
     * @param PaymentMethodSnapshot $PaymentMethodSnapshot
     * @return \Zuora\DummyHeader
     */
    public function setPaymentMethodSnapshot($PaymentMethodSnapshot)
    {
      $this->PaymentMethodSnapshot = $PaymentMethodSnapshot;
      return $this;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getUnitOfMeasure()
    {
      return $this->UnitOfMeasure;
    }

    /**
     * @param UnitOfMeasure $UnitOfMeasure
     * @return \Zuora\DummyHeader
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
      $this->UnitOfMeasure = $UnitOfMeasure;
      return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param Product $Product
     * @return \Zuora\DummyHeader
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return Feature
     */
    public function getFeature()
    {
      return $this->Feature;
    }

    /**
     * @param Feature $Feature
     * @return \Zuora\DummyHeader
     */
    public function setFeature($Feature)
    {
      $this->Feature = $Feature;
      return $this;
    }

    /**
     * @return ProductFeature
     */
    public function getProductFeature()
    {
      return $this->ProductFeature;
    }

    /**
     * @param ProductFeature $ProductFeature
     * @return \Zuora\DummyHeader
     */
    public function setProductFeature($ProductFeature)
    {
      $this->ProductFeature = $ProductFeature;
      return $this;
    }

    /**
     * @return ProductRatePlan
     */
    public function getProductRatePlan()
    {
      return $this->ProductRatePlan;
    }

    /**
     * @param ProductRatePlan $ProductRatePlan
     * @return \Zuora\DummyHeader
     */
    public function setProductRatePlan($ProductRatePlan)
    {
      $this->ProductRatePlan = $ProductRatePlan;
      return $this;
    }

    /**
     * @return ProductRatePlanCharge
     */
    public function getProductRatePlanCharge()
    {
      return $this->ProductRatePlanCharge;
    }

    /**
     * @param ProductRatePlanCharge $ProductRatePlanCharge
     * @return \Zuora\DummyHeader
     */
    public function setProductRatePlanCharge($ProductRatePlanCharge)
    {
      $this->ProductRatePlanCharge = $ProductRatePlanCharge;
      return $this;
    }

    /**
     * @return ProductRatePlanChargeTier
     */
    public function getProductRatePlanChargeTier()
    {
      return $this->ProductRatePlanChargeTier;
    }

    /**
     * @param ProductRatePlanChargeTier $ProductRatePlanChargeTier
     * @return \Zuora\DummyHeader
     */
    public function setProductRatePlanChargeTier($ProductRatePlanChargeTier)
    {
      $this->ProductRatePlanChargeTier = $ProductRatePlanChargeTier;
      return $this;
    }

    /**
     * @return RatePlan
     */
    public function getRatePlan()
    {
      return $this->RatePlan;
    }

    /**
     * @param RatePlan $RatePlan
     * @return \Zuora\DummyHeader
     */
    public function setRatePlan($RatePlan)
    {
      $this->RatePlan = $RatePlan;
      return $this;
    }

    /**
     * @return RatePlanCharge
     */
    public function getRatePlanCharge()
    {
      return $this->RatePlanCharge;
    }

    /**
     * @param RatePlanCharge $RatePlanCharge
     * @return \Zuora\DummyHeader
     */
    public function setRatePlanCharge($RatePlanCharge)
    {
      $this->RatePlanCharge = $RatePlanCharge;
      return $this;
    }

    /**
     * @return RatePlanChargeTier
     */
    public function getRatePlanChargeTier()
    {
      return $this->RatePlanChargeTier;
    }

    /**
     * @param RatePlanChargeTier $RatePlanChargeTier
     * @return \Zuora\DummyHeader
     */
    public function setRatePlanChargeTier($RatePlanChargeTier)
    {
      $this->RatePlanChargeTier = $RatePlanChargeTier;
      return $this;
    }

    /**
     * @return TaxationItem
     */
    public function getTaxationItem()
    {
      return $this->TaxationItem;
    }

    /**
     * @param TaxationItem $TaxationItem
     * @return \Zuora\DummyHeader
     */
    public function setTaxationItem($TaxationItem)
    {
      $this->TaxationItem = $TaxationItem;
      return $this;
    }

    /**
     * @return Usage
     */
    public function getUsage()
    {
      return $this->Usage;
    }

    /**
     * @param Usage $Usage
     * @return \Zuora\DummyHeader
     */
    public function setUsage($Usage)
    {
      $this->Usage = $Usage;
      return $this;
    }

    /**
     * @return Refund
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param Refund $Refund
     * @return \Zuora\DummyHeader
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return RefundInvoicePayment
     */
    public function getRefundInvoicePayment()
    {
      return $this->RefundInvoicePayment;
    }

    /**
     * @param RefundInvoicePayment $RefundInvoicePayment
     * @return \Zuora\DummyHeader
     */
    public function setRefundInvoicePayment($RefundInvoicePayment)
    {
      $this->RefundInvoicePayment = $RefundInvoicePayment;
      return $this;
    }

    /**
     * @return CreditBalanceAdjustment
     */
    public function getCreditBalanceAdjustment()
    {
      return $this->CreditBalanceAdjustment;
    }

    /**
     * @param CreditBalanceAdjustment $CreditBalanceAdjustment
     * @return \Zuora\DummyHeader
     */
    public function setCreditBalanceAdjustment($CreditBalanceAdjustment)
    {
      $this->CreditBalanceAdjustment = $CreditBalanceAdjustment;
      return $this;
    }

    /**
     * @return Export
     */
    public function getExport()
    {
      return $this->Export;
    }

    /**
     * @param Export $Export
     * @return \Zuora\DummyHeader
     */
    public function setExport($Export)
    {
      $this->Export = $Export;
      return $this;
    }

    /**
     * @return InvoiceItemAdjustment
     */
    public function getInvoiceItemAdjustment()
    {
      return $this->InvoiceItemAdjustment;
    }

    /**
     * @param InvoiceItemAdjustment $InvoiceItemAdjustment
     * @return \Zuora\DummyHeader
     */
    public function setInvoiceItemAdjustment($InvoiceItemAdjustment)
    {
      $this->InvoiceItemAdjustment = $InvoiceItemAdjustment;
      return $this;
    }

    /**
     * @return CommunicationProfile
     */
    public function getCommunicationProfile()
    {
      return $this->CommunicationProfile;
    }

    /**
     * @param CommunicationProfile $CommunicationProfile
     * @return \Zuora\DummyHeader
     */
    public function setCommunicationProfile($CommunicationProfile)
    {
      $this->CommunicationProfile = $CommunicationProfile;
      return $this;
    }

    /**
     * @return InvoiceSplit
     */
    public function getInvoiceSplit()
    {
      return $this->InvoiceSplit;
    }

    /**
     * @param InvoiceSplit $InvoiceSplit
     * @return \Zuora\DummyHeader
     */
    public function setInvoiceSplit($InvoiceSplit)
    {
      $this->InvoiceSplit = $InvoiceSplit;
      return $this;
    }

    /**
     * @return InvoiceSplitItem
     */
    public function getInvoiceSplitItem()
    {
      return $this->InvoiceSplitItem;
    }

    /**
     * @param InvoiceSplitItem $InvoiceSplitItem
     * @return \Zuora\DummyHeader
     */
    public function setInvoiceSplitItem($InvoiceSplitItem)
    {
      $this->InvoiceSplitItem = $InvoiceSplitItem;
      return $this;
    }

    /**
     * @return BillingPreviewRun
     */
    public function getBillingPreviewRun()
    {
      return $this->BillingPreviewRun;
    }

    /**
     * @param BillingPreviewRun $BillingPreviewRun
     * @return \Zuora\DummyHeader
     */
    public function setBillingPreviewRun($BillingPreviewRun)
    {
      $this->BillingPreviewRun = $BillingPreviewRun;
      return $this;
    }

    /**
     * @return ChargeMetricsRun
     */
    public function getChargeMetricsRun()
    {
      return $this->ChargeMetricsRun;
    }

    /**
     * @param ChargeMetricsRun $ChargeMetricsRun
     * @return \Zuora\DummyHeader
     */
    public function setChargeMetricsRun($ChargeMetricsRun)
    {
      $this->ChargeMetricsRun = $ChargeMetricsRun;
      return $this;
    }

    /**
     * @return BillRun
     */
    public function getBillRun()
    {
      return $this->BillRun;
    }

    /**
     * @param BillRun $BillRun
     * @return \Zuora\DummyHeader
     */
    public function setBillRun($BillRun)
    {
      $this->BillRun = $BillRun;
      return $this;
    }

    /**
     * @return InvoiceFile
     */
    public function getInvoiceFile()
    {
      return $this->InvoiceFile;
    }

    /**
     * @param InvoiceFile $InvoiceFile
     * @return \Zuora\DummyHeader
     */
    public function setInvoiceFile($InvoiceFile)
    {
      $this->InvoiceFile = $InvoiceFile;
      return $this;
    }

}
