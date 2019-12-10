<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayConfigCreditDev
 *
 * @author hilmananwarsah
 */
require_once 'FaspayConfigCredit.php';
class FaspayConfigCreditDev extends FaspayConfigCredit{
    
    public function getMerchantDirectUrl() {
        return "https://fpgdev.faspay.co.id/payment";
        
    }

    public function getMerchantInquiryUrl() {
        return "https://fpgdev.faspay.co.id/payment/api";
    }

    public function getMerchantWindowUrl() {
        return "https://fpgdev.faspay.co.id/payment";
    }

}
