<?php

namespace app\database;


use PDO;

class Database
{
    public static PDO $connection;

    public static function makeConnection($config)
    {
        $dsn = "mysql:dbname={$config['dbname']};host={$config['host']}";

        try {
            self::$connection = new PDO($dsn, $config['user'], $config['password'], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

            return self::$connection;
        } catch (\PDOException $exception) {
            exit("PDO failed to connect");
        }
    }

    public static function get(string $table): false|array
    {
        $query = "SELECT * FROM {$table}";
        $query = self::execute($query);
        return $query->fetchAll();
    }

    public static function create(string $table, array $data = []): void
    {
        $keys = array_keys($data);

        $temp = [];
        foreach($keys as $key)
        {
            $temp[] = ':'.$key;
        }

        $columns = implode(',', $keys);
        $values = implode(',', $temp);

        $query = "INSERT INTO {$table}({$columns}) values($values)";
        self::execute($query, $data);
    }

    public static function delete(string $table, array $params = [], string $column = 'id'): void
    {
        $value = ':'.$column;
        $query = "DELETE FROM {$table} WHERE {$column} = {$value}";
        self::execute($query, $params);
    }

    public static function execute($query, $params = []): false|\PDOStatement
    {
        $stmt = self::$connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}