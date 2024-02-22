<?php

require_once './vendor/autoload.php';
define('ROOT_URL', 'http://php2');

use app\src\Core\Router;

session_start();
$myApp = new Router();


//
//
//use app\src\Core\SQLQueryBuilder;
//
//$sql = new SQLQueryBuilder();
//
//$sql->tableName = 'author';
//
//$attributes = [
//    'full_name' => 'hoang',
//    'date_of_birth' => '2024-02-12',
//    'nationality' => 'okokok'
//];
//
//$sql->updateData('author', $attributes, 'id=17');
