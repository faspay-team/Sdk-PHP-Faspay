<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayUserCredit
 *
 * @author hilmananwarsah
 */
class FaspayUserCredit {
    //put your code here
    public $merchantId;
    public $pass;
    function getMerchantId() {
        return $this->merchantId;
    }

    function getPass() {
        return $this->pass;
    }

    function setMerchantId($merchantId) {
        $this->merchantId = $merchantId;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }


}
