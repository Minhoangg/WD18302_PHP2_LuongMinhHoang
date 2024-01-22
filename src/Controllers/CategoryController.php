<?php


namespace src\Controllers;

use src\core\Controller;

class CategoryController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Category');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

}

