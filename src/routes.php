<?php

use Controllers\Api\TaskController;

return [
    '/api/tasks' => [
        'controller' => TaskController::class,
        'method' => 'getAll',
        'httpMethod' => 'GET',
    ],
/*     '/api/task/{id}' => [
        'controller' => TaskController::class,
        'method' => 'get',
        'httpMethod' => 'GET',
        'regex' => ,
    ], */
];