<?php

if ($_SESSION['joueur1']['vies'] <= 0) {
    echo "Le Joueur 1 a perdu !";
}

if ($_SESSION['joueur2']['vies'] <= 0) {
    echo "Le Joueur 2 a perdu !";
}

?>