<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditTransactionData
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditTransactionData {
    public $merchant_tranid;
    public $currencycode;
    public $amount;
    public $usr;
    public $signature;
    
    function __construct(FaspayUserCredit $usr,$merchant_tranid,$currencycode,$amount) {
        $this->usr = $usr;
        $this->merchant_tranid = $merchant_tranid;
        $this->currencycode = $currencycode;
        $this->amount = $amount;
    }
    function getMerchant_tranid() {
        return $this->merchant_tranid;
    }

    function getCurrencycode() {
        return $this->currencycode;
    }

    function getAmount() {
        return $this->amount;
    }

    function getUsr() {
        return $this->usr;
    }

    function getSignature() {
        
        //System.out.println("SIG "+getAmount()+" "+getMerchant_tranid());
        $signature = ("##"). strtoupper($this->usr->    getMerchantId()).
                ("##").strtoupper($this->usr->getPass()).("##").($this->getMerchant_tranid()).("##").(($this->getAmount().".00")).("##0##");
        
        
        return sha1($signature);
    }

    function setMerchant_tranid($merchant_tranid) {
        $this->merchant_tranid = $merchant_tranid;
    }

    function setCurrencycode($currencycode) {
        $this->currencycode = $currencycode;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setUsr($usr) {
        $this->usr = $usr;
    }

    function setSignature($signature) {
        $this->signature = $signature;
    }


}
