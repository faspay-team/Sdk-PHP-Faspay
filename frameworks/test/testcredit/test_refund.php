<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_refund
 *
 * @author hilmananwarsah
 */

require_once '../../credit/FaspayUserCredit.php';
require_once '../../credit/TestUser2.php';
require_once '../../credit/entity/refund/RefundRequest.php';
require_once '../../credit/entity/refund/RefundRequestWrapperDev.php';
$user = new TestUser2();
$html = new RefundRequestWrapperDev($user, 
        "5d078fc52877e", 
        "D4701B33-BED5-404B-BBAC-BA1DBE60F759", 
        100000, "merhcant test CC", "haha@haha.com", "ddddd ", "https://programmermiskin.chickenkiller.com/faspay/api/notify",10000);

echo $html->generateHtml();
