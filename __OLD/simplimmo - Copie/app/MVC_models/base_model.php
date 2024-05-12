<?php

namespace App\Models;

class BaseModel
{
    protected $connection;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../../config/database.php';
        
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['database'] . ';charset=' . $config['charset'];
        
        $this->connection = new \PDO($dsn, $config['username'], $config['password']);
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}
