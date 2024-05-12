<?php
namespace Simplimmo ;
use PDO;
use PDOException;

class DBConfig {


    private $host = 'mysql_service';
    private $dbname = 'Simplimmo';
    private $username = 'root';
    private $password = 'Simplon05/2024'; 

    public     function connect(){
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}