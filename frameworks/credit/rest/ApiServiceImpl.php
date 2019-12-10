<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once __DIR__ . '/../FaspayUserCredit.php';
/**
 * Description of ApiServiceImpl
 *
 * @author hilmananwarsah
 */
require_once 'ApiServiceCredit.php';

class ApiServiceImpl implements ApiServiceCredit {

    private $config;

    function __construct(FaspayConfigCredit $config) {
        $this->config = $config;
    }

    function getConfig() {
        return $this->config;
    }

//    public FaspayCreditServiceImpl(FaspayConfigCredit mFaspayConfig) {
//        super(mFaspayConfig);
//    }
    //put your code here
    public function sendRequestHttpForm($url, $data) {
        $date = http_build_query($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //$payload = json_encode(array("user" => $data));

        curl_setopt($ch, CURLOPT_POSTFIELDS, $date);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (curl_error($ch)) {
            echo 'httpcode = ? ' . $httpcode . 'Request Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;
    }

}
