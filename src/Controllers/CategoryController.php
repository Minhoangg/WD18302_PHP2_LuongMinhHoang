<?php


namespace app\src\Controllers;

use app\src\Core\Controller;

class CategoryController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('ProductModel');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

}

