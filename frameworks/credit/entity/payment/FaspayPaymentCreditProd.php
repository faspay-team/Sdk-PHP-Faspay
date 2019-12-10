<?php
require_once 'FaspayPaymentCredit.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditDev
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditProd extends FaspayPaymentCredit {

    public $pymt_ind = "";
    public $pymt_criteria = "";
    public $pymt_token = "";

    function getUrl() {
        return "https://fpg.faspay.co.id/payment";
    }
    
    function getPymt_ind() {
        return $this->pymt_ind;
    }

    function getPymt_criteria() {
        return $this->pymt_criteria;
    }

    function getPymt_token() {
        return $this->pymt_token;
    }

    function setPymt_ind($pymt_ind) {
        $this->pymt_ind = $pymt_ind;
    }

    function setPymt_criteria($pymt_criteria) {
        $this->pymt_criteria = $pymt_criteria;
    }

    function setPymt_token($pymt_token) {
        $this->pymt_token = $pymt_token;
    }



}
