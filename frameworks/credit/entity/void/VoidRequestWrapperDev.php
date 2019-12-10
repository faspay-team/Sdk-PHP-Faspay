<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VoidRequestWrapperProd
 *
 * @author hilmananwarsah
 */
class VoidRequestWrapperDev extends VoidRequestCredit {

    function __construct(FaspayUserCredit $user, $MERCHANT_TRANID, $TRANSACTIONID, $AMOUNT, $CUSTNAME, $CUSTEMAIL, $DESCRIPTION, $RETURN_URL) {
        $this->merchantid = $user->getMerchantId();
        $this->merchant_tranid = $MERCHANT_TRANID;
        $this->transactionid = $TRANSACTIONID;

        $this->amount = $AMOUNT . '.00';
        $this->custname = $CUSTNAME;
        $this->custemail = $CUSTEMAIL;
        $this->description = $DESCRIPTION;
        $this->return_url = $RETURN_URL;
        $raw = '##' . strtoupper($user->getMerchantId()) . '##' . strtoupper($user->getPass()) . '##' . ($this->merchant_tranid) . '##' . ($this->getAmount()) . '##' . ($TRANSACTIONID) . '##';
        $this->signature = sha1($raw);
    }

//put your code here
    public function getUrl() {
        return "https://fpgdev.faspay.co.id/payment/api";
    }

}
