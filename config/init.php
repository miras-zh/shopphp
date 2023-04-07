<?php
//echo 'init.php';

const DEBUG = 1;
define("ROOT", dirname(__DIR__));
//echo ROOT;
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/vendor/ishop/core';
const LIBS = ROOT . '/vendor/ishop/libs';
const CACHE = ROOT . '/tmp/cache';
const CONF = ROOT . '/config';
const LAYOUT = 'default';

//http://shopphp.local:8079/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

//http://shopphp.local:8079/
$app_path = preg_replace("#[^/]+$#",'', $app_path);

//http://shopphp.local:8079
$app_path = str_replace('/public/','', $app_path);

//echo ": {$app_path}";
define("PATH", $app_path);

const ADMIN = PATH . 'admin';

require_once ROOT . '/vendor/autoload.php';
