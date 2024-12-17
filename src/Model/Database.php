<?php

namespace Model;

use PDO;

class Database
{
    protected static ?PDO $connection = null;
    
    public function connection(): PDO
    {
        $connection = self::$connection;

        if (!$connection) {
/*             $connection = new PDO(
                'mysql:host=mysql-8.2;port=3306;dbname=mvc',
                'root'
            ); */
            $connection = new PDO(
                dsn: "mysql:host=mysql-8.2;dbname=mvc;charset=utf8",
                username: "root",
                password: "",
            );
            self::$connection = $connection;
        }

        return $connection;
    }
}