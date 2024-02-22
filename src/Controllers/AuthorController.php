<?php


namespace app\src\Controllers;

use app\src\Core\Controller;

class AuthorController extends Controller
{

    private $params;

    function index()
    {
        if (isset($_SESSION['user'])) {
            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $model = $this->CallModel('AuthorModel');
            $data = $model->getAllAuthor();

            $this->CallViewAdmin('Author', $data);
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function authoradd()
    {
        if (isset($_SESSION['user'])) {
            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $this->CallViewAdmin('Authoradd');
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function handleAdd()
    {
        $model = $this->CallModel('AuthorModel');

        if (isset($_POST['button_insert'])) {

            $data = [
                'full_name' => $_POST['name_author'],
                'date_of_birth' => $_POST['date_birth_author'],
                'nationality' => $_POST['nationality_author']
            ];
            $model->addAuthor($data);
        }

    }

    function handleDelete($id)
    {
        $model = $this->CallModel('AuthorModel');

        $model->deleteAuthor($id);
    }

    function edit($id)
    {

        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $model = $this->CallModel('AuthorModel');

        $data = $model->gettOne($id);

        $this->CallViewAdmin('Authoredit', $data);
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

    function handleEdit()
    {

        if (isset($_POST['button_edit'])) {
            $model = $this->CallModel('AuthorModel');

            $id = $_POST['id_author'];

            $data = [
                'full_name' => $_POST['name_author'],
                'date_of_birth' => $_POST['date_birth_author'],
                'nationality' => $_POST['nationality_author']
            ];

            $model->updateAuthor($id, $data);
        }
    }

}

