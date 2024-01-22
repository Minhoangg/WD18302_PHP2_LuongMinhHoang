<?php


namespace src\Controllers;

use src\core\Controller;

class UserController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('User');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

}

