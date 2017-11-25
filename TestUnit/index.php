<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../application/libraries/Mainapi.php';

$voice = new Mainapi();
$voice->setClient_id("xx");
$voice->setSecret_id("xx");
$res = $voice->voiceotp("xx", "xx","xx","xx");
var_dump($res);


