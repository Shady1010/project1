<?php
class Route
{

    public static function start()
    {
        //Подключение middleware
        include DIR_CATALOG.DIR_FILE[3].'login.php';
        new Middleware_login();


        //контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        $model_file = strtolower($model_name).'.php';
        $model_path = DIR_CATALOG."models\\".$model_file;

        if (file_exists($model_path)) {
            include DIR_CATALOG."models\\".$model_file;
        } else {
            new Exception();
        }
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = DIR_CATALOG."controllers\\".$controller_file;

        if (file_exists($controller_path)) {
            include DIR_CATALOG."controllers\\".$controller_file;
        } else {
            new Exception();
        }

        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            new Exception();
        }

    }


}
