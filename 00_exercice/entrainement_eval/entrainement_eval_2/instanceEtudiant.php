<?php 
include 'Etudiant.php';

$etudiant1 = new Etudiant;

$etudiant1 -> setPrenom('alpha');
$etudiant1 -> setNom('diallo');
$etudiant1 -> setEmail('alpha.diallo@lepoles.com');
$etudiant1 -> setTelephone('0601927235');

// echo '<pre>';
// var_dump($etudiant1);
// echo '</pre>';

$eleve = $etudiant1 -> getInfos();

// echo '<pre>';
// var_dump($eleve1);
// echo '</pre>';

// echo $eleve['prenom'] ;
echo '<h1>Liste des élèves : </h1>';
echo '<ul>';
    echo '<li> Prenom : '.$eleve['prenom'].'</li>';
    echo '<li> Nom : '.$eleve['nom'].'</li>';
    echo '<li> Email : '.$eleve['email'].'</li>';
    echo '<li> Telephone : '.$eleve['telephone'].'</li>';
echo '</ul>';
echo '<hr>';

//------

$etudiant2 = new Etudiant;

$etudiant2->setPrenom('Sabuj');
$etudiant2->setNom('Barua');
$etudiant2->setEmail('sabuj.barua@lepoles.com');
$etudiant2->setTelephone('0601922753');

$eleve2 = $etudiant2 -> getInfos();

echo '<ul>';
    echo '<li> Prenom : '.$eleve2['prenom'].'</li>';
    echo '<li> Nom : '.$eleve2['nom'].'</li>';
    echo '<li> Email : '.$eleve2['email'].'</li>';
    echo '<li> Telephone : '.$eleve2['telephone'].'</li>';
echo '</ul>';
echo '<hr>';

//----
$etudiant3 = new Etudiant;

$etudiant3->setPrenom('Layla');
$etudiant3->setNom('Lahcene');
$etudiant3->setEmail('layla.lahcene@lepoles.com');
$etudiant3->setTelephone('0702922753');

$eleve3 = $etudiant3->getInfos();

echo '<ul>';
    echo '<li> Prenom : ' . $eleve3['prenom'] . '</li>';
    echo '<li> Nom : ' . $eleve3['nom'] . '</li>';
    echo '<li> Email : ' . $eleve3['email'] . '</li>';
    echo '<li> Telephone : ' . $eleve3['telephone'] . '</li>';
echo '</ul>';
