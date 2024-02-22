<?php



namespace app\src\Controllers;

use app\src\Core\Controller;

class HomeController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Client/Layout/Header.php');

        // Pass data to the view
        $this->CallViewClient('Home');
        $this->CallFooter('./src/Views/Client/Layout/Footer.php');
    }

    function editBook($id)
    {
        echo 'sửa sản phẩm id' . $id;
    }

}

?>