<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCancelRequestWrapper
 *
 * @author hilmananwarsah
 */
require_once __DIR__ . '/../FaspayCancelPaymentRequest.php';
require_once __DIR__ . '/../../configs.php';

class FaspayPaymentCancelRequestWrapper extends FaspayCancelPaymentRequest implements JsonSerializable {

    //put your code here

    function __construct($trxId, $billNo, $paymentCancel, configs $mConf) {
        parent::setTrx_id($trxId);
        parent::setBill_no($billNo);
        parent::setPayment_cancel($paymentCancel);
        
        parent::setMerchant($mConf->getUser()->getMerchantName());
        parent::setMerchant_id($mConf->getUser()->getMerchantId());
        $raw = $mConf->getUser()->getUserId().$mConf->getUser()->getPassword().parent::getBill_no();
        parent::setSignature(sha1(md5($raw)));
        
                
                
    }

}
