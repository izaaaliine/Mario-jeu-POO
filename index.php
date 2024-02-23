<?php

require_once "classes/joueurs.php";
require_once "classes/personnages.php";
require "deroulement/attaques.php";
// require "deroulement/tourAtour.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['recommencer'])) {
    // Détruire la session
    session_destroy();

  session_start();
 

}

if (!isset($_SESSION['joueur1'])) {
    $_SESSION['joueur1'] = new Joueurs("Joueur 1", 10);
}

if (!isset($_SESSION['joueur2'])) {
    $_SESSION['joueur2'] = new Joueurs("Joueur 2", 10);
}

// if ($_SERVER["REQUEST_METHOD"] != "POST") {
//     $_SESSION['joueur1']['vies'] = 10;
//     $_SESSION['joueur2']['vies'] = 10;
// }


$mario1 = new Mario("mario1", "img/mario.png");
$mario2 = new Mario("mario2", "img/mario.png");
$luigi1 = new Luigi("luigi1", "img/luigi.png");
$luigi2 = new Luigi("luigi2", "img/luigi.png");
$peach1 = new Peach("peach1", "img/peach.webp");
$peach2 = new Peach("peach2", "img/peach.webp");
$kamek1 = new Kamek("kamek1", "img/kamek.png");
$kamek2 = new Kamek("kamek2", "img/kamek.png");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeu Mario POO</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <div class="j1">
    <h2>
      <?php echo $_SESSION['joueur1']->getNom(); ?>
    </h2>
    <p><?php echo $_SESSION['joueur1']->getVies(); ?></p>
    <!-- mario J1 -->
    <div id="cardJ1">
        <img src="<?php echo $mario1->getImage()?>" 
        class="imgJ1" >
        <form method="post" id="form" action="">
            <input type="submit" class="btnAttaque1J1" name="attaque1j1" value="Attaque" >
            <input type="submit" class="btnSpeciale1J1" name="speciale1j1" value="Spéciale">
        </form>   
    </div>
    <!-- Luigi J1 -->
    <div id="cardJ1">
        <img src="<?php echo $luigi1->getImage()?>" class="imgJ1" >
        <form method="post" action="">
          <input type="submit" class="btnAttaque2J1" name="attaque2j1" value="Attaque" >
          <input type="submit" class="btnSpeciale2J1" name="speciale2j1" value="Spéciale">
        </form>
   
    </div>
    <!-- Peach J1 -->
    <div id="cardJ1">
        <img src="<?php echo $peach1->getImage()?>" class="imgJ1" >
        <form method="post" action="">
          <input type="submit" class="btnAttaque3J1" name="attaque3j1" value="Attaque" >
          <input type="submit" class="btnSpeciale3J1" name="speciale3j1" value="Spéciale">
      </form>
      
    </div>
    <!-- Kamek J1 -->
    <div id="cardJ1">
        <img src="<?php echo $kamek1->getImage()?>" class="imgJ1" >
        <form method="post" action="">
          <input type="submit" class="btnAttaque4J1" name="attaque4j1" value="Attaque">
          <input type="submit" class="btnSpeciale4J1" name="speciale4j1" value="Spéciale">
      </form>
    </div>
  </div>
  <div class="j2">
    <h2>
        <?php echo $_SESSION['joueur2']->getNom(); ?>
    </h2>
    <p><?php echo $_SESSION['joueur2']->getVies(); ?></p>
    <!-- Mario J2 -->
    <div id="cardJ2">
        <img src="<?php echo $mario2->getImage()?>" class="imgJ2" >
        <form method="post" action="">
          <input type="submit" class="btnAttaque1J2" name="attaque1J2" value="Attaque">
          <input type="submit" class="btnSpeciale1J2" name="speciale1J2" value="Spéciale">
        </form>
    </div>
    <!-- Luigi J2 -->
    <div id="cardJ2">
        <img src="<?php echo $luigi2->getImage()?>" class="imgJ2" >
        <form method="post" action="">
          <input type="submit" class="btnAttaque2J2" name="attaque2J2" value="Attaque">
          <input type="submit" class="btnSpeciale2J2" name="speciale2J2" value="Spéciale">
      </form>
    </div>
    <!-- Peach J2 -->
    <div id="cardJ2">
        <img src="<?php echo $peach2->getImage()?>" class="imgJ2" >
        <form method="post" action="">
          <input type="submit" class="btnAttaque3J2" name="attaque3J2" value="Attaque">
          <input type="submit" class="btnSpeciale3J2" name="speciale3J2" value="Spéciale">
      </form>
    </div>
    <!-- Kamek J2 -->
    <div id="cardJ2">
        <img src="<?php echo $kamek2->getImage()?>" class="imgJ2" >
        <form method="post" action="">
          <input type="submit" class="btnAttaque4J2" name="attaque4j2" value="Attaque">
          <input type="submit" class="btnSpeciale4J2" name="speciale4j2" value="Spéciale">
      </form>
    </div>
  </div>
    <form method="post" id="form" action="">
            <input type="submit" class="recommencer" name="recommencer" value="Recommencer">
    </form> 
  <script src="scripts/script.js"></script>
  
</body>
</html>