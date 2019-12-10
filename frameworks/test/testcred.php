<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testcred
 *
 * @author hilmananwarsah
 */
require_once '../../frameworks/credit/FaspayConfigCredit.php';
require_once '../../frameworks/credit/FaspayConfigCreditDev.php';
require_once '../../frameworks/credit/entity/capture/CaptureRequest.php';
require_once '../../frameworks/credit/entity/capture/CaptureRequestWrapperDev.php';
require_once '../../frameworks/credit/TestUser2.php';

$user = new TestUser2();
$q = new CaptureRequestWrapperDev($user,"2019061200757", "66A93765-1DC2-46FD-B542-267AF1B75AE4", 100000, "merhcant test CC", "haha@haha.com", "ddddd ", "https://programmermiskin.chickenkiller.com/faspay/api/notify");
print_r( $q->generateHtml());
