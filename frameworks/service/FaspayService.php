<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../entity/FaspayPaymentStatusRequest.php';
require_once '../entity/FaspayCancelPaymentRequest.php';
require_once '../entity/FaspayPaymentRequest.php';
/**
 * Description of FaspayInquiryService
 *
 * @author hilmananwarsah
 */
interface FaspayService {

    //put your code here
    public function inqueryPaymentChannel();

    public function createBilling(FaspayPaymentRequest $request);

    public function inqueryPaymentStatus(FaspayPaymentStatusRequest $request);

    public function cancelTransaction(FaspayCancelPaymentRequest $request);
}
