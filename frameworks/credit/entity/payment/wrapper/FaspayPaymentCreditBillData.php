<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditBillData
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditBillData {

    public $billing_address;
    public $billing_address_city;
    public $billing_address_region;
    public $billing_address_state;
    public $billing_address_poscode;
    public $billing_address_country_code;

    function __construct($billing_address, $billing_address_city, $billing_address_region, $billing_address_state, $billing_address_poscode, $billing_address_country_code) {
        $this->billing_address = $billing_address;
        $this->billing_address_city = $billing_address_city;
        $this->billing_address_region = $billing_address_region;
        $this->billing_address_state = $billing_address_state;
        $this->billing_address_poscode = $billing_address_poscode;
        $this->billing_address_country_code = $billing_address_country_code;
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

}
