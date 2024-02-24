<?php

require_once './vendor/autoload.php';
define('ROOT_URL', 'http://php2');

use app\src\Core\Router;
use app\src\Phpmailer\Mailer;

session_start();
$myApp = new Router();
