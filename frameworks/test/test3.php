<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test3
 *
 * @author hilmananwarsah
 */
$raw = '##'.strtoupper('commonwealth').'##'.strtoupper('abcde').'##2ccb26d48b6c428ba8ba69cdb5558197##100000.00##'.'0'.'##';
echo $raw.'</br>';
$signaturecc=sha1($raw);
echo $signaturecc;
$post = array(
"TRANSACTIONTYPE"      => '4', 
"RESPONSE_TYPE"        => '3',                       
"MERCHANTID"           => 'test_migs_non',                                
"PAYMENT_METHOD"       => '1',
"MERCHANT_TRANID"      => '2017091850745',       
"TRANSACTIONID"        => '9E69AD15-4AB0-43AE-B37B-8FD276E24155',
"AMOUNT"               => '1000.00',
"SIGNATURE"            => $signaturecc 
);

$post   = http_build_query($post);
$url    = "https://fpgdev.faspay.co.id/payment/api";
$ch = curl_init();
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
//print_r($result);
curl_close($ch);