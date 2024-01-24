<?php



namespace app\src\Controllers;

use app\src\core\Controller;

class HomeController extends Controller
{
    function index()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Home');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

    function homeadd()
    {
        $this->CallHeader('./src/Views/Admin/Layout/Header.php');
        $this->CallViewAdmin('Homeadd');
        $this->CallFooter('./src/Views/Admin/Layout/Footer.php');
    }

}

?>