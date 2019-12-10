<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestUser2
 *
 * @author hilmananwarsah
 */
require_once 'FaspayUserCredit.php';
class TestUser2 extends FaspayUserCredit{
    //put your code here
    function __construct() {
        $this->setMerchantId("commonwealth");
        $this->setPass("abcde");
    }

}

