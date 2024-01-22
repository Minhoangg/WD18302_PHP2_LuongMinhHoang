<?php


namespace src\Controllers;

use src\core\Controller;

class AuthorController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Author');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

    function authoradd()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Authoradd');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

}

