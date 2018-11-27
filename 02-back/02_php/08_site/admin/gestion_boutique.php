<?php
require_once '../inc/init.inc.php';

//-----------------------------  TRAITEMENT -----------------------------
// 1 - On vérifie que le membre est administrateur :
if (!internauteEstConnecteEtAdmin()) {
    header('location:../connexion.php'); // je remonte dans le dossier parents pour accéder au fichier connexion.php
    exit(); // pour quitter le script
}

// 7 - Suppression d'un produit :
debugV($_GET);
if (isset($_GET['action']) && $_GET['action'] == 'suppression' && isset($_GET['id_produit'])) { // si il existe l'indice action dans "GET" et que sa valeur est"suppression" et que existe aussi l'indice "id_produit" alors je peux traiter la suppression du produit demandé.
    $resultat = executeRequete("DELETE FROM produit WHERE id_produit = :id_produit", array(':id_produit' => $_GET['id_produit']));
    if ($resultat->rowCount() == 1) { // si le delete retourne une ligne, c'est que l'id_produit "existe" et qu'il a pu être supprimé

        $contenu .= '<div class="alert alert-success>Le produit n°' . $_GET['id_produit'] . ' a bien étésupprimé </div>';

    } else { // sinon c'est que l'id_produit n'existe pas ou plus
        $contenu .= '<div class="alert alert-danger">Erreur de suppréssion du produit n° ' . $_GET['id_produit'] . ' </div>';
    }
}

// 6 - Affichage des produits dans une table HTML :
//Exercice afficher tout les produits sous forme de table HTML. Cette tables est stocker dans la variable $contenu. Tous les champs doivent être affichés. Pour la photo, vous affichez l'image (90px de largeur).
$resultat = $pdo->query("SELECT * FROM produit");

$contenu .= '<h3 style="color:purple;text-align:center;margin-top:4vh;">Nombre de produit(s) dans la boutique : ' . $resultat->rowCount() . '</h3>';
$contenu .= '<table class="table mt-4">';
$contenu .= '<tr>';
for ($i = 0; $i < $resultat->columnCount(); $i++) {

    $colonne = $resultat->getColumnMeta($i);
    //debugV($colonne); // on a le nom des champ à l'indice "name".
    $contenu .= '<th>' . $colonne['name'] . '</th>';

} // FIN for ($i = 0; $i < $resultat->columnCount(); $i++)
$contenu .= '<th>Action</th>'; // on ajoute cette colonne en plus des autres affichés dynamiquement.

$contenu .= '</tr>';
while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
    $contenu .= '<tr>';
    foreach ($ligne as $indice => $value) {

        if ($indice === 'photo' && !empty($value)) {

            $contenu .= '<td ><img style="width:90px;" alt="' . $ligne['titre'] . '" src="../' . $value . '"></td>';

        } else {

            $contenu .= '<td>' . $value . '</td>';
        }

    } // FIN foreach ($ligne as $information)

    $contenu .= '<td>
                    <a href="ajout_modif_produit?action=modification&id_produit=' . $ligne['id_produit'] . '"  >modifier</a><br>
                    <a href="?action=suppression&id_produit=' . $ligne['id_produit'] . '" onclick="return(confirm(\'Etes vous certain de vouloir supprimer ce produit ?\'))">supprimer</a>
                </td>';
    $contenu .= '</tr>';

} // FIN while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
$contenu .= '</table>';
//-----------------------------  AFFICHAGE -----------------------------
require_once '../inc/haut.inc.php';
// 1 - navigation :
?>

<h1 class="mt-4">Gestion boutique</h1>

<ul class="nav nav-tabs">
    <li><a href="gestion_boutique.php" class="nav-link active">Affichage des produits</a></li>
    <li><a href="ajout_modif_produit.php" class="nav-link ">Ajout d'un produit</a></li>
</ul>


<?php

echo $contenu; // pour afficher la table  HTML des produits.
require_once '../inc/bas.inc.php';