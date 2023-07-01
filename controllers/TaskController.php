<?php

namespace app\controllers;

use thecodeholic\phpmvc\Controller;
use thecodeholic\phpmvc\Request;
use app\models\Task;
use app\models\TaskMain;

class TaskController extends Controller
{

    public $params;

    public function myDay()
    {
        $task = new Task();

        $tasks = $task->list();

        return $this->render('/task/myDay', [
            'tasks' => $tasks
        ]);
    }

    public function register(Request $request)
    {
        $task = new Task();

        $task->__set('name', $_GET['name']);
        $task->__set('description', $_GET['description']);
        $task->__set('status', $_GET['status']);

        $task->register();

        $tasks = $task->list();

        return $this->render('/task/myDay', [
            'tasks' => $tasks
        ]);
    }


    public function editName(Request $request)
    {
        $task = new Task();

        $task->__set('task_id', $_GET['task_id']);
        $task->__set('name', $_GET['name']);


        $task->editName();

        $tasks = $task->list();

        return $this->render('/task/myDay', [
            'tasks' => $tasks
        ]);
    }

    public function editDescription(Request $request)
    {
        $task = new Task();

        $task->__set('task_id', $_GET['task_id']);
        $task->__set('description', $_GET['description']);


        $task->editDescription();

        $tasks = $task->list();

        return $this->render('/task/myDay', [
            'tasks' => $tasks
        ]);
    }


    public function update_status(Request $request)
    {
        $task = new Task();


        $task->__set('task_id', $_GET['task_id']);
        $task->__set('status', $_GET['status']);


        $task->updateStatus();

        $tasks = $task->list();

        return $this->render('/task/myDay', [
            'tasks' => $tasks
        ]);
    }


    public function delete(Request $request)
    {
        $task = new Task();

        $task->__set('task_id', $_GET['task_id']);

        $task->delete();

        $tasks = $task->list();

        return $this->render('/task/myDay', [
            'tasks' => $tasks
        ]);
    }
}
