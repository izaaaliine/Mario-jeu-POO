<?php

class Personnages{
    // ATTRIBUTS
    public $nom;
    public $image;
    // CONSTRUCTEURS
    public function __construct($nom, $image) {
        $this->nom = $nom;
        $this->image = $image;
        }
    // GETTERS
    public function getNom() {
        return $this->nom;
    }
    public function getImage() {
        return $this->image;
    }
    // SETTERS
    public function setNom($setNom) {
        $this->nom = $setNom;
    }
    public function setImage($setImage) {
        $this->image = $setImage;
    }
    // METHOD
}

class Mario extends Personnages {
    // Méthode 
    public function attaqueText() {
        return "L'Attaque permet de d'enlever une vie à l'adversaire";
    }
    // public function attaque($adversaire) {
    // $adversaire->setVies($adversaire->getVies() - 1);
    // return $adversaire->getVies();
    // }
    public function attaqueSpecialeText() {
        return "La Spéciale permet de doubler l'attaque en enlevant 2 vies à l'adversaire (Utilisable 1 seule fois)";
    }
    // public function attaqueSpeciale($adversaire) {
    // $adversaire->setVies($adversaire->getVies() - 2);
    // return $adversaire->getVies();
    // }
}


class Luigi extends Personnages {
    // Méthode 
    public function attaqueText() {
        return "L'Attaque permet de d'enlever 2 vies à l'adversaire (Utilisable 1 seule fois)";
    }
    // public function attaque($adversaire) {
    //     $adversaire->setVies($adversaire->getVies() - 2);
    // }
    public function attaqueSpecialeText() {
        return "La Spéciale permet de doubler l'attaque en enlevant 4 vies à l'adversaire (Utilisable 1 seule fois)";
    }
  
}



class Peach extends Personnages {
    // Méthode 
    public function attaqueText() {
        return "L'Attaque permet de d'enlever une vie à l'adversaire";
    }
    public function attaqueSpecialeText() {
        return "La Spéciale permet de donner une vie à son joueur (Utilisable 1 seule fois)";
    }
    // public function attaqueSpeciale($moi) {
    //     $moi->setVies($moi->getVies() + 1);
    // }
}


class Kamek extends Personnages {
    // Méthode 
    public function attaqueText() {
        return "L'Attaque permet de d'enlever une vie à l'adversaire";
    }
    // public function attaque($adversaire) {
    //     $adversaire->setVies($adversaire->getVies() - 1);
    // }
    public function attaqueSpecialeText() {
        return "La Spéciale permet de doubler l'attaque en enlevant 2 vies à l'adversaire (Utilisable 1 seule fois)";
    }
    // public function attaqueSpeciale($moi) {
    //     $moi->setVies($moi->getVies() - 2);
    // }
}



?>