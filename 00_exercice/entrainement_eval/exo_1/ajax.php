<?php
require_once 'connexion.php';

//Traitement de mon formulaire :
extract($_POST);

$resultat = $pdo->prepare("INSERT INTO employes (prenom, nom, sexe, service, salaire, date_embauche) VALUES (:prenom, :nom, :sexe, :service, :salaire, CURDATE())");

$resultat->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$resultat->bindParam(':nom', $nom, PDO::PARAM_STR);
$resultat->bindParam(':sexe', $sexe, PDO::PARAM_STR);
$resultat->bindParam(':service', $service, PDO::PARAM_STR);
$resultat->bindParam(':salaire', $salaire, PDO::PARAM_INT);

if($resultat->execute()){
    $retour['validation'] = "OK";
}else {
    $retour['validation'] = "ERREUR";
}

echo json_encode($retour);