<?php

namespace app\models;

use PDOStatement;
use thecodeholic\phpmvc\DbModel;
use thecodeholic\phpmvc\Model;
use thecodeholic\phpmvc\Application;

define('ID_DEFAULT', 0);

class Task extends Model
{



    public int $task_id = 0;
    public string $name = '';
    public string $description = '';
    public int $status = 0;

    

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public static function tableName(): string
    {
        return 'task';
    }

    public function attributes(): array
    {
        return ['task_id', 'user_id', 'category_id', 'task_name', 'task_main_id'];
    }

    public function labels(): array
    {
        return [
            'task_id' => 'Task Id',
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status'
        ];
    }

    public function getDisplayName(): string
    {
        return $this->name;
    }

    public function register(): object
    {
        $query = "INSERT into task(name, description, status) values( :name, :description, :status)";

        $db = Application::$app->db;
        $statement = $db->prepare($query);
    

        // $statement->bindValue(':task_id', (int)$this->__get('task_id'));
        $statement->bindValue(':name', $this->__get('name'));
        $statement->bindValue(':description', $this->__get('description'));
        $statement->bindValue(':status',  $this->__get('status'));
       
        $statement->execute();
    
        return $this;
    }

    
    public function editName(): object
    {
        $query = "UPDATE task SET name = :name
        WHERE task_id = :task_id";

        $db = Application::$app->db;
        $statement = $db->prepare($query);


        $statement->bindValue(':task_id', (int)$this->__get('task_id'));
        $statement->bindValue(':name', $this->__get('name'));

        $statement->execute();
        return $this;
    }

        
    public function editDescription(): object
    {
        $query = "UPDATE task SET description = :description
        WHERE task_id = :task_id";

        $db = Application::$app->db;
        $statement = $db->prepare($query);


        $statement->bindValue(':task_id', (int)$this->__get('task_id'));
        $statement->bindValue(':description', $this->__get('description'));
        
        $statement->execute();
        return $this;
    }

   
    public function updateStatus(): object
    {
        $query = "UPDATE task SET status = :status WHERE  task_id = :task_id";

        $db = Application::$app->db;
        $statement = $db->prepare($query);

  
        $statement->bindValue(':task_id', (int)$this->__get('task_id'));
        $statement->bindValue(':status', $this->__get('status'));

        $statement->execute();
        return $this;
    }

    public function list(): array
    {
        $query = "SELECT task_id, name, description, status FROM task";

        $db = Application::$app->db;
        $statement = $db->prepare($query);

        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

  

    public function delete(): object
    {
        $query = "DELETE FROM task WHERE task_id = :task_id";

        $db = Application::$app->db;
        $statement = $db->prepare($query);

        $statement->bindValue(':task_id', (int)$this->__get('task_id'));

        $statement->execute();
        return $this;
    }

   
}


