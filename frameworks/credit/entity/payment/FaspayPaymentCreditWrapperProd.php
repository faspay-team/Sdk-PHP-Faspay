<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once __DIR__ . '/FaspayPaymentCreditProd.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditBillData.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditCardData.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditConfigApp.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditDomicileData.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditItemData.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditShippingdata.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditShopperData.php';
require_once __DIR__ . '/wrapper/FaspayPaymentCreditTransactionData.php';

/**
 * Description of FaspayPaymentCreditWrapperDev
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditWrapperProd extends FaspayPaymentCreditProd {

    public $pymt_ind = "";
    public $pymt_criteria = "";
    public $pymt_token = "";

    function getPymt_ind() {
        return $this->pymt_ind;
    }

    function getPymt_criteria() {
        return $this->pymt_criteria;
    }

    function getPymt_token() {
        return $this->pymt_token;
    }

    function setPymt_ind($pymt_ind) {
        $this->pymt_ind = $pymt_ind;
    }

    function setPymt_criteria($pymt_criteria) {
        $this->pymt_criteria = $pymt_criteria;
    }

    function setPymt_token($pymt_token) {
        $this->pymt_token = $pymt_token;
    }

    public $shopperData;

    /**
     * *
     * TODO PYMT_IND, PYMT_CRITERIA in PROD
     */
    public $app;
    public $user;
    public $transactionData;
    public $billData;
    public $shippingdata;
    public $itemData;
    public $domicileData;
    public $cardData;

    function __construct(FaspayUserCredit $user, FaspayPaymentCreditTransactionData $transactionData, FaspayPaymentCreditShopperData $shopperData, FaspayPaymentCreditConfigApp $app, FaspayPaymentCreditBillData $billData, FaspayPaymentCreditShippingdata $shippingdata, FaspayPaymentCreditItemData $itemData, FaspayPaymentCreditDomicileData $domicileData, FaspayPaymentCreditCardData $cardData) {
        $this->cardData = $cardData;
        $this->domicileData = $domicileData;
        $this->shippingdata = $shippingdata;
        $this->itemData = $itemData;
        $this->app = $app;
        $this->billData = $billData;
        $this->user = $user;
        $this->transactionData = $transactionData;
        $this->shopperData = $shopperData;
        $this->setMerchantid($user->getMerchantId());
        $this->setMerchant_tranid($transactionData->getMerchant_tranid());
        $this->setCurrencycode($transactionData->getCurrencycode());
        $this->setAmount($transactionData->getAmount() . '.00');
        $this->setSignature($transactionData->getSignature());
        $this->setTxn_password($user->getPass());
        $this->setCustname($shopperData->getCustname());
        $this->setCustemail($shopperData->getCustemail());
        $this->setShopper_ip($shopperData->getShopper_ip());
        $this->setDescription($shopperData->getDescription());
        $this->setReturn_url($app->getReturn_url());    
        $this->setResponse_type($app->getResponse_type());
        $this->setCardno($shopperData->getCardno());    
        $this->setCardname($shopperData->getCardname());    
        $this->setCardtype($shopperData->getCardtype    ());    
        $this->setExpirymonth($shopperData->getExpirymonth());    
        $this->setExpiryyear($shopperData->getExpiryyear());    
        $this->setCardcvc($shopperData->getCardcvc());    
        $this->setCard_issuer_bank_country_code($shopperData->getCard_issuer_bank_country_code());    
        $this->setBilling_address($billData->getBilling_address());    
        $this->setBilling_address_city($billData->getBilling_address_city());    
        $this->setBilling_address_region($billData->getBilling_address_region());    
        $this->setBilling_address_state($billData->getBilling_address_state());    
        $this->setBilling_address_poscode($billData->getBilling_address_poscode ());    
        $this->setBilling_address_country_code($billData->getBilling_address_country_code());    
        $this->setShippingcost($shippingdata->getShippingcost());    
        $this->setPhone_no($shopperData->getPhone_no());    
        $this->setMref1($itemData->getMref1());    
        $this->setMref2($itemData->getMref2());    
        $this->setMref3($itemData->getMref3());    
        $this->setMref4($itemData->getMref4());    
        $this->setMref5($itemData->getMref5());    
        $this->setMref6($itemData->getMref6());    
        $this->setMref7($itemData->getMref7());    
        $this->setMref8($itemData->getMref8());    
        $this->setMref9($itemData->getMref9());    
        $this->setMref10($itemData->getMref10());    
        $this->setMparam1($app->getMparam1());    
        $this->setMparam2($app->getMparam2());    
        $this->setCustomer_ref($shopperData->getCustomer_ref());    
        $this->setFrisk1($app->getFrisk1());    
        $this->setFrisk2($app->getFrisk2());    
        $this->setDomicile_address($domicileData->getDomicile_address());    
        $this->setDomicile_address_city($domicileData->getDomicile_address_city());    
        $this->setDomicile_address_country_code($domicileData->getDomicile_address_country_code());    
        $this->setDomicile_address_poscode($domicileData->getDomicile_address_poscode());    
        $this->setDomicile_address_region($domicileData->getDomicile_address_region());    
        $this->setDomicile_address_state($domicileData->getDomicile_address_state());    
        $this->setDomicile_phone_no($domicileData->getDomicile_phone_no());    
        $this->setHandshake_url($app->getHandshake_url());
        $this->setHandshake_param($app->getHandshake_param());
        $this->setCard_issuer_bank($cardData->getCard_issuer_bank());
        $this->setCard_identity_ref_type($cardData->getCard_identity_ref_type());
        $this->setCard_identity_ref($cardData->getCard_identity_ref());
        $this->setCard_phone($cardData->getCard_phone());
        $this->setCard_bill_addr($cardData->getCard_bill_addr());
        $this->setCard_bill_addr_poscode($cardData->getCard_bill_addr_poscode());
        $this->setCard_bill_addr_city($cardData->getCard_bill_addr_city());
        $this->setCard_bill_addr_region($cardData->getCard_bill_addr_region());
        $this->setCard_bill_addr_state($cardData->getCard_bill_addr_state());
        $this->setCard_bill_addr_country_code($cardData->getCard_bill_addr_country_code());
        
    }

    

}
