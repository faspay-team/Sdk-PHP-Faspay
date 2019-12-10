<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditShippingdata
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditShippingdata {
    public $receiver_name_for_shipping;
    public $shipping_address;
    public $shipping_address_city;
    public $shipping_address_region;
    public $shipping_address_state;
    public $shipping_address_poscode;
    public $shipping_address_country_code;
    public $shippingcost;
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



}
