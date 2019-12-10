<?php

require_once '../rest/ApiServiceImpl.php';
require_once '../configs_dev.php';
require_once '../service/FaspayServiceImpl.php';
require_once '../faspay_user.php';
require_once './test_user.php';
require_once '../entity/FaspayPaymentChannel.php';
require_once '../entity/payment/FaspayPayment.php';
require_once '../entity/payment/FaspayPaymentRequestBillData.php';
require_once '../entity/payment/FaspayPaymentRequestUserData.php';
require_once '../entity/payment/FaspayPaymentRequestShippingData.php';
require_once '../entity/payment/FaspayPaymentRequestWrapper.php';
require_once '../entity/payment/FaspayPaymentCancelRequestWrapper.php';
require_once '../entity/FaspayPaymentStatusRequest.php';
require_once '../entity/FaspayPaymentStatusRequestWrapper.php';

$user = new test_user();
$config = new configs_dev($user);
$service = new FaspayServiceImpl($config);
$alfaPC = new FaspayPaymentChannel();
$alfaPC->setPg_code("402");
$alfaPC->setPg_name("Alfa");
$item = Array();
$order = new FaspayPayment("Racun Tikus", 1, 100000, FaspayPayment::PAYMENT_PLAN_FULL_SETTLEMENT, $config->getUser()->getMerchantId(), FaspayPayment::TENOR_FULL);
$order = new FaspayPayment("Bubur ayam", 1, 100000, FaspayPayment::PAYMENT_PLAN_FULL_SETTLEMENT, $config->getUser()->getMerchantId(), FaspayPayment::TENOR_FULL);
$order = new FaspayPayment("Pil KB", 1, 100000, FaspayPayment::PAYMENT_PLAN_FULL_SETTLEMENT, $config->getUser()->getMerchantId(), FaspayPayment::TENOR_FULL);
array_push($item, $order);
$userBillData = FaspayPaymentRequestBillData::managed("123123", "x", 10, "10000", $item,FaspayPaymentRequestBillData::PAY_TYPE_MIXED);
$userData = new FaspayPaymentRequestUserData("087123123123", "hil@hil.com", FaspayPaymentRequestWrapper::TERMINAL_MOBILE_APP_ANDROID, "123123", "hahahaha");
$shippingBillData = new FaspayPaymentRequestShippingData();
$requestPaymentWrapper = new FaspayPaymentRequestWrapper($config, $userBillData, $alfaPC, $userData, $shippingBillData);


echo json_encode($service->createBilling($requestPaymentWrapper));
echo json_encode($service->cancelTransaction(new FaspayPaymentCancelRequestWrapper("8986322540000844","123123","123",$config)));
echo json_encode($service->inqueryPaymentStatus(new FaspayPaymentStatusRequestWrapper("x","8986322540000844", "123123", $config)));