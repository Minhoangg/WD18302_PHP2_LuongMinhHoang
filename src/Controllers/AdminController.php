<?php


namespace src\Controllers;

use src\core\Controller;

class AdminController extends Controller
{
    function index()
    {
        $this->CallViewAdmin('Login');
    }

}

