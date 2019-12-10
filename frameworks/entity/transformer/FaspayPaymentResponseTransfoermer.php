<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__.'/../payment/FaspayPaymentResponse.php';
require_once __DIR__.'/../payment/FaspayPaymentResponseBillItem.php';

use Karriere\JsonDecoder\Transformer;
use \Karriere\JsonDecoder\ClassBindings;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentResponseTransfoermer
 *
 * @author hilmananwarsah
 */
class FaspayPaymentResponseTransfoermer implements Transformer{
    //put your code here
    public function register(ClassBindings $classBindings) {
        $classBindings->register(new Karriere\JsonDecoder\Bindings\ArrayBinding("bill_items", "bill_items", FaspayPaymentResponseBillItem::class));
        
    }

    public function transforms(): string {
        return FaspayPaymentResponse::class;
    }

}
