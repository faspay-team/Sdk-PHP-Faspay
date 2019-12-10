<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of l
 *
 * @author hilmananwarsah
 */
$rawsig = '##' . strtoupper('commonwealth') . '##' . strtoupper('abcde') . '##2019011892634##10000.00##' . '0' . '##';
$signaturecc = sha1($rawsig);
$post = array(
    "TRANSACTIONTYPE" => '4', //  4 untuk inquiry status transaksi FPG
    "RESPONSE_TYPE" => '3',
    "MERCHANTID" => 'commonwealth', // MERCHANT ID                                  
    "PAYMENT_METHOD" => '1',
    "MERCHANT_TRANID" => '2019011892634',
    // "TRANSACTIONID"               => '5FE7F9BF-0AC7-4EE8-A683-8BD51A985391',
    //"CUSTNAME"				=> 'merhcant test CC',
    //"CUSTEMAIL"				=> 'mail_tes@faspay.co.id',
    "AMOUNT" => '10000.00',
    "SIGNATURE" => $signaturecc
);

$post = http_build_query($post);
echo $post;
//$url	= "https://ucdev.faspay.co.id/payment/PaymentInterface.jsp";
$url = "https://fpgdev.faspay.co.id/payment/api";
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

//$result = curl_exec($ch);
//print_r($result);
//Ccurl_clos($ch);
