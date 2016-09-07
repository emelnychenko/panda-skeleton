<?php

ini_set('display_errors',           1);
ini_set('display_startup_errors',   1);

error_reporting(E_ALL);

define('PANDA_TIMESTAMP', microtime(true));

/**
 |  Include composer loader
 */ 
include __DIR__ . '/../library/autoload.php';

/**
 |  Execution bootstrap scenario
 */ 
include __DIR__ . '/../bootstrap.php';
