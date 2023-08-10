<?php

use app\controllers\TaskController;
const MAIN_DIR = __DIR__;

require_once MAIN_DIR.'/init.php';

$app->router->get('/', [TaskController::class, 'index'])
    ->post('/task/create', [TaskController::class, 'create'])
    ->post('/task/delete', [TaskController::class, 'delete'])
    ->post('/task/edit', [TaskController::class, 'edit']);

$app->run();