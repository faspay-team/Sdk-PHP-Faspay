<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayPaymentCreditItemData
 * PHP DOESNT SUPPORT MULTIPLE CONSTRUCTOR
 * @author hilmananwarsah
 */
class FaspayPaymentCreditItemData {
    public $mref1;
    public $mref2;
    public $mref3;
    public $mref4;
    public $mref5;
    public $mref6;
    public $mref7;
    public $mref8;
    public $mref9;
    public $mref10;
    
    function __construct($array) {
        for ($index = 0; $index < count($array); $index++) {
            switch ($index) {
                case 0:
                    $this->mref1 = $array[$index];
                    break;
                case 1:
                    $this->mref2 = $array[$index];
                    break;
                case 2:
                    $this->mref3 = $array[$index];
                    break;
                case 3:
                    $this->mref4 = $array[$index];
                    break;
                case 4:
                    $this->mref5 = $array[$index];
                    break;
                case 5:
                    $this->mref6 = $array[$index];
                    break;
                case 6:
                    $this->mref7 = $array[$index];
                    break;
                case 7:
                    $this->mref8 = $array[$index];
                    break;
                case 8:
                    $this->mref9 = $array[$index];
                    break;
                case 9:
                    $this->mref10 = $array[$index];
                    break;


                default:
                    break;
            }
        }
    }

    
    function getMref1() {
        return $this->mref1;
    }

    function getMref2() {
        return $this->mref2;
    }

    function getMref3() {
        return $this->mref3;
    }

    function getMref4() {
        return $this->mref4;
    }

    function getMref5() {
        return $this->mref5;
    }

    function getMref6() {
        return $this->mref6;
    }

    function getMref7() {
        return $this->mref7;
    }

    function getMref8() {
        return $this->mref8;
    }

    function getMref9() {
        return $this->mref9;
    }

    function getMref10() {
        return $this->mref10;
    }

    function setMref1($mref1) {
        $this->mref1 = $mref1;
    }

    function setMref2($mref2) {
        $this->mref2 = $mref2;
    }

    function setMref3($mref3) {
        $this->mref3 = $mref3;
    }

    function setMref4($mref4) {
        $this->mref4 = $mref4;
    }

    function setMref5($mref5) {
        $this->mref5 = $mref5;
    }

    function setMref6($mref6) {
        $this->mref6 = $mref6;
    }

    function setMref7($mref7) {
        $this->mref7 = $mref7;
    }

    function setMref8($mref8) {
        $this->mref8 = $mref8;
    }

    function setMref9($mref9) {
        $this->mref9 = $mref9;
    }

    function setMref10($mref10) {
        $this->mref10 = $mref10;
    }


    

}
