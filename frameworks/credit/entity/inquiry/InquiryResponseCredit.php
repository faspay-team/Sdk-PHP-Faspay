<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InquiryResponseCredit
 *
 * @author hilmananwarsah
 */
class InquiryResponseCredit {
    public $POINT_AMOUNT;
    public $MERCHANT_TRANID;
    public $BANK_RES_MSG;
    public $BANK_RES_CODE;
    public $POINT_USED;
    public $TXN_STATUS;
    public $SIGNATURE;
    public $ERR_CODE;
    public $AUTH_ID;
    public $DESCRIPTION;
    public $AMOUNT;
    public $TRANSACTIONTYPE;
    public $CUSTNAME;
    public $POINT_BALANCE;
    public $MERCHANTID;
    public $PAYMENT_METHOD;
    public $TRANSACTIONID;
    public $TRANDATE;
    public $CURRENCYCODE;
    public $BANK_REFERENCE;
    public $popupProceed;
    public $ERR_DESC;
    public $PAYMENT_AMOUNT;
    public $TOTAL_REFUND_AMOUNT;
    public $WHITELIST_CARDpublic;
    
    
    function getPOINT_AMOUNT() {
        return $this->POINT_AMOUNT;
    }

    function getMERCHANT_TRANID() {
        return $this->MERCHANT_TRANID;
    }

    function getBANK_RES_MSG() {
        return $this->BANK_RES_MSG;
    }

    function getBANK_RES_CODE() {
        return $this->BANK_RES_CODE;
    }

    function getPOINT_USED() {
        return $this->POINT_USED;
    }

    function getTXN_STATUS() {
        return $this->TXN_STATUS;
    }

    function getSIGNATURE() {
        return $this->SIGNATURE;
    }

    function getERR_CODE() {
        return $this->ERR_CODE;
    }

    function getAUTH_ID() {
        return $this->AUTH_ID;
    }

    function getDESCRIPTION() {
        return $this->DESCRIPTION;
    }

    function getAMOUNT() {
        return $this->AMOUNT;
    }

    function getTRANSACTIONTYPE() {
        return $this->TRANSACTIONTYPE;
    }

    function getCUSTNAME() {
        return $this->CUSTNAME;
    }

    function getPOINT_BALANCE() {
        return $this->POINT_BALANCE;
    }

    function getMERCHANTID() {
        return $this->MERCHANTID;
    }

    function getPAYMENT_METHOD() {
        return $this->PAYMENT_METHOD;
    }

    function getTRANSACTIONID() {
        return $this->TRANSACTIONID;
    }

    function getTRANDATE() {
        return $this->TRANDATE;
    }

    function getCURRENCYCODE() {
        return $this->CURRENCYCODE;
    }

    function getBANK_REFERENCE() {
        return $this->BANK_REFERENCE;
    }

    function getPopupProceed() {
        return $this->popupProceed;
    }

    function getERR_DESC() {
        return $this->ERR_DESC;
    }

    function getPAYMENT_AMOUNT() {
        return $this->PAYMENT_AMOUNT;
    }

    function getTOTAL_REFUND_AMOUNT() {
        return $this->TOTAL_REFUND_AMOUNT;
    }

    function getWHITELIST_CARDpublic() {
        return $this->WHITELIST_CARDpublic;
    }

    function setPOINT_AMOUNT($POINT_AMOUNT) {
        $this->POINT_AMOUNT = $POINT_AMOUNT;
    }

    function setMERCHANT_TRANID($MERCHANT_TRANID) {
        $this->MERCHANT_TRANID = $MERCHANT_TRANID;
    }

    function setBANK_RES_MSG($BANK_RES_MSG) {
        $this->BANK_RES_MSG = $BANK_RES_MSG;
    }

    function setBANK_RES_CODE($BANK_RES_CODE) {
        $this->BANK_RES_CODE = $BANK_RES_CODE;
    }

    function setPOINT_USED($POINT_USED) {
        $this->POINT_USED = $POINT_USED;
    }

    function setTXN_STATUS($TXN_STATUS) {
        $this->TXN_STATUS = $TXN_STATUS;
    }

    function setSIGNATURE($SIGNATURE) {
        $this->SIGNATURE = $SIGNATURE;
    }

    function setERR_CODE($ERR_CODE) {
        $this->ERR_CODE = $ERR_CODE;
    }

    function setAUTH_ID($AUTH_ID) {
        $this->AUTH_ID = $AUTH_ID;
    }

    function setDESCRIPTION($DESCRIPTION) {
        $this->DESCRIPTION = $DESCRIPTION;
    }

    function setAMOUNT($AMOUNT) {
        $this->AMOUNT = $AMOUNT;
    }

    function setTRANSACTIONTYPE($TRANSACTIONTYPE) {
        $this->TRANSACTIONTYPE = $TRANSACTIONTYPE;
    }

    function setCUSTNAME($CUSTNAME) {
        $this->CUSTNAME = $CUSTNAME;
    }

    function setPOINT_BALANCE($POINT_BALANCE) {
        $this->POINT_BALANCE = $POINT_BALANCE;
    }

    function setMERCHANTID($MERCHANTID) {
        $this->MERCHANTID = $MERCHANTID;
    }

    function setPAYMENT_METHOD($PAYMENT_METHOD) {
        $this->PAYMENT_METHOD = $PAYMENT_METHOD;
    }

    function setTRANSACTIONID($TRANSACTIONID) {
        $this->TRANSACTIONID = $TRANSACTIONID;
    }

    function setTRANDATE($TRANDATE) {
        $this->TRANDATE = $TRANDATE;
    }

    function setCURRENCYCODE($CURRENCYCODE) {
        $this->CURRENCYCODE = $CURRENCYCODE;
    }

    function setBANK_REFERENCE($BANK_REFERENCE) {
        $this->BANK_REFERENCE = $BANK_REFERENCE;
    }

    function setPopupProceed($popupProceed) {
        $this->popupProceed = $popupProceed;
    }

    function setERR_DESC($ERR_DESC) {
        $this->ERR_DESC = $ERR_DESC;
    }

    function setPAYMENT_AMOUNT($PAYMENT_AMOUNT) {
        $this->PAYMENT_AMOUNT = $PAYMENT_AMOUNT;
    }

    function setTOTAL_REFUND_AMOUNT($TOTAL_REFUND_AMOUNT) {
        $this->TOTAL_REFUND_AMOUNT = $TOTAL_REFUND_AMOUNT;
    }

    function setWHITELIST_CARDpublic($WHITELIST_CARDpublic) {
        $this->WHITELIST_CARDpublic = $WHITELIST_CARDpublic;
    }


}
