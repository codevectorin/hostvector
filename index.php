<?php

/**
 * @Do not Edit.
 * @Surface
 * @Author: Vinay Khobragade
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('UTC');
define('BASEPATH', __DIR__);

$loader = require 'vendor/autoload.php';

$loader->add('system', __DIR__.'/vendor');
$loader->add('app', __DIR__.'/vendor');


$kernel = new system\Kernel();
