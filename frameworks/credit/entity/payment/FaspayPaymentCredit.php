<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCredit
 *
 * @author hilmananwarsah
 */
abstract class FaspayPaymentCredit {

    const RESPONSE_TYPE_GET = "1";
    const RESPONSE_TYPE_POST = "2";
    const RESPONSE_TYPE_PRINT = "3";
    const CARD_TYPE_MASTERCARD = 'M';
    const CARD_TYPE_VISA = 'V';
    const CARD_TYPE_JCB = 'J';
    const CARD_TYPE_AMEX = 'A';

    public $payment_method = "1";
    public $merchantid;
    public $merchant_tranid;
    public $txn_password;
    public $lang;
    public $currencycode;
    public $amount;
    public $signature;
    public $custname;
    public $custemail;
    public $shopper_ip;
    public $description;
    public $response_type;
    public $return_url;
    public $cardno;
    public $cardname;
    public $cardtype;
    public $expirymonth;
    public $expiryyear;
    public $cardcvc;
    public $card_issuer_bank_country_code;
    public $billing_address;
    public $billing_address_city;
    public $billing_address_region;
    public $billing_address_state;
    public $billing_address_poscode;
    public $billing_address_country_code;
    public $receiver_name_for_shipping;
    public $shipping_address;
    public $shipping_address_city;
    public $shipping_address_region;
    public $shipping_address_state;
    public $shipping_address_poscode;
    public $shipping_address_country_code;
    public $shippingcost;
    public $phone_no;
    public $mref1;
    public $mref2;
    public $mref3;
    public $mref4;
    public $mref5;
    public $mref6;
    public $mref7;
    public $mref8;
    public $mref9;
    public $mref10;
    public $mparam1;
    public $mparam2;
    public $customer_ref;
    public $frisk1;
    public $frisk2;
    public $domicile_address;
    public $domicile_address_city;
    public $domicile_address_region;
    public $domicile_address_state;
    public $domicile_address_poscode;
    public $domicile_address_country_code;
    public $domicile_phone_no;
    public $handshake_url;
    public $handshake_param;
    public $card_issuer_bank;
    public $card_identity_ref_type;
    public $card_identity_ref;
    public $card_phone;
    public $card_bill_addr;
    public $card_bill_addr_poscode;
    public $card_bill_addr_city;
    public $card_bill_addr_region;
    public $card_bill_addr_state;
    public $card_bill_addr_country_code;
    public $card_email;

    function getPayment_method() {
        return $this->payment_method;
    }

    function getMerchantid() {
        return $this->merchantid;
    }

    function getMerchant_tranid() {
        return $this->merchant_tranid;
    }

    function getTxn_password() {
        return $this->txn_password;
    }

    function getLang() {
        return $this->lang;
    }

    function getCurrencycode() {
        return $this->currencycode;
    }

    function getAmount() {
        return $this->amount;
    }

    function getSignature() {
        return $this->signature;
    }

    function getCustname() {
        return $this->custname;
    }

    function getCustemail() {
        return $this->custemail;
    }

    function getShopper_ip() {
        return $this->shopper_ip;
    }

    function getDescription() {
        return $this->description;
    }

    function getResponse_type() {
        return $this->response_type;
    }

    function getReturn_url() {
        return $this->return_url;
    }

    function getCardno() {
        return $this->cardno;
    }

    function getCardname() {
        return $this->cardname;
    }

    function getCardtype() {
        return $this->cardtype;
    }

    function getExpirymonth() {
        return $this->expirymonth;
    }

    function getExpiryyear() {
        return $this->expiryyear;
    }

    function getCardcvc() {
        return $this->cardcvc;
    }

    function getCard_issuer_bank_country_code() {
        return $this->card_issuer_bank_country_code;
    }

    function getBilling_address() {
        return $this->billing_address;
    }

    function getBilling_address_city() {
        return $this->billing_address_city;
    }

    function getBilling_address_region() {
        return $this->billing_address_region;
    }

    function getBilling_address_state() {
        return $this->billing_address_state;
    }

    function getBilling_address_poscode() {
        return $this->billing_address_poscode;
    }

    function getBilling_address_country_code() {
        return $this->billing_address_country_code;
    }

    function getReceiver_name_for_shipping() {
        return $this->receiver_name_for_shipping;
    }

    function getShipping_address() {
        return $this->shipping_address;
    }

    function getShipping_address_city() {
        return $this->shipping_address_city;
    }

    function getShipping_address_region() {
        return $this->shipping_address_region;
    }

    function getShipping_address_state() {
        return $this->shipping_address_state;
    }

    function getShipping_address_poscode() {
        return $this->shipping_address_poscode;
    }

    function getShipping_address_country_code() {
        return $this->shipping_address_country_code;
    }

    function getShippingcost() {
        return $this->shippingcost;
    }

    function getPhone_no() {
        return $this->phone_no;
    }

    function getMref1() {
        return $this->mref1;
    }

    function getMref2() {
        return $this->mref2;
    }

    function getMref3() {
        return $this->mref3;
    }

    function getMref4() {
        return $this->mref4;
    }

    function getMref5() {
        return $this->mref5;
    }

    function getMref6() {
        return $this->mref6;
    }

    function getMref7() {
        return $this->mref7;
    }

    function getMref8() {
        return $this->mref8;
    }

    function getMref9() {
        return $this->mref9;
    }

    function getMref10() {
        return $this->mref10;
    }

    function getMparam1() {
        return $this->mparam1;
    }

    function getMparam2() {
        return $this->mparam2;
    }

    function getCustomer_ref() {
        return $this->customer_ref;
    }

    function getFrisk1() {
        return $this->frisk1;
    }

    function getFrisk2() {
        return $this->frisk2;
    }

    function getDomicile_address() {
        return $this->domicile_address;
    }

    function getDomicile_address_city() {
        return $this->domicile_address_city;
    }

    function getDomicile_address_region() {
        return $this->domicile_address_region;
    }

    function getDomicile_address_state() {
        return $this->domicile_address_state;
    }

    function getDomicile_address_poscode() {
        return $this->domicile_address_poscode;
    }

    function getDomicile_address_country_code() {
        return $this->domicile_address_country_code;
    }

    function getDomicile_phone_no() {
        return $this->domicile_phone_no;
    }

    function getHandshake_url() {
        return $this->handshake_url;
    }

    function getHandshake_param() {
        return $this->handshake_param;
    }

    function getCard_issuer_bank() {
        return $this->card_issuer_bank;
    }

    function getCard_identity_ref_type() {
        return $this->card_identity_ref_type;
    }

    function getCard_identity_ref() {
        return $this->card_identity_ref;
    }

    function getCard_phone() {
        return $this->card_phone;
    }

    function getCard_bill_addr() {
        return $this->card_bill_addr;
    }

    function getCard_bill_addr_poscode() {
        return $this->card_bill_addr_poscode;
    }

    function getCard_bill_addr_city() {
        return $this->card_bill_addr_city;
    }

    function getCard_bill_addr_region() {
        return $this->card_bill_addr_region;
    }

    function getCard_bill_addr_state() {
        return $this->card_bill_addr_state;
    }

    function getCard_bill_addr_country_code() {
        return $this->card_bill_addr_country_code;
    }

    function getCard_email() {
        return $this->card_email;
    }

    function setPayment_method($payment_method) {
        $this->payment_method = $payment_method;
    }

    function setMerchantid($merchantid) {
        $this->merchantid = $merchantid;
    }

    function setMerchant_tranid($merchant_tranid) {
        $this->merchant_tranid = $merchant_tranid;
    }

    function setTxn_password($txn_password) {
        $this->txn_password = $txn_password;
    }

    function setLang($lang) {
        $this->lang = $lang;
    }

    function setCurrencycode($currencycode) {
        $this->currencycode = $currencycode;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setSignature($signature) {
        $this->signature = $signature;
    }

    function setCustname($custname) {
        $this->custname = $custname;
    }

    function setCustemail($custemail) {
        $this->custemail = $custemail;
    }

    function setShopper_ip($shopper_ip) {
        $this->shopper_ip = $shopper_ip;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setResponse_type($response_type) {
        $this->response_type = $response_type;
    }

    function setReturn_url($return_url) {
        $this->return_url = $return_url;
    }

    function setCardno($cardno) {
        $this->cardno = $cardno;
    }

    function setCardname($cardname) {
        $this->cardname = $cardname;
    }

    function setCardtype($cardtype) {
        $this->cardtype = $cardtype;
    }

    function setExpirymonth($expirymonth) {
        $this->expirymonth = $expirymonth;
    }

    function setExpiryyear($expiryyear) {
        $this->expiryyear = $expiryyear;
    }

    function setCardcvc($cardcvc) {
        $this->cardcvc = $cardcvc;
    }

    function setCard_issuer_bank_country_code($card_issuer_bank_country_code) {
        $this->card_issuer_bank_country_code = $card_issuer_bank_country_code;
    }

    function setBilling_address($billing_address) {
        $this->billing_address = $billing_address;
    }

    function setBilling_address_city($billing_address_city) {
        $this->billing_address_city = $billing_address_city;
    }

    function setBilling_address_region($billing_address_region) {
        $this->billing_address_region = $billing_address_region;
    }

    function setBilling_address_state($billing_address_state) {
        $this->billing_address_state = $billing_address_state;
    }

    function setBilling_address_poscode($billing_address_poscode) {
        $this->billing_address_poscode = $billing_address_poscode;
    }

    function setBilling_address_country_code($billing_address_country_code) {
        $this->billing_address_country_code = $billing_address_country_code;
    }

    function setReceiver_name_for_shipping($receiver_name_for_shipping) {
        $this->receiver_name_for_shipping = $receiver_name_for_shipping;
    }

    function setShipping_address($shipping_address) {
        $this->shipping_address = $shipping_address;
    }

    function setShipping_address_city($shipping_address_city) {
        $this->shipping_address_city = $shipping_address_city;
    }

    function setShipping_address_region($shipping_address_region) {
        $this->shipping_address_region = $shipping_address_region;
    }

    function setShipping_address_state($shipping_address_state) {
        $this->shipping_address_state = $shipping_address_state;
    }

    function setShipping_address_poscode($shipping_address_poscode) {
        $this->shipping_address_poscode = $shipping_address_poscode;
    }

    function setShipping_address_country_code($shipping_address_country_code) {
        $this->shipping_address_country_code = $shipping_address_country_code;
    }

    function setShippingcost($shippingcost) {
        $this->shippingcost = $shippingcost;
    }

    function setPhone_no($phone_no) {
        $this->phone_no = $phone_no;
    }

    function setMref1($mref1) {
        $this->mref1 = $mref1;
    }

    function setMref2($mref2) {
        $this->mref2 = $mref2;
    }

    function setMref3($mref3) {
        $this->mref3 = $mref3;
    }

    function setMref4($mref4) {
        $this->mref4 = $mref4;
    }

    function setMref5($mref5) {
        $this->mref5 = $mref5;
    }

    function setMref6($mref6) {
        $this->mref6 = $mref6;
    }

    function setMref7($mref7) {
        $this->mref7 = $mref7;
    }

    function setMref8($mref8) {
        $this->mref8 = $mref8;
    }

    function setMref9($mref9) {
        $this->mref9 = $mref9;
    }

    function setMref10($mref10) {
        $this->mref10 = $mref10;
    }

    function setMparam1($mparam1) {
        $this->mparam1 = $mparam1;
    }

    function setMparam2($mparam2) {
        $this->mparam2 = $mparam2;
    }

    function setCustomer_ref($customer_ref) {
        $this->customer_ref = $customer_ref;
    }

    function setFrisk1($frisk1) {
        $this->frisk1 = $frisk1;
    }

    function setFrisk2($frisk2) {
        $this->frisk2 = $frisk2;
    }

    function setDomicile_address($domicile_address) {
        $this->domicile_address = $domicile_address;
    }

    function setDomicile_address_city($domicile_address_city) {
        $this->domicile_address_city = $domicile_address_city;
    }

    function setDomicile_address_region($domicile_address_region) {
        $this->domicile_address_region = $domicile_address_region;
    }

    function setDomicile_address_state($domicile_address_state) {
        $this->domicile_address_state = $domicile_address_state;
    }

    function setDomicile_address_poscode($domicile_address_poscode) {
        $this->domicile_address_poscode = $domicile_address_poscode;
    }

    function setDomicile_address_country_code($domicile_address_country_code) {
        $this->domicile_address_country_code = $domicile_address_country_code;
    }

    function setDomicile_phone_no($domicile_phone_no) {
        $this->domicile_phone_no = $domicile_phone_no;
    }

    function setHandshake_url($handshake_url) {
        $this->handshake_url = $handshake_url;
    }

    function setHandshake_param($handshake_param) {
        $this->handshake_param = $handshake_param;
    }

    function setCard_issuer_bank($card_issuer_bank) {
        $this->card_issuer_bank = $card_issuer_bank;
    }

    function setCard_identity_ref_type($card_identity_ref_type) {
        $this->card_identity_ref_type = $card_identity_ref_type;
    }

    function setCard_identity_ref($card_identity_ref) {
        $this->card_identity_ref = $card_identity_ref;
    }

    function setCard_phone($card_phone) {
        $this->card_phone = $card_phone;
    }

    function setCard_bill_addr($card_bill_addr) {
        $this->card_bill_addr = $card_bill_addr;
    }

    function setCard_bill_addr_poscode($card_bill_addr_poscode) {
        $this->card_bill_addr_poscode = $card_bill_addr_poscode;
    }

    function setCard_bill_addr_city($card_bill_addr_city) {
        $this->card_bill_addr_city = $card_bill_addr_city;
    }

    function setCard_bill_addr_region($card_bill_addr_region) {
        $this->card_bill_addr_region = $card_bill_addr_region;
    }

    function setCard_bill_addr_state($card_bill_addr_state) {
        $this->card_bill_addr_state = $card_bill_addr_state;
    }

    function setCard_bill_addr_country_code($card_bill_addr_country_code) {
        $this->card_bill_addr_country_code = $card_bill_addr_country_code;
    }

    function setCard_email($card_email) {
        $this->card_email = $card_email;
    }

    abstract function getUrl();

    function generateHtml() {
        $x = get_object_vars($this);
        echo "<form method=\"post\" name=\"form\" action=\"" . $this->getUrl() . "\">";
        foreach ($x as $key => $value) {
            if (is_object($value)) {
                
            } else {


                $e = strtoupper($key);
                if ($e == "CARDNAME") {
                    echo "<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
                } else if ($e == "CARDNO") {
                    
                } else {
                    echo "<input type=\"hidden\" name=\"$e\" value=\"$value\">\n";
                }

//                echo "$key => " . " " . $value . " <br/>";
            }
        }
        echo "</form>";
        echo "<script> document.form.submit();</script>";
    }

}
