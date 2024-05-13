<?php

namespace Simplimmo\model;

use Simplimmo\classes\DBConfig;
use PDO;

class Annonces_model
{
    public function getAllAnnonces()
    {
        $db = new DBConfig();
        $pdo = $db->connect();

        $stmt = $pdo->query("SELECT * FROM annonces");
        $annonces = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $annonces;
    }
}
