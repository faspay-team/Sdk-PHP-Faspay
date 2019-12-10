<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bill_item
 *
 * @author hilmananwarsah
 */
class bill_item {

    private $product;
    private $qty;
    private $amount;
    private $paymentPlan;
    private $merchantId;
    private $tenor;

    function getProduct() {
        return $this->product;
    }

    function getQty() {
        return $this->qty;
    }

    function getAmount() {
        return $this->amount;
    }

    function getPaymentPlan() {
        return $this->paymentPlan;
    }

    function getMerchantId() {
        return $this->merchantId;
    }

    function getTenor() {
        return $this->tenor;
    }

    function setProduct($product) {
        $this->product = $product;
    }

    function setQty($qty) {
        $this->qty = $qty;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setPaymentPlan($paymentPlan) {
        $this->paymentPlan = $paymentPlan;
    }

    function setMerchantId($merchantId) {
        $this->merchantId = $merchantId;
    }

    function setTenor($tenor) {
        $this->tenor = $tenor;
    }

}
