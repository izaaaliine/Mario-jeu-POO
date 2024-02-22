<?php
// fonction pour perdre les vies
function perdreVie($joueur, $points) {
    if (isset($_SESSION[$joueur]['vies'])) {
        $_SESSION[$joueur]['vies'] -= $points;
        if ($_SESSION[$joueur]['vies'] < 0) {
            $_SESSION[$joueur]['vies'] = 0;
        }
    }
}
// fonction pour gagner vies
function gagnerVie($joueur, $points) {
    if (isset($_SESSION[$joueur]['vies'])) {
        $_SESSION[$joueur]['vies'] += $points;
    }
}
?>