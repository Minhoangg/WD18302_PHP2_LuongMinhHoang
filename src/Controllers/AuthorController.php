<?php


namespace app\src\Controllers;

use app\src\Api\ApiCountries;
use app\src\Core\Controller;
use Exception;

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

            $urlApi = "https://restcountries.com/v3.1/all";


            $apiModel = new ApiCountries($urlApi);

            $dataApi = $apiModel->getCountriesData();


            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $this->CallViewAdmin('Authoradd', $dataApi);
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function handleAdd()
    {

        if (isset($_SESSION['user'])) {

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

    }

    function handleDelete($id)
    {
        if (isset($_SESSION['user'])) {

            try {
                $model = $this->CallModel('AuthorModel');

                $model->deleteAuthor($id);
            } catch (Exception $e) {
                echo 'ko dc';
            }
        }
    }

    function edit($id)
    {
        if (isset($_SESSION['user'])) {

            $this->CallHeader('./src/Views/Admin/Layout/Header.php');
            $model = $this->CallModel('AuthorModel');

            $urlApi = "https://restcountries.com/v3.1/all";


            $apiModel = new ApiCountries($urlApi);

            $data_country = $apiModel->getCountriesData();

            $data = $model->gettOne($id);

            $this->CallViewAdmin('Authoredit', $data, $data_author = [], $data_category = [], $data_country);
            $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
        }
    }

    function handleEdit()
    {
        if (isset($_SESSION['user'])) {

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

}

