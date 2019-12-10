<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of configs
 *
 * @author hilmananwarsah
 */
abstract class configs {

    abstract public function getPaymentChannelUrl();

    abstract public function getCreateBillingUrl();

    abstract public function getInquiryPaymentStatusUrl();

    abstract public function getCancelTransactionUrl();

    protected $user;

    function __construct(faspay_user $faspay_user) {
        $this->user = $faspay_user;
    }
    
    public function getUser() {
        return $this->user;
    }



}
