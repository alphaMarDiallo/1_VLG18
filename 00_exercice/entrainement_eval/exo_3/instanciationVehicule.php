<?php 

include 'classVoiture.php';


$voiture1 = new Vehicule();

echo '<pre>';
var_dump($voiture1);
echo '</pre>';
echo '<hr>';

$v1 = $voiture1 -> getInfo();


// $voiture1 -> setMarque('Aston Martin');
// $voiture1 -> setModele('DB5');
// $voiture1 -> setAnnee('1960');
// $voiture1 -> setCouleur('Bleu');
// $voiture1 -> setKm('4456');

// echo $voiture1 -> getMarque().'<br>';
// echo $voiture1 -> getModele().'<br>';
// echo $voiture1 -> getAnnee().'<br>';
// echo $voiture1 -> getCouleur().'<br>';
// echo $voiture1 -> getKm().'<br>';