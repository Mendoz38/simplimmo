<?php

namespace Simplimmo;

class Maison extends BienImmobilier
{

    public function __construct(
        $surface,
        $prix,
        $localisation,
        $nbr_piece,
        private $terrain,
        private $piscinable,
        private $etage,
    ) {
        parent::__construct(
            $surface,
            $prix,
            $localisation,
            $nbr_piece,
        );
    }

    public function modifierPrix()
    {
        $nouveauPrix = $this->prix * 2;
    }
}
