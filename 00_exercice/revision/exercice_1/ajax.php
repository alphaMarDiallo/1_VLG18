<?php
//1 se connecter à la BDD entreprise_pole_s
require_once 'connexion.php';
//2 récupérer la data transmise par js
extract($_POST);
//3 effectuer une requête
$resultat = $pdo->prepare("INSERT INTO employes (prenom, nom, service, sexe, date_embauche, salaire) VALUES (:prenom, :nom, :service, :sexe, CURDATE(), :salaire)");
//si l'indice date est au format DATETIME utiliser NOW()

$resultat->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$resultat->bindParam(':nom', $nom, PDO::PARAM_STR);
$resultat->bindParam(':service', $service, PDO::PARAM_STR);
$resultat->bindParam(':sexe', $sexe, PDO::PARAM_STR);
$resultat->bindParam(':salaire', $salaire, PDO::PARAM_INT);

if ($resultat->execute()) {
    //Si la, requête retourne TRUE : tout va bien
    $reponse['validation'] = "OK";
} else {
    $reponse['validation'] = "ERREUR";
}

//4 retourner une réponse
echo json_encode($reponse);