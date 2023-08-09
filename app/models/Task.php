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
}