<?php


namespace app\src\Controllers;

use app\src\Core\Controller;

class AdminController extends Controller
{
    function index()
    {
        $this->CallViewAdmin('Login');
    }

    function handleLogin()
    {
       $model = $this->CallModel('LoginAdminModel');

       if (isset($_POST['login'])){
           $model->LoginAdmin($_POST['email'], $_POST['password']);
       }
    }

    function logout()
    {
        session_unset();
        header('location:' . '/admin');
    }
}

