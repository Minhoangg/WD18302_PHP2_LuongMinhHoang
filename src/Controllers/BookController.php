<?php


namespace app\src\Controllers;

use app\src\Core\Controller;

class BookController extends Controller
{
    function index()
    {
        if (isset($_SESSION['user'])) {
            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $model = $this->CallModel('ProductModel');
            $data = $model->getAllProduct();

            $this->CallViewAdmin('Book', $data);
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function bookadd()
    {
        if (isset($_SESSION['user'])) {
            $this->CallHeader('./src/Views/Admin/Layout/Header.php');

            $model = $this->CallModel('ProductModel');

            $data = $model->getAllProduct();

            $data_author = $model->selectAllAuthor();

            $data_category = $model->selectAllCategory();

            $this->CallViewAdmin('Bookadd', $data, $data_author, $data_category);
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }


    function handleDelete($id)
    {
        $model = $this->CallModel('ProductModel');
        $model->deleteBook($id);
    }

    function handleAdd()
    {

        $model = $this->CallModel('ProductModel');

        if (isset($_POST['button_insert'])) {

            $data = [
                'name' => $_POST['name_book'],
                'price' => $_POST['price_book'],
                'img' => $_FILES["img_book"],
                'publication_year' => $_POST['date_publication'],
                'description' => $_POST['description_book'],
                'id_category' => $_POST['name_cate'],
                'id_author' => $_POST['name_author']
            ];
            $model->addBook($data);
        }
    }


    function bookEdit($id)
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $model = $this->CallModel('ProductModel');

        $data = $model->gettOne($id);
        $data_author = $model->selectAllAuthor();
        $data_category = $model->selectAllCategory();


        $this->CallViewAdmin('Bookedit', $data, $data_author, $data_category );
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

    function handleEdit()
    {
        if (isset($_POST['button_edit'])) {


            $model = $this->CallModel('ProductModel');

            $id = $_POST['id_book'];

            $data = [
                'name' => $_POST['name_book'],
                'price' => $_POST['price_book'],
                'img' => $_POST["img_book"],
                'up_img' => $_FILES["up_img_book"],
                'publication_year' => $_POST['date_publication'],
                'description' => $_POST['description_book'],
                'id_category' => $_POST['name_cate'],
                'id_author' => $_POST['name_author']
            ];

            $model->editBook($id, $data);
        }
    }
}
