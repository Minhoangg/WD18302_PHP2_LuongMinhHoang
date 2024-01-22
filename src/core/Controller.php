<?php



namespace app\src\core;
class Controller
{
    public function CallModel($model)
    {
        $modelClass = "src\\Models\\" . $model;
        return new $modelClass;
    }

    public function CallViewAdmin($view, $data = [])
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