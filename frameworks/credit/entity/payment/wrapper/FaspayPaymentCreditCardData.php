<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditCardData
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditCardData {
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


}
