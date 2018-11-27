<?php
require_once 'inc/init.inc.php';
//--------------------------- II TRAITEMENT ---------------------------
// 2 - si membre NON connecté, alors on le redirige vers la page  de connexion : il n'a pas le droit d'accéder à son profil.
if (!internauteEstConnecte()) {
    header('location:connexion.php');
    exist();
}

//------------- 1 - Préparation des variables d'affichage -------------
extract($_SESSION['membre']); // extrait tous les indices pour en faire des variables qui recoivent la valeur correspondante
//debugV($_SESSION);

//----------------------------- I AFFICHAGE -----------------------------

require_once 'inc/haut.inc.php';
?>
<h1>Profil</h1>
<h2>Bonjour<strong><?php echo $prenom; ?> ! </strong></h2>

<?php
if (internauteEstConnecteEtAdmin()) {
    echo '<p>Vous êtes un administrateur</p>';
}

?>
<hr>
<h3>Voici vos information de profil :</h3>
<p>Votre email : <?php echo $email; ?></p>
<p>Votre adresse : <?php echo $adresse; ?></p>
<p>Votre ville : <?php echo $ville; ?></p>





<?php
require_once 'inc/bas.inc.php';
