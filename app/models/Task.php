<?php

namespace app\models;

use app\database\Database;

class Task
{


    public static function get(): false|array
    {
        $tasks = Database::get('tasks');
        return $tasks;
    }

    public static function store(array $data = []): void
    {
        Database::store('tasks', 'title, is_done', ':title, :is_done', $data);
    }
}