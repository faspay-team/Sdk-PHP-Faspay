<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayServiceImpl
 *
 * @author hilmananwarsah
 */
require_once 'FaspayService.php';
require_once '../faspay_user.php';
require_once '../rest/ApiServiceImpl.php';
require_once '../entity/FaspayPaymentRequest.php';
require_once '../entity/FaspayCancelPaymentResponse.php';
require_once '../entity/FaspayPaymentChannel.php';
require_once '../entity/payment/FaspayPaymentResponse.php';
require_once '../entity/transformer/FaspayPaymentChannelTransformer.php';
require_once '../entity/transformer/FaspayPaymentResponseTransfoermer.php';
require_once '../entity/transformer/FaspayPaymentChannelTransformer2.php';
require_once '../entity/FaspayPaymentStatusResponse.php';
require_once '../entity/FaspayPaymentStatusRequest.php';
require_once '../entity/FaspayPaymentStatusRequestWrapper.php';
require_once __DIR__ . '/../../vendor/autoload.php';
use Karriere\JsonDecoder\JsonDecoder;
class FaspayServiceImpl extends ApiServiceImpl implements FaspayService {

    //put your code here
    public function inqueryPaymentChannel() {
        $data = new stdClass();
        $data->request = "";
        $data->merchant_id = $this->getConfig()->getUser()->getMerchantId();
        $data->merchant = $this->getConfig()->getUser()->getMerchantName();
        $data->signature = $this->getConfig()->getUser()->calculateSignature();
        $x = $this->sendRequestHttpPostNoHeader($this->getConfig()->getPaymentChannelUrl(), $data);
        $err = parent::handleErr($x);
        if($err){
            return $err;
        }
        $d = json_decode($x, true);

        $j = new JsonDecoder(true,true);
        $j->register(new FaspayPaymentChannelTransformer());
        $fpc = $j->decode($x, FaspayPaymentChannelResponse::class);

        return $fpc;
    }

    public function cancelTransaction(FaspayCancelPaymentRequest $request) {
        
        $x = $this->sendRequestHttpPostNoHeader($this->getConfig()->getCancelTransactionUrl(), $request);
        $err = parent::handleErr($x);
        if($err){
            return $err;
        }
        $j = new JsonDecoder(true,true);
        
        $fpc = $j->decode($x, FaspayCancelPaymentResponse::class);

        return $fpc;
    }

    public function createBilling(FaspayPaymentRequest $request) {
        
        $x = $this->sendRequestHttpPostNoHeader($this->getConfig()->getCreateBillingUrl(), $request);
        $err = parent::handleErr($x);
        if($err){
            return $err;
        }
        $j = new JsonDecoder(true,true);
        $j->register(new FaspayPaymentResponseTransfoermer());
        $fpc = $j->decode($x, FaspayPaymentResponse::class);

        return $fpc;
    }
    

    public function inqueryPaymentStatus(FaspayPaymentStatusRequest $request) {

        $x = $this->sendRequestHttpPostNoHeader($this->getConfig()->getInquiryPaymentStatusUrl(), $request);
        $err = parent::handleErr($x);
        if($err){
            return $err;
        }
        $j = new JsonDecoder(true,true);
        
        $fpc = $j->decode($x, FaspayPaymentStatusResponse::class);

        return $fpc;
    }

}
