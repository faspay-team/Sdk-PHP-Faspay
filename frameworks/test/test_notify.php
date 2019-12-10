<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_notify
 *
 * @author hilmananwarsah
 */
require_once '../../vendor/autoload.php';
require_once '../entity/notify/NotifyHandler.php';

$a = new NotifyHandler();
echo $a->handle();
