<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

define('LIB_ROOT', dirname(realpath(dirname(__FILE__))));

$autoloader = require __DIR__ . '/../vendor/autoload.php';
