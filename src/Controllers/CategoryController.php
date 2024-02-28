<?php


namespace app\src\Controllers;

use app\src\Core\Controller;
use Exception;

class CategoryController extends Controller
{
    function index()
    {
        if (isset($_SESSION['user'])) {

            $this->CallHeader('./src/Views/Admin/Layout/Header.php');

            $model = $this->CallModel('CategoryModel');
            $data = $model->getAllCategory();

            $this->CallViewAdmin('Category', $data);

            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function handleDelete($id)
    {
        if (isset($_SESSION['user'])) {

            try {
                $model = $this->CallModel('CategoryModel');
                $model->deleteCategory($id);
            } catch (Exception $e) {
                echo 'khong xoa duoc';
            }

        }
    }

    function categoryadd()
    {
        if (isset($_SESSION['user'])) {
            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $this->CallViewAdmin('categoryadd');
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function handleAdd()
    {
        if (isset($_SESSION['user'])) {

            if (isset($_POST['button_insert'])) {

                $model = $this->CallModel('CategoryModel');

                $data = [
                    'name' => $_POST['name_category'],
                ];
                $model->addCategory($data);
            }
        }
    }

    function categoryEdit($id)
    {
        if (isset($_SESSION['user'])) {

            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $model = $this->CallModel('CategoryModel');

            $data = $model->gettOne($id);

            $this->CallViewAdmin('Categoryedit', $data);
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function handleEdit()
    {
        if (isset($_SESSION['user'])) {

            if (isset($_POST['button_edit'])) {
                $model = $this->CallModel('CategoryModel');

                $id = $_POST['id_category'];

                $data = [
                    'name' => $_POST['name_category'],
                ];

                var_dump($data);

                $model->updateCategory($id, $data);
            }
        }
    }
}

