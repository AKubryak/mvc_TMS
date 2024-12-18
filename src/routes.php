<?php

use Controllers\HomeController;
use Controllers\Api\TaskController;

return [
    '/' => [
        'controller' => HomeController::class,
        'method' => 'index',
        'httpMethod' => 'GET',
    ],
    '/create' => [
        'controller' => HomeController::class,
        'method' => 'createView',
        'httpMethod' => 'GET',
    ],
    '/create/task' => [
        'controller' => HomeController::class,
        'method' => 'create',
        'httpMethod' => 'POST',
    ],
    '/update' => [
        'controller' => HomeController::class,
        'method' => 'update',
        'httpMethod' => 'POST',
    ],
    '/update/{id}' => [
        'controller' => HomeController::class,
        'method' => 'updateView',
        'httpMethod' => 'GET',
    ],
/*     '/api/tasks' => [
        'controller' => TaskController::class,
        'method' => 'getAll',
        'httpMethod' => 'GET',
    ],
    '/api/task' => [
        'controller' => TaskController::class,
        'method' => 'create',
        'httpMethod' => 'POST',
    ],
    '/api/task/{id}' => [
        'controller' => TaskController::class,
        'method' => 'get',
        'httpMethod' => 'GET',
        'regex' => '#/api/task/([1-9]+)#',
    ], */
];