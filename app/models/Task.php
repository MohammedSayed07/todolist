<?php

namespace app\models;

use app\database\Database;

class Task
{
    private static string $tableName = 'tasks';

    public static function get(): false|array
    {
        return Database::get(self::$tableName);
    }

    public static function create(array $data = []): void
    {
        Database::create(self::$tableName, $data);
    }

    public static function delete(array $id = []): void
    {
        Database::delete(self::$tableName, $id);
    }
}