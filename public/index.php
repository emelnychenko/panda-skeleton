<?php

define('APPROOT', __DIR__ . '/..');

include APPROOT . '/library/autoload.php';

Panda\Bootstrap::make(
    APPROOT . '/application.php'
);
