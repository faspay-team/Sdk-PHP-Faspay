<?php
require_once '../credit/entity/payment/FaspayPaymentCreditWrapperDev.php';
require_once '../credit/entity/payment/FaspayPaymentCredit.php';
require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditTransactionData.php';
require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditShopperData.php';
require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditConfigApp.php';
require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditBillData.php';


require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditShippingdata.php';
require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditItemData.php';
require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditDomicileData.php';
require_once '../credit/entity/payment/wrapper/FaspayPaymentCreditCardData.php';

require_once '../credit/entity/inquiry/InquiryRequestCredit.php';
require_once '../credit/entity/inquiry/InquiryRequestCreditWrapper.php';
require_once '../credit/entity/inquiry/InquiryResponseCredit.php';
require_once '../credit/FaspayConfigCreditDev.php';

require_once '../credit/FaspayUserCredit.php';
require_once '../credit/TestUser2.php';
require_once '../credit/service/FaspayCreditService.php';
require_once '../credit/service/FaspayCreditServiceImpl.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testcred2
 *
 * @author hilmananwarsah
 */
$usr = new TestUser2();
$item = array();
//array_push($item, "Koko");
//        $w = new FaspayPaymentCreditWrapperDev($usr,
//                new FaspayPaymentCreditTransactionData($usr, uniqid(), "IDR", 100000),
//                new FaspayPaymentCreditShopperData("ha", "ha@ha.com",
//                        "123123123123", "123123", "5123456789012346", "123123",
//                        FaspayPaymentCredit::CARD_TYPE_AMEX, 10, "2020", "123123"),
//                new FaspayPaymentCreditConfigApp(FaspayPaymentCredit::RESPONSE_TYPE_POST, "http://programmermiskin.chickenkiller.com/faspay/api/notify"),
//                new FaspayPaymentCreditBillData("123", "123", "123", "123", "123", "ID"),
//                new FaspayPaymentCreditShippingdata("5", "5", "5", "5", "5", "5", 0),
//                new FaspayPaymentCreditItemData($item),
//                new FaspayPaymentCreditDomicileData(),
//                new FaspayPaymentCreditCardData());
//        echo $w->generateHtml();
        
$user = new TestUser2();  
$conf = new FaspayConfigCreditDev();
$service = new FaspayCreditServiceImpl($conf);
$re = new InquiryRequestCreditWrapper($user, "DEA32491-4545-4DA7-8ED5-AB5ECAF6C8AD", "2ccb26d48b6c428ba8ba69cdb5558197", 100000);

echo $service->inquiry($re);
//$q = new InquiryRequestCreditWrapper($user, "2019061200757", "66A93765-1DC2-46FD-B542-267AF1B75AE4", 100000, "merhcant test CC", "haha@haha.com", "ddddd ", "https://programmermiskin.chickenkiller.com/faspay/api/notify");
