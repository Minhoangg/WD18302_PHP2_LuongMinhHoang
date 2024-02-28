<?php



namespace app\src\Core;

class Controller
{
    public function CallModel( $model)
    {
        $modelClass = "app\\src\\Models\\" . $model;
        return new $modelClass;
    }

    public function CallViewAdmin($view, $data = [] , $data_author = [], $data_category = [], $data_country = [])
    {
        require "./src/Views/Admin/Pages/" . $view . ".php";
    }

    public function CallViewClient($view, $data = [])
    {
        require "./src/Views/Client/Pages/" . $view . ".php";
    }

    public function CallHeader( $url, $data = [])
    {
        require "$url";
    }

    public function CallFooter( $url, $data = [])
    {
        require "$url";
    }

}

?>