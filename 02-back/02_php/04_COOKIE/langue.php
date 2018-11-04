<?php
//--------------------------
// La superglobale $_COOKIE
//--------------------------

/* 
Un cookie est un petit fichier (4 Ko max) déposé par le server du site sur le poste de l'internaute, et qui peut contenir des informations. Les cookies sont automatiquement renvoyés au serveur web par le navigateur lorsque l'internaute navigue dans les pages concernées pae le cookies. PHP permet de récupérer trèsfacilement les données contenues dans un cookie : elle sont stickées dans la superglobale $_COOKIE. 

Précution à prendre avec les cookies : 
Le cookie étant sauvegardé sur le poste de l'internaute, il peut être volé ou détourné. On n'y mettra donc pas d'information sensibles (mot de passe, carte bancaire,...), mais des informations relatives aux préférences ou aux traces de visite (produits consultées...).
 */



print_r($_GET) . '<br>';

//2-On détermine la langue à afficher dans la variable $langue : 
if (isset($_GET['langue'])) {
    $langue = $_GET['langue']; // si existe l'indice "langue", c'est que l'on a cliqué sur un lien. On affecte donc sa valeur à la variable $langue. 
} elseif (isset($_COOKIE['langue'])) {
    $langue = $_COOKIE['langue']; // $_COOKIE est une superglobale, son indice correspond au nom du cookie reçu. Si $_COOKIE['langue'] existe, c'est que l'on a reçu un cookie de nom "langue". On affecte donc sa valeur à la variable $langue.

    // Il n'existe pas de fonction prédéfinit pour supprimer un cookie, dans ce cas on le met à jour avec une date périmé ou à 0 ou encore en ne mettant que le nom du cookie dans les parenthèses de setcookie().
} else {
    $langue = 'fr'; // Par defaut si l'on a pas cliqué sur un lien et si le cookie langue n'existe pas, on choisit "fr". 
}

//3- Création du cookie : 
$un_an = 365 * 24 * 60 * 60; // exprime un an en secondes
setcookie('langue', $langue, time() + $un_an);// On envoie un cookie chez l'internaute avec un mon ('langue'), une valeur ('$langue'), une date d'expiration exprimé en timestamp (maintenant + 1 an ). 

//stcookie doit se faire avant envoie de tout affichage

//4- Affichage de la langue : 

echo 'le site est affiché en : ' . $langue . '<br>';


// 1- HTML :
?>
<h1>Votre langue :</h1>
<ul>
   <li><a href="?langue=fr">français</a></li>
   <li><a href="?langue=es">espagnol</a></li>
   <li><a href="?langue=it">italien</a></li>
   <li><a href="?langue=en">anglais</a></li>
</ul>