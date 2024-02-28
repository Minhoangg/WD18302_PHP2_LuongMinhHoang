<?php


namespace app\src\Models;

use app\src\Repositorys\LoginRepository;
use app\src\Validate\Validator;

class LoginAdminModel extends LoginRepository
{

    function LoginAdmin($email, $password)
    {
        $validate = new Validator();

        $validateRules = [
            'email' => 'empty|email',
            'password' => 'empty|password'
        ];

        $params = [
            'email' => $email,
            'password' => $password
        ];

        $validate->validate($validateRules, $params);

        $errors = $validate->getErrors();

        if (!empty($errors)) {
            $_SESSION['errorEmail'] = $errors['email'];
            $_SESSION['errorPassword'] = $errors['password'];

            header('location: ' . ROOT_URL . '/admin');
        } else {
            $resultCheck = $this->checkEmailExit($email);

            if ($resultCheck['role'] == 1 && password_verify($password, $resultCheck['password'])){

                $_SESSION['user'] = $resultCheck;

                header('location: ' . ROOT_URL . '/book');

            }else{

                header('location: ' . ROOT_URL . '/admin');

            }
        }
    }


}