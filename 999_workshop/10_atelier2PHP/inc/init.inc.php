<?php
//connexion BDD :
$pdo = new PDO(
    'mysql:host=localhost;dbname=phoenix',
    'root',
    'root',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
    )
);

// démarage de session : 
 session_start();

// Constante qui contient le chemein du site :
 //define('RACINE_SITE', 'Applications/MAMP/htdocs/1_Formation/00_workshop/10_atelier2PHP/index.php/');

// Variables d'affichage :
 $contenu = '';


//Inclusion du fichier qui contient les fonctions du site :
 require_once 'fonction.inc.php';
