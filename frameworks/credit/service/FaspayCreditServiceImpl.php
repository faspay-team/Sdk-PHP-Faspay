<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once __DIR__ . '/../entity/inquiry/InquiryRequestCredit.php';
require_once __DIR__ . '/../entity/void/VoidRequestCredit.php';
require_once __DIR__ . '/../rest/ApiServiceImpl.php';

/**
 * Description of FaspayCreditServiceImpl
 *
 * @author hilmananwarsah
 */
class FaspayCreditServiceImpl extends ApiServiceImpl implements FaspayCreditService {
    function __construct($con) {
        parent::__construct($con);
        
    }

    //put your code here
    public function inquiry(InquiryRequestCredit $credit) {
        $date = get_object_vars($credit);
        $ar = array();
        foreach ($date as $key => $value) {
            if(!is_object($value)){
                
                $ar[strtoupper($key)] =$value;
            //    echo strtoupper($key)." > " .$value;
            }
            
                
            
        }
        return $this->sendRequestHttpForm($this->getConfig()->getMerchantInquiryUrl(), $ar);
    }

    public function voidTransaction(VoidRequestCredit $requestCredit) {
        
    }

}
