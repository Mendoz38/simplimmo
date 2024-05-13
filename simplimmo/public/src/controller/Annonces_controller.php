<?php

namespace Simplimmo\controller;

use Simplimmo\model\Annonces_model;

class Annonces_controller
{
    public function index()
    {
        $annoncesModel = new Annonces_model();
        $annonces = $annoncesModel->getAllAnnonces();
        
        include __DIR__ . '/../view/annonces.php';
    }
}
