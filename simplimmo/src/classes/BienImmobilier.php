<?php
namespace Simplimmo;

use Simplimmo\model\DBConfig;


class BienImmobilier {
    protected $surface;
    protected $prix ;
    protected $localisation ;
    protected $nbr_piece ;
    protected $fraisnotaire = 8 ;

    public function __construct($surface, $prix, $localisation, $nbr_piece)
    {
        $this->surface = $surface;
        $this->prix = $prix;
        $this->localisation = $localisation;
        $this->nbr_piece = $nbr_piece;
    }


    public function getSurface(){
        return $this->surface;
    }

    public function getPrix(){
        return $this->prix;
    }
    
    public function getPrixFNI(){
        $prixFNI = $this->prix + ($this->prix * $this->fraisnotaire / 100) ;
        return $prixFNI;
    }

    public function setFraisDeNotaire($fraisnotaire){
        $this->fraisnotaire = $fraisnotaire;
    }


    public function create(){
        $db = new DBConfig();
        $db->getConnection();
    }

}

?>