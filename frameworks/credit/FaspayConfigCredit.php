<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PhpConfigCredit
 *
 * @author hilmananwarsah
 */
abstract class FaspayConfigCredit {
    public $merchantWindowUrl;
    public $merchantDirectUrl;
    abstract function getMerchantWindowUrl();

    abstract function getMerchantDirectUrl() ;
    
    abstract function getMerchantInquiryUrl();

    


    
    
}
