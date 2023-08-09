<?php

use app\controllers\TaskController;

const MAIN_DIR = __DIR__;

require_once MAIN_DIR.'/init.php';

$app->router->get('/', [TaskController::class, 'index']);

$app->router->post('/task/create', [TaskController::class, 'create']);
$app->router->post('/task/delete', [TaskController::class, 'delete']);

$app->run();