<?php
require_once './vendor/autoload.php';

use App\Controller\BaseControl;
use App\Core\Route;
use App\Model\BaseModel;
use App\Core\Database;


$controller = new BaseControl();
$route = new Route();
$model = new BaseModel();
$data = new Database();


$data->HeloWord();
?>
