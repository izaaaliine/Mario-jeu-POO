<?php
// fonction pour perdre les vies
function perdreVie($joueur, $points) {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start(); // Démarrer la session si elle n'est pas déjà active
    }

    if (isset($_SESSION[$joueur])) {
        $vies = $_SESSION[$joueur]->getVies();
        
        $vies -= $points;
        
   
        $_SESSION[$joueur]->setVies(max(0, $vies));
        
        $vies = $_SESSION[$joueur]->getVies();
    } 
}

// fonction pour gagner vies
function gagnerVie($joueur, $points) {
    if (isset($_SESSION[$joueur]['vies'])) {
        $_SESSION[$joueur]['vies'] += $points;
    }
}
?>