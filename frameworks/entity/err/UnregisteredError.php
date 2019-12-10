<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnregisteredError
 *
 * @author hilmananwarsah
 */
class UnregisteredError implements JsonSerializable {
    public  $response_error;

    function getResponse_error() {
        return $this->response_error;
    }

    function setResponse_error($response_error) {
        $this->response_error = $response_error;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
