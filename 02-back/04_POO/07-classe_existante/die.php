<?php
function recherche($tab, $element)
{
    if (!is_array($tab)) {
        die('Vous devez envoyer un Array !'); // die() permet d'arrêter les traitements
    }
    $position = array_search($element, $tab);
    return $position;
}
//-----------------------------
$liste = array('orange', 'fraise', 'pomme');

echo recherche($liste, 'fraise') . '<br>'; //affiche 1(ci la position de 'fraise' dans mon tableau $liste).

echo recherche('tableau', 'fraise') . '<br>';
// echo 'Traitement php...';
