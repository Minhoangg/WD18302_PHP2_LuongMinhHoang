<?php


namespace app\src\Controllers;

use app\src\core\Controller;

class BookController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Book');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

    function bookadd()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Bookadd');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }
}
