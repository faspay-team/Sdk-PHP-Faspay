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
require_once __DIR__ .'../../../entity/err/UnregisteredError.php';
require_once __DIR__ .'../../../entity/err/UnregisteredErrorDef.php';
class FaspayErrorUnregisteredTransformer implements Transformer {

    public function register(ClassBindings $classBindings) {
        $classBindings->register(new Karriere\JsonDecoder\Bindings\FieldBinding("response_error", "response_error", UnregisteredErrorDef::class));
    }

    public function transforms(): string {
        return UnregisteredError::class;
    }

}
