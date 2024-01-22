<?php


namespace src\Controllers;

use src\core\Controller;

class ContactController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Client/Layout/Header.php');
        $this->CallViewClient('Contact');
        $this->CallFooter('./src/Views/Client/Layout/Footer.php');
    }

}

