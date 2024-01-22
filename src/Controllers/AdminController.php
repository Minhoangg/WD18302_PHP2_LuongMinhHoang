<?php


namespace app\src\Controllers;

use app\src\core\Controller;

class AdminController extends Controller
{
    function index()
    {
        $this->CallViewAdmin('Login');
    }

}

