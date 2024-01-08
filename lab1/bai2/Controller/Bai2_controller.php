<?php
include_once('../Model/Data.php');
include_once('../Model/Method.php');
$block = (!empty($_GET['block']) ? $_GET["block"] : " ");

$course_name = find_by_block($block);
include '../Views/view.php';
?>