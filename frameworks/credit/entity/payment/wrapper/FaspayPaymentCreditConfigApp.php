<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditConfigApp
 *
 * @author hilmananwarsah
 */
class FaspayPaymentCreditConfigApp {

    //put your code here
    public $response_type;
    public $return_url;
    public $mparam1;
    public $mparam2;
    public $frisk1, $frisk2;
    public $handshake_url;
    public $handshake_param;

    function __construct($response_type, $return_url) {
        $this->response_type = $response_type;
        $this->return_url = $return_url;
    }

    function getResponse_type() {
        return $this->response_type;
    }

    function getReturn_url() {
        return $this->return_url;
    }

    function getMparam1() {
        return $this->mparam1;
    }

    function getMparam2() {
        return $this->mparam2;
    }

    function getFrisk1() {
        return $this->frisk1;
    }

    function getFrisk2() {
        return $this->frisk2;
    }

    function getHandshake_url() {
        return $this->handshake_url;
    }

    function getHandshake_param() {
        return $this->handshake_param;
    }

    function setResponse_type($response_type) {
        $this->response_type = $response_type;
    }

    function setReturn_url($return_url) {
        $this->return_url = $return_url;
    }

    function setMparam1($mparam1) {
        $this->mparam1 = $mparam1;
    }

    function setMparam2($mparam2) {
        $this->mparam2 = $mparam2;
    }

    function setFrisk1($frisk1) {
        $this->frisk1 = $frisk1;
    }

    function setFrisk2($frisk2) {
        $this->frisk2 = $frisk2;
    }

    function setHandshake_url($handshake_url) {
        $this->handshake_url = $handshake_url;
    }

    function setHandshake_param($handshake_param) {
        $this->handshake_param = $handshake_param;
    }

}
