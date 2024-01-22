<?php


namespace src\Controllers;

use src\core\Controller;

class DashboardController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Dashboard');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

}

