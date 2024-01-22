<?php
require_once './vendor/autoload.php';
define('ROOT_URL', 'http://php2.com');
use app\src\core\Router;
//use src\core\Database;
//new Database();
//use src\controllers\HomeController;

session_start();
$myApp = new Router();

?>