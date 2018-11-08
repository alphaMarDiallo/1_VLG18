<?php
session_start();

// if (isset($_GET['action']) && $_GET['action'] == 'create' || isset($_SESSION['panier'])) { //si le panier existe ou qu'il est en cours de création

//     $_SESSION['panier'] = array(26, 30, 54);
//     echo 'Produits présent dans le panier : ' . implode($_SESSION['panier'], '-') . '<br>';
//     echo '<a href="?action=vider">Vider le panier</a>';
// } else { // sinon , le panier n'existe pas
//     echo '<a href="?action=create">Créer le panier</a>';
// }

//----------------------------------
if (isset($_GET['action']) && $_GET['action'] == 'valider') {

    unset($_SESSION['panier']);
}
if (isset($_GET['action']) && $_GET['action'] == 'create' || isset($_SESSION['panier'])) { //si le panier existe ou qu'il est en cours de création

    $_SESSION['panier'] = array(26, 30, 54);
    echo 'Produits présent dans le panier : ' . implode($_SESSION['panier'], '-') . '<br>';
    echo '<a href="?action=vider">Vider le panier</a>';
} else { // sinon , le panier n'existe pas
    echo '<a href="?action=create">Créer le panier</a>';
}