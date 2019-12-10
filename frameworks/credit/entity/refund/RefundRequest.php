<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RefundRequest
 *
 * @author hilmananwarsah
 */
abstract class RefundRequest {

    public $transactiontype = "11";
    public $response_type = "3";
    public $merchantid;
    public $payment_method = "1";
    public $merchant_tranid;
    public $refund_amount;
    public $transactionid;
    public $amount;
    public $custname;
    public $custemail;
    public $description;
    public $return_url;
    public $signature;

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

    function getRefund_amount() {
        return $this->refund_amount;
    }

    function getTransactionid() {
        return $this->transactionid;
    }

    function getAmount() {
        return $this->amount;
    }

    function getCustname() {
        return $this->custname;
    }

    function getCustemail() {
        return $this->custemail;
    }

    function getDescription() {
        return $this->description;
    }

    function getReturn_url() {
        return $this->return_url;
    }

    function getSignature() {
        return $this->signature;
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

    function setRefund_amount($refund_amount) {
        $this->refund_amount = $refund_amount;
    }

    function setTransactionid($transactionid) {
        $this->transactionid = $transactionid;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setCustname($custname) {
        $this->custname = $custname;
    }

    function setCustemail($custemail) {
        $this->custemail = $custemail;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setReturn_url($return_url) {
        $this->return_url = $return_url;
    }

    function setSignature($signature) {
        $this->signature = $signature;
    }

    abstract function getUrl();

    function generateHtml() {

        $str = "";
        $str .= "<form method=\"post\" name=\"form\" action=\"" . $this->getUrl() . "\">";
        $data = get_object_vars($this);
        print_r($data);
        foreach ($data as $key => $val) {
            $str .= "<input type=\"hidden\" name=\"" . strtoupper($key) . "\"  value=\"" . $val . "\">";
        }
        $str .= "</form><script> document.form.submit();</script>";
        return $str;
    }

}
