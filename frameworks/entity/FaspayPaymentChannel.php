<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentChannel
 *
 * @author hilmananwarsah
 */
class FaspayPaymentChannel {
    //put your code here
    private $pg_code;
    private $pg_name;
    
    function getPg_code() {
        return $this->pg_code;
    }

    function getPg_name() {
        return $this->pg_name;
    }

    function setPg_code($pg_code) {
        $this->pg_code = $pg_code;
    }

    function setPg_name($pg_name) {
        $this->pg_name = $pg_name;
    }


}
