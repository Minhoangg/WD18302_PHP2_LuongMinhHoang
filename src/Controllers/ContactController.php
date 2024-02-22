<?php


namespace app\src\Controllers;

use app\src\Core\Controller;

class ContactController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Client/Layout/Header.php');
        $this->CallViewClient('Contact');
        $this->CallFooter('./src/Views/Client/Layout/Footer.php');
    }

}

