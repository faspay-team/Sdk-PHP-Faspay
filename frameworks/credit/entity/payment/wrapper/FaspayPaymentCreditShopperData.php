<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditShopperData
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditShopperData {
    public $custname;
    public $custemail;
    public $shopper_ip;
    public $description;
    public $cardno;
    public $cardname;
    public $cardtype;
    public $expirymonth;
    public $expiryyear;
    public $cardcvc;
    public $card_issuer_bank_country_code;
    public $phone_no;
    public $customer_ref;
    
    function __construct($custname, $custemail, $shopper_ip, $description, $cardno, $cardname, $cardtype, $expirymonth, $expiryyear, $phone_no){
        $this->custname = $custname;
        $this->custemail = $custemail;
        $this->phone_no = $phone_no;
        $this->shopper_ip = $shopper_ip;
        $this->description = $description;
        $this->cardno = $cardno;
        $this->cardname = $cardname;
        $this->cardtype = $cardtype;
        $this->expirymonth = sprintf("%02s",$expirymonth);
        $this->expiryyear = $expiryyear;
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

    function getPhone_no() {
        return $this->phone_no;
    }

    function getCustomer_ref() {
        return $this->customer_ref;
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

    function setPhone_no($phone_no) {
        $this->phone_no = $phone_no;
    }

    function setCustomer_ref($customer_ref) {
        $this->customer_ref = $customer_ref;
    }


}
