<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CaptureRequestWrapperDev
 *
 * @author hilmananwarsah
 */
require_once 'CaptureRequest.php';
require_once __DIR__.'/../../FaspayConfigCredit.php';


class CaptureRequestWrapperDev extends CaptureRequest {

    function __construct(FaspayUserCredit $user, $MERCHANT_TRANID, $TRANSACTIONID, $AMOUNT, $CUSTNAME, $CUSTEMAIL, $DESCRIPTION, $RETURN_URL) {
        $this->merchantid = $user->getMerchantId();
        $this->merchant_tranid = $MERCHANT_TRANID;
        $this->transactionid = $TRANSACTIONID;
        $this->amount = $AMOUNT.".00";
        $this->custname = $CUSTNAME;
        $this->custemail = $CUSTEMAIL;
        $this->description = $DESCRIPTION;
        $this->return_url = $RETURN_URL;
        $raw = "##".strtoupper($user->getMerchantId())."##".strtoupper($user->getPass())."##".$MERCHANT_TRANID."##".$this->getAmount()."##".$this->getTransactionid()."##";
        echo $raw;
        $this->signature = sha1($raw);
    }

    public function getUrl() {
        return "https://fpgdev.faspay.co.id/payment/api";
    }

}
