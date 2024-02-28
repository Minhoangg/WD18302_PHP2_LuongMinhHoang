<?php

namespace app\src\Models;

use app\src\Repositorys\UserRepository;
use app\src\Validate\Validator;

class UserModel extends UserRepository
{
    public function getAllUser(): array
    {
        $data = $this->selectAll();
        return $data;
    }

    public function addUser($data)
    {

        $validate = new Validator();

        $validateRules = [
            'full_name'=>'empty',
            'username' => 'empty|userExist',
            'password' => 'empty|password',
            'email' => 'empty|emailExist',
            'role' => 'empty',
        ];

        $params = [
            'full_name'=>$data['full_name'],
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email'],
            'role' => $data['role'],
        ];

        $validate->validate($validateRules, $params);

        $errors = $validate->getErrors();

        if (!empty($errors)) {
            $_SESSION['errorFullname'] = $errors['full_name'];
            $_SESSION['errorUsername'] = $errors['username'];
            $_SESSION['errorPassword'] = $errors['password'];
            $_SESSION['errorEmail'] = $errors['email'];
            $_SESSION['errorRole'] = $errors['role'];

            header('location: ' . ROOT_URL . '/user/useradd');
        }else{

            $pass_hash = password_hash($data['password'], PASSWORD_DEFAULT);


            $dataUser = [
                'full_name' => $_POST['full_name'],
                'username' => $_POST['user_name'],
                'password' => $pass_hash,
                'email' => $_POST['email'],
                'role' => $_POST['role'],
            ];
            $this->create($dataUser);
            header('location:' . ROOT_URL . '/user');
        }

    }

    public function deleteUser($id)
    {
        $status = $this->remove($id);
        header('location:' . ROOT_URL . '/user');
    }

    public function gettOne($id)
    {
        $data = $this->selectOne( $id);
        return $data;
    }

    public function updateUser($id, $data)
    {
        $this->update($id, $data);
        header('location:' . ROOT_URL . '/user');
    }
}

?>