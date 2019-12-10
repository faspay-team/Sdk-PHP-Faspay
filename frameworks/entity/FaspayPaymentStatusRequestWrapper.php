<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentStatusRequestWrapper
 *
 * @author hilmananwarsah
 */
require_once 'FaspayPaymentStatusRequest.php';

class FaspayPaymentStatusRequestWrapper extends FaspayPaymentStatusRequest {

    function __construct($request, $trxId, $bill_no, configs $FaspayConfig) {
        parent::setRequest($request);
        parent::setTrx_id($trxId);
        parent::setBill_no($bill_no);
        parent::setMerchant_id($FaspayConfig->getUser()->getMerchantId());
        parent::setSignature(sha1(md5($FaspayConfig->getUser()->getUserId().$FaspayConfig->getUser()->getPassword().$bill_no)));
    }

}
