<?php


namespace app\src\Controllers;

use app\src\Core\Controller;

class ShopController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Client/Layout/Header.php');
        $this->CallViewClient('Shop');
        $this->CallFooter('./src/Views/Client/Layout/Footer.php');
    }

}

