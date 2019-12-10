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
require_once '../../credit/entity/capture/CaptureRequest.php';
require_once '../../credit/entity/capture/CaptureRequestWrapperDev.php';
require_once '../../credit/TestUser2.php';
require_once '../../credit/FaspayConfigCreditDev.php';
$user = new TestUser2();  
$conf = new FaspayConfigCreditDev();
$c = new CaptureRequestWrapperDev($user , "5d078fc52877e", "D4701B33-BED5-404B-BBAC-BA1DBE60F759", "100000", "ada deh", "adade@g.com", "pala lu", "http://programmermiskin.chickenkiller.com/faspay/api/notify");
echo $c->generateHtml();
