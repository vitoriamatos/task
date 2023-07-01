<?php

use controllers\AboutController;
use app\controllers\SiteController;
use app\controllers\TaskController;
use thecodeholic\phpmvc\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];


$app = new Application(dirname(__DIR__), $config);

$app->on(Application::EVENT_BEFORE_REQUEST, function () {
});

$app->router->get('task/public', [TaskController::class, 'myDay']);
$app->router->get('task/public/register', [SiteController::class, 'register']);
//todo routes
$app->router->get('task/public/my-day', [TaskController::class, 'myDay']);
$app->router->get('task/public/save-task', [TaskController::class, 'register']);
$app->router->get('task/public/save-subtask', [TaskController::class, 'registerSubTask']);
$app->router->get('task/public/edit-task', [TaskController::class, 'editName']);
$app->router->get('task/public/edit-task-description', [TaskController::class, 'editDescription']);
$app->router->get('task/public/delete', [TaskController::class, 'delete']);
$app->router->get('task/public/update-status', [TaskController::class, 'update_status']);
$app->run();
