<?php
error_reporting(E_ERROR);

require_once __DIR__ . '/../vendor/autoload.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|ico|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

$url = $_SERVER['REQUEST_URI'];
$routes = require_once 'routes.php';

$route = $routes[$url];

if (!$route or $route['httpMethod'] != $_SERVER['REQUEST_METHOD']) {
    http_response_code(404);
    echo "Страница не найдена";
    return false;
}

$controller = new $route['controller'];

$response = $controller->{$route['method']}();

echo $response;