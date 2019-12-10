<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentChannelTransformer
 *
 * @author hilmananwarsah
 */
require_once __DIR__ . '/../../../vendor/autoload.php';

use Karriere\JsonDecoder\Transformer;
use \Karriere\JsonDecoder\ClassBindings;
require_once __DIR__ .'../../../entity/FaspayPaymentChannelResponse.php';
require_once __DIR__ .'../../../entity/FaspayPaymentChannel.php';
class FaspayPaymentChannelTransformer implements Transformer {

    public function register(ClassBindings $classBindings) {
        $classBindings->register(new Karriere\JsonDecoder\Bindings\ArrayBinding("payment_channel", "payment_channel", FaspayPaymentChannel::class));
    }

    public function transforms(): string {
        return FaspayPaymentChannelResponse::class;
    }

}
