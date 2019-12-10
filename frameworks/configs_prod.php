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
include 'configs.php';
class configs_prod extends configs {

    
    public function getCancelTransactionUrl() {
        return "https://web.faspay.co.id/cvr/100005/10";
    }

    public function getCreateBillingUrl() {
        return "https://web.faspay.co.id/cvr/300011/10";
    }

    public function getInquiryPaymentStatusUrl() {
        return "https://web.faspay.co.id/cvr/100004/10";
    }

    public function getPaymentChannelUrl() {
        return "https://web.faspay.co.id/cvr/100001/10";
    }

}
