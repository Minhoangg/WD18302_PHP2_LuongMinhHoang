<?php
namespace core;
class Router {
    public function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'book/index';

        $url = explode('/', $url);

        $controllerName = ucfirst($url[0]) . 'Controller';
        $controllerFile = 'app/controllers/' . $controllerName . '.php';

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();

            $action = isset($url[1]) ? $url[1] : 'index';

            if (method_exists($controller, $action)) {
                if (isset($url[2])) {
                    $controller->$action($url[2]);
                } else {
                    $controller->$action();
                }
            } else {
                // Xử lý khi action không tồn tại
                echo "Action not found";
            }
        } else {
            // Xử lý khi controller không tồn tại
            echo "Controller not found";
        }
    }
}
