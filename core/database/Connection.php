<?php

class Connection
{

    static function make($database)
    {

        try {
            
            return $pdo = new PDO(
                $database["connection"] .
                "; dbname=" .
                $database["name"].
                "; collation=".
                $database["collation"],
                $database["username"],
                $database["password"],
                $database["options"]
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
