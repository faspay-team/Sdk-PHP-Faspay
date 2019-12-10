<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of faspay_payment_status_request
 *
 * @author hilmananwarsah
 */
class FaspayPaymentStatusRequest implements JsonSerializable{

    //put your code here
    private $request;
    private $trx_id;
    private $merchant_id;
    private $bill_no;
    private $signature;

    function getRequest() {
        return $this->request;
    }

    function getTrx_id() {
        return $this->trx_id;
    }

    function getMerchant_id() {
        return $this->merchant_id;
    }

    function getBill_no() {
        return $this->bill_no;
    }

    function getSignature() {
        return $this->signature;
    }

    function setRequest($request) {
        $this->request = $request;
    }

    function setTrx_id($trx_id) {
        $this->trx_id = $trx_id;
    }

    function setMerchant_id($merchant_id) {
        $this->merchant_id = $merchant_id;
    }

    function setBill_no($bill_no) {
        $this->bill_no = $bill_no;
    }

    function setSignature($signature) {
        $this->signature = $signature;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
