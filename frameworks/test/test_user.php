<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_user
 *
 * @author hilmananwarsah
 */
require_once '../faspay_user.php';
class test_user extends faspay_user{
    //put your code here
    function __construct() {
        $this->setMerchantName("SINTESA");
        $this->setMerchantId("32254");
        $this->setUserId("bot32254");
        $this->setPassword("p@ssw0rd");
        $this->setRedirectUrl("p@ssw0rd");
    }

}
