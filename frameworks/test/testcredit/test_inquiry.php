<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_inquiry
 *
 * @author hilmananwarsah
 */
require_once '../../credit/entity/inquiry/InquiryRequestCredit.php';
require_once '../../credit/entity/inquiry/InquiryRequestCreditWrapper.php';
require_once '../../credit/entity/inquiry/InquiryResponseCredit.php';
require_once '../../credit/FaspayConfigCreditDev.php';
require_once '../../credit/service/FaspayCreditService.php';
require_once '../../credit/service/FaspayCreditServiceImpl.php';
require_once '../../credit/FaspayUserCredit.php';
require_once '../../credit/TestUser2.php';
$user = new TestUser2();  
$conf = new FaspayConfigCreditDev();
$service = new FaspayCreditServiceImpl($conf);
$re = new InquiryRequestCreditWrapper($user,  "5d078fc52877e", 100000);

echo $service->inquiry($re);