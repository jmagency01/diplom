<?php
ini_set('display_errors', '1');
require_once __DIR__ . '/../vendor/autoload.php';

$request = new \Vlad\Bishen\Base\Request;
$file = __DIR__ . '/../config.json';

$app = new \Vlad\Bishen\Base\Application($file);
$response = $app->handleRequest($request);
$response->send();

/*run();

function run() {
    $controller = 'Index';
    $action = 'index';
    $get = null;

    $routes = explode('/', $_SERVER['REQUEST_URI']); // /
//    var_dump($routes);
    if($routes[1]) {
        $controller = $routes[1]; // имя контроллера goods
    }
    if($routes[2]) {
        $action = $routes[2]; // имя метода index
    }
    if($routes[3]) {
        $get = $routes[3]; // условно: параметры get запроса
    }
    $controller = ucfirst(strtolower($controller)) . 'Controller';
    // Index . Controller
    // IndexController
//    var_dump("Controller: $controller");

    $action = strtolower($action) . 'Action';
    // index . Action
    //  indexAction
//    var_dump("Action: $action");



    if (!class_exists($controller)) {
        // выбросить исключение класс не найден
        var_dump("класс не найден");
        return false;
    }
    if (!method_exists($controller, $action)) {
        // выбросить исключение метод не найден
        var_dump("метод не найден");
        return false;
    }

    $controller = new $controller();
//    $controller = new IndexController();

    $controller->$action($get);
//    $controller->indexAction();

}*/



