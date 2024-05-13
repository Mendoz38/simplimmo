<?php

namespace Simplimmo\model;

use Simplimmo\classes\DBConfig;
use PDO;
use PDOException;

class Register_model
{
    private $pdo;

    public function __construct()
    {
        $dbConfig = new DBConfig();
        $this->pdo = $dbConfig->connect();
    }

    public function validateFormData($formData)
    {
        if (isset($formData['name']) && isset($formData['mail']) && isset($formData['password'])) {
            return true; 
        } else {
            return false; 
        }
    }

    public function checkEmailExists($mail)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE mail = :mail");
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            return $count > 0; 
        } catch (PDOException $e) {
            echo "L'email existe déjà";
            return false;
        }
    }

    public function insertUser($userData)
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (name, surname, phone, mail, password, token, status, date_create, date_modif) 
                                         VALUES (:name, :surname, :phone, :mail, :password, :token, :status, :date_create, :date_modif)");

            $stmt->bindParam(':name', $userData['name']);
            $stmt->bindParam(':surname', $userData['surname']);
            $stmt->bindParam(':phone', $userData['phone']);
            $stmt->bindParam(':mail', $userData['mail']);
            $stmt->bindParam(':password', $userData['password']);
            $stmt->bindParam(':token', $userData['token']);
            $stmt->bindParam(':status', $userData['status']);
            $stmt->bindParam(':date_create', $userData['date_create']);
            $stmt->bindParam(':date_modif', $userData['date_modif']);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            // A faire, gérer l'erreur d'insertion
            return false;
        }
    }
}
