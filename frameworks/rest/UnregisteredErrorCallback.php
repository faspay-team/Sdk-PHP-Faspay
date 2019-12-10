<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnregisteredErrorCallback
 *
 * @author hilmananwarsah
 */
interface UnregisteredErrorCallback {
    public function onUserNotRegistered(UnregisteredError  $mUnregisteredError);
}
