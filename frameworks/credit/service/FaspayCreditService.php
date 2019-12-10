<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FaspayCreditService
 *
 * @author hilmananwarsah
 */
interface FaspayCreditService {
    function inquiry(InquiryRequestCredit $credit);
    function voidTransaction(VoidRequestCredit $requestCredit);
}
