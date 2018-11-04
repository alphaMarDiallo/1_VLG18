<?php
//---------------------------    
// La superglobale $_SESSION
//---------------------------

/* 
Un fichier temporaire appelé session est créé sur le serveur avec un ID unique. Cette session est lié à un seul internaute car dans le même temps un cookie est déposé sur son poste avec l'identifiant à l'intérieur (au nom PHOSESSID). Ce cookie se détruit lorsqu'on quitte le navigateur.

Le fivhier de session peut contenir toutes sortes d'information y compris sensible car il n'est pas accessible ni modifiable par l'internaute. On peut donc y mettre des login, mdp, panier d'acchat avant paiement...

Si l'internaute tente de modifier ce cookie, le lien avec la session est rompu automatiquement et donc l'internaute est déconnecté.

Les données du fichier session son accessible et manipulable à partir de la superglobale $_SESSION.
 */

//1- Ouverture ou création d'une session : 

session_start(); // permet de créer une session si elle n'existe pas ou de l'ouvrir si elle existe déjà. (on a reçu un cookie avec l'ID  de session à l'interieur)

// Remplissage de la session : 
$_SESSION['pseudo'] = 'Tintin';
$_SESSION['mdp'] = 'milou'; //$_SESSION étant un array, on utilise la syntaxe avec []

echo '<br> 1- La session après remplissage : <br>';
echo '<pre>';
print_r($_SESSION) . ' <br>';
echo '</pre>';
// Pour visualiser le fichier de session : xamp > tmp

// Vider une partie de la session :
unset($_SESSION['mdp']); // Supprime l'ince "mdp" et la valeur correspondante

echo '<br> 2- La session après suppression du mdp : <br>';
echo '<pre>';
print_r($_SESSION) . ' <br>';
echo '</pre>';

// Supprimer entierement une session : 
//session_destroy();
// On demande la suppression de la session mais il faut savoir que le session destroy est d'abord lu puis exécuté seulement à la fin du script.
echo '<br> 2- La session après session_destroy() : <br>';
echo '<pre>';
print_r($_SESSION) . ' <br>';// On voit encore notre session car la fin du scipt se situ après ces lignes. Cependant si on rgarde dans le dossier tmp, la session est bien supprimée (à la fin du script).
echo '</pre>';
