<?php


require_once './vendor/autoload.php';
define('ROOT_URL', 'http://php2');

use app\src\Core\Router;

session_start();
$myApp = new Router();
