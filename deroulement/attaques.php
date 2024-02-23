<?php
require "deroulement/jeu.php";

// attaque MARIO J1
if (isset($_POST["attaque1j1"])) {
        perdreVie("joueur2", 1);
        } 
// spéciale MARIO J1
if (isset($_POST["speciale1j1"])) {
        perdreVie("joueur2", 2);
        }


// attaque LUIGI J1
if (isset($_POST["attaque2j1"])) {
        perdreVie("joueur2", 2);
    }

// spéciale LUIGI J1        
if (isset($_POST["speciale2j1"])) {
         perdreVie("joueur2", 4);
        }      

// attaque PEACH J1
if (isset($_POST["attaque3j1"])) {
        perdreVie("joueur2", 1);
    }

// spéciale PEACH J1        
if (isset($_POST["speciale3j1"])) {
         gagnerVie("joueur1", 1);
        }      

// attaque KAMEK J1
if (isset($_POST["attaque4j1"])) {
        perdreVie("joueur2", 1);
    }

// spéciale KAMEK J1        
if (isset($_POST["speciale4j1"])) {
         gagnerVie("joueur2", 2);
        }        

// attaque MARIO J2
if (isset($_POST["attaque1J2"])) {
        perdreVie("joueur1", 1);
        } 
// spéciale MARIO J2
if (isset($_POST["speciale1J2"])) {
        perdreVie("joueur1", 2);
        }
// attaque LUIGI J2
if (isset($_POST["attaque2J2"])) {
        perdreVie("joueur1", 2);
    }

// spéciale LUIGI J2        
if (isset($_POST["speciale2J2"])) {
         perdreVie("joueur1", 4);
        }      

// attaque PEACH J2
if (isset($_POST["attaque3J2"])) {
        perdreVie("joueur1", 1);
    }

// spéciale PEACH J2        
if (isset($_POST["speciale3J2"])) {
         gagnerVie("joueur2", 1);
        }      

// attaque KAMEK J2
if (isset($_POST["attaque4j2"])) {
        perdreVie("joueur2", 1);
    }

// spéciale KAMEK J2        
if (isset($_POST["speciale4j2"])) {
         gagnerVie("joueur2", 2);
        }          
        
?>