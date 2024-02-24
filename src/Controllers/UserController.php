<?php


namespace app\src\Controllers;

use app\src\Core\Controller;

class UserController extends Controller
{
    function index()
    {
        if (isset($_SESSION['user'])) {
            $this->CallHeader('./src/Views/Admin/Layout/Header.php');

            $model = $this->CallModel('UserModel');
            $data = $model->getAllUser();

            $this->CallViewAdmin('User', $data);
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }

    }

    function useradd()
    {
        if (isset($_SESSION['user'])) {
            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $this->CallViewAdmin('Useradd');
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function handleAdd()
    {
        $model = $this->CallModel('UserModel');

        if (isset($_POST['button_insert'])) {

            $data = [
                'full_name' => $_POST['full_name'],
                'username' => $_POST['user_name'],
                'password' => $_POST['password'],
                'email' => $_POST['email'],
                'role' => $_POST['role'],
            ];

            $model->addUser($data);
        }
    }

    function handleDelete($id)
    {
        $model = $this->CallModel('UserModel');

        $model->deleteUser($id);
    }

    function userEdit($id)
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $model = $this->CallModel('UserModel');

        $data = $model->gettOne($id);

        $this->CallViewAdmin('Useredit', $data);
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

    function handleEdit()
    {

        if (isset($_POST['button_edit'])) {
            $model = $this->CallModel('UserModel');

            $id = $_POST['id_book'];


            $data = [
                'full_name' => $_POST['full_name'],
                'username' => $_POST['user_name'],
                'email' => $_POST['email'],
                'role' => $_POST['role'],
            ];


            $model->updateUser($id, $data);
        }
    }
}

