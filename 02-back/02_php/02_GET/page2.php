<?php
//-------------------------
// La superglobale $_GET 
//-------------------------

// $_GET représente l'url, il s'agit d'une superglobal et comme toutes les superglobales c'est un array. Superglobale signifie que ce tableau est disponible dans tous les contextes du script, y compris dans l'espace local des fonction.

// Dans notre exemple, les informations transitent dans l'url de la manière suivante : ?article=jean&couleur=blanc&prix=30.
//la syntaxe de l'url est donc : page.php?indice1=valeur1&indiceN=valeurN. 

//la superglobale $_GET transforme les information passées dans l'url en cet array : $_GET = array('indice1' => 'valeur1', 'indiceN'=> 'valeurN');
echo '<pre>';
var_dump($_GET);
echo '</pre>';

if (isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // si existe les indices "article" et "couleur" et "prix" alors on peut afficher leur valeur :
    echo '<h1> Détail du produit</h1>';
    echo '<p> Article ' . $_GET['article'] . '</p>';
    echo '<p> Couleur ' . $_GET['couleur'] . '</p>';
    echo '<p> Prix ' . $_GET['prix'] . ' €' . '</p>';

} else { // sinon on met un message à l'internaute :
    echo '<p> Ce produit n\'existe pas</p>';
}

