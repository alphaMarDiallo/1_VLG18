<?php
require_once 'inc/init.inc.php';
//-------------------  II DECONNEXION DE L'INTERNAUTE -------------------

if (isset($_GET['action']) && $_GET['action'] === 'deconnexion') { // si on recoit en GET dans l'url l'indice "action" et la valeur "deconnexion", c'est que le membre veurt se décinnecter.
    unset($_SESSION['membre']); // on suprime les informations du membre dans la session
    $contenu .= '<div class="alert alert-info"> Vous avez été déconnecté</div>';

}

//------------ III L'INTERNAUTE EST REDIRIGE VERS SON PROFIL ------------
if (internauteEstConnecte()) {
    header('location:profil.php');
    exit();
}

//---------------------------- I TRAITEMENT------------------------------
debugV($_POST);
if ($_POST) {
    //a-> verifier les champs :
    if (empty($_POST['pseudo'])) { // empty vérifie si c'est vide (0, NULL,'', false ou non defini)
        $contenu .= '<div class="alert alert-danger"> Le pseudo est requis</div>';
    }

    if (empty($_POST['mdp'])) { // empty vérifie si c'est vide (0, NULL,'', false ou non defini)
        $contenu .= '<div class="alert alert-danger"> Le mot de passe est requis</div>';
    }

    //b-> requete SQL :
    if (empty($contenu)) { // si contenu est vide c'est qu'il n'y a pas d'erreur sur le formulaire. On peut donc interroger la BDD
        $resultat = executeRequete("SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp", array(':pseudo' => $_POST['pseudo'], ':mdp' => $_POST['mdp']));
        if ($resultat->rowCount() > 0) { // si il y a une ou plusieurs lignes dans $resultat, le pseudo et le mdp existe pour le même membre.
            $membre = $resultat->fetch(PDO::FETCH_ASSOC); //pas de while car il n'y a qu'une seule ligne de résultat dans la requête (les pseudo sont uniques)

            $_SESSION['membre'] = $membre; // Nous créons une session appelée membre, qui contient les information provenant de la BDD.

            header('location: profil.php'); // on redirige (redirection, l'internaute vers la page situé à l'url profil.php)
            exit(); // et on quitte le script

        } else {
            // sinon il n'y a pas de correspondance entre le login et le mdp pour le même membre
            $contenu .= '<div class="alert alert-danger">Erreur sur les identifiants. </div>';

        } // FINif (empty($contenu)

    } // FIN  if(empty($contenu)

} // FIN if($_POST)

//----------------------------- I AFFICHAGE-------------------------------
require_once 'inc/haut.inc.php';
?>
<h1 class="mt-4">Connexion</h1>
<p>Veuillez indiquer vos identifiant pour vous connecter</p>

<?php echo $contenu; ?>

<form method="POST" action="">

    <label for="pseudo">Pseudo</label><br>
    <input type="text" id= "pseudo" name="pseudo"><br><br>

    <label for="mdp">Mot de passe</label><br>
    <input type="password" id= "mdp" name="mdp"><br><br>

    <input type="submit" value="Se connecter" class="btn bg-primary" style="color:#fff;">


</form>



<?php
require_once 'inc/bas.inc.php';