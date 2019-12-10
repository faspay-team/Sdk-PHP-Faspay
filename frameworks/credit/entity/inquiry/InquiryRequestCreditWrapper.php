<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InquiryRequestCreditWrapper
 *
 * @author hilmananwarsah
 */
require_once 'InquiryRequestCredit.php';
require_once __DIR__.'/../../FaspayUserCredit.php';
class InquiryRequestCreditWrapper  extends InquiryRequestCredit{
    //put your code here
    function __construct(FaspayUserCredit $user, $MERCHANT_TRANID,$amount) {
        $this->user = $user;
        $this->merchant_tranid = $MERCHANT_TRANID;
        
        $this->amount = $amount.'.00';
        
        $this->setTransactiontype("4");
        $this->setResponse_type("3");
        $this->setMerchantid($user->getMerchantId());
        $this->setPayment_method("1");
        $rawsig = "##". strtoupper($user->getMerchantId())."##". strtoupper($user->getPass())."##".$MERCHANT_TRANID."##".$this->getAmount()."##0##";
//       echo $rawsig;
        $this->signature = sha1($rawsig);
        
    }

}
