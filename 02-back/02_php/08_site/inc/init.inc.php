<?php
// fichier de configuration du site.

//connexion à la BDD :
$pdo = new PDO(
    'mysql:host=localhost;dbname=site_commerce',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
    )
);

// Session :
session_start();

// Constante qui contient le chemein du site :
define('RACINE_SITE', '/1_Formation/03_webforce3/02-back/php/08_site/'); // indiquer le dossier dans lequel se situe le site sans "localhost": permet de créer des chememin absolus utilisés notamment dans le header du site inclus dans différents sous-dossiers. Par conséquent les chemins relatifs vers les sources changent selon le sous-dossier, ce qui n'est pas le cas en chemin absolu. 

// Variables d'affichage :
$contenu = '';
$contenu_gauche = '';
$contenu_droite = '';

//Inclusion du fichier qui contient les fonctions du site :

require_once 'fonctions.inc.php';
