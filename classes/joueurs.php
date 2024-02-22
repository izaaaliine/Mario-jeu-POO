<?php

class Joueurs{
     // ATTRIBUTS
    public $nom;
    public $vies;
    // CONSTRUCTEURS
    public function __construct($nom, $vies) {
        $this->nom = $nom;
        $this->vies = $vies;
        }

    // GETTERS
    public function getNom() {
        return $this->nom;
    }
    public function getVies() {
        return $this->vies;
    }
    // SETTERS
    public function setNom($setNom) {
        return $this->nom = $setNom;
    }
    public function setVies($setVies) {
        return $this->vies = $setVies;
    }
    // METHOD

}



?>