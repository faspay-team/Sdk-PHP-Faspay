<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditDomicileData
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditDomicileData {
    public $domicile_address;
    public $domicile_address_city;
    public $domicile_address_region;
    public $domicile_address_state;
    public $domicile_address_poscode;
    public $domicile_address_country_code;
    public $domicile_phone_no;
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


}
