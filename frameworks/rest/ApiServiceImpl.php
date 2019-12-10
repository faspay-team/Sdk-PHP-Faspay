<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiServiceImpl
 *
 * @author hilmananwarsah
 */
include 'ApiService.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Karriere\JsonDecoder\JsonDecoder;

require_once '../entity/transformer/FaspayErrorUnregisteredTransformer.php';

abstract class ApiServiceImpl implements ApiService {

    private $config;

    function __construct(configs $config) {
        $this->config = $config;
    }

    public function getConfig() {
        return $this->config;
    }

    public function sendRequestHttpPost($url, $data, $header) {



        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $payload = json_encode(array("user" => $data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($httpcode == 200) {
            $obj = json_decode($result);
            if (property_exists($obj, "response_error")) {
                if ($obj->response_error->response_code == "40") {
                    $j = new JsonDecoder(true, true);
                    $j->register(new FaspayErrorUnregisteredTransformer());
                    $fpc = $j->decode($result, UnregisteredError::class);
                    curl_close($ch);
                    return $fpc;
                }
            }
        }
        if (curl_error($ch)) {
            echo 'httpcode = ? ' . $httpcode . 'Request Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }

    public function sendRequestHttpPostNoHeader($url, $data) {
        return $this->sendRequestHttpPost($url, $data, Array());
    }

//    protected function handleUnregistered($t, $mCallback,$mCallbackPost) {
//        
//        if (t.has("response_error")) {
//            JSONObject er = t.getJSONObject("response_error");
//            if (er.getString("response_code").equals("40")) {
//                try {
//                    UnregisteredError response = new ObjectMapper().readValue(t.toString(), UnregisteredError.class);
//                    mCallback.onUserNotRegistered(response);
//                    System.out.println("HANDLE UNREGISTER");
//                    return true;
//                } catch (IOException ex) {
//                    Logger.getLogger(ApiServiceImpl.class.getName()).log(Level.SEVERE, null, ex);
//                    mCallbackPost.onFailure(mCall, ex);
//                }
//                
//            }
//        }
//        return false;
//    }
//    public  abstract function getHandler();
    public function handleErr($x) {
        if ($x instanceof UnregisteredError) {
            return $x;
        }
        return null;
    }

}
