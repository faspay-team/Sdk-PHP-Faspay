<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InquiryRequestCredit
 *
 * @author hilmananwarsah
 */
class InquiryRequestCredit {
    //put your code here
    public $transactiontype;
    public $response_type;
    public $merchantid;
    public $payment_method;
    public $merchant_tranid;
    
    public $amount;
    function getTransactiontype() {
        return $this->transactiontype;
    }

    function getResponse_type() {
        return $this->response_type;
    }

    function getMerchantid() {
        return $this->merchantid;
    }

    function getPayment_method() {
        return $this->payment_method;
    }

    function getMerchant_tranid() {
        return $this->merchant_tranid;
    }

    

    function getAmount() {
        return $this->amount;
    }

    function setTransactiontype($transactiontype) {
        $this->transactiontype = $transactiontype;
    }

    function setResponse_type($response_type) {
        $this->response_type = $response_type;
    }

    function setMerchantid($merchantid) {
        $this->merchantid = $merchantid;
    }

    function setPayment_method($payment_method) {
        $this->payment_method = $payment_method;
    }

    function setMerchant_tranid($merchant_tranid) {
        $this->merchant_tranid = $merchant_tranid;
    }


    function setAmount($amount) {
        $this->amount = $amount;
    }


}
