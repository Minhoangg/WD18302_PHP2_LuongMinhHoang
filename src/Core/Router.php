<?php



namespace app\src\Core;
class Router
{
    protected $controller ;

    protected $action ;
    public $params = [];


    public function __construct()
    {
        $urlParts = $this->getUrlParts();
        // Xác định Controller
        if (!empty($urlParts[0])) {

            $controllerName = ucfirst(strtolower($urlParts[0])) . 'Controller';

            $controllerFile = "./src/Controllers/$controllerName.php";
            if (file_exists($controllerFile)) {
                $this->controller = $controllerName;
            } else {
                $this->handleError();
            }
            unset($urlParts[0]);
        }else{
            $this->controller = 'HomeController';
        }

        // Khởi tạo đối tượng Controller
        $controllerNamespace = "app\\src\\Controllers\\" . $this->controller;
        $this->controller = new $controllerNamespace;


        // Xác định Action

        if (!empty($urlParts[1]) && method_exists($this->controller, $urlParts[1]) ) {
            $this->action = $urlParts[1];
            unset($urlParts[1]);
        }else if(!empty($urlParts[1]) && !method_exists($this->controller, $urlParts[1])){
            $this->handleError();
        }else{
            $this->action = 'index';
        }

        // Params
        $this->params = array_values($urlParts);

        // Gọi hàm Action với các tham số
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    protected function getUrlParts()
    {
        if (isset($_GET["url"])) {
            $url = trim($_GET["url"], "/");
            return explode("/", $url);
        }

        return [];
    }

    protected function handleError()
    {
        require_once './src/Views/PagesError/error404.php';
        exit();
    }
}
?>