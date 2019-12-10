<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnregisteredErrorDef
 *
 * @author hilmananwarsah
 */
class UnregisteredErrorDef implements JsonSerializable{
    public $response_code;   
    public $response_desc;
    function getResponse_code() {
        return $this->response_code;
    }

    function getResponse_desc() {
        return $this->response_desc;
    }

    function setResponse_code($response_code) {
        $this->response_code = $response_code;
    }

    function setResponse_desc($response_desc) {
        $this->response_desc = $response_desc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
