<?php
// fonction pour perdre les vies
function perdreVie($joueur, $points) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION[$joueur])) {
        $vies = $_SESSION[$joueur]->getVies();
        $vies -= $points;
        $_SESSION[$joueur]->setVies(max(0, $vies));

        if ($_SESSION['joueur1']->getVies() == 0) {
            echo "Joueur 1 a perdu !";
        }
        if ($_SESSION['joueur2']->getVies() == 0) {
            echo "Joueur 2 a perdu !";
        }
    } 
}


// fonction pour gagner vies
function gagnerVie($joueur, $points) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION[$joueur])) {
        $_SESSION[$joueur]->setVies($_SESSION[$joueur]->getVies() + $points);
    }
}


?>