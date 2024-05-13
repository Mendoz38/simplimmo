<?php

namespace Simplimmo\classes;

use PDO;
use PDOException;

class DBConfig
{
    private static $pdo = null;

    public function connect()
    {
        if (self::$pdo === null) {
            $config = include(__DIR__ . '/../../config/bd.php');
            $host = $config['host'];
            $dbname = $config['dbname'];
            $username = $config['username'];
            $password = $config['password'];

            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               // echo "Connected successfully to : $dbname<br />";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                die();
            }
        }

        return self::$pdo;
    }
}
