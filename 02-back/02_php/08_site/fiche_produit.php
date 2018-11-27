<?php
require_once 'inc/init.inc.php';
//----------------------------- TRAITEMENT -----------------------------
// variable d'affichage :
$panier = '';
$suggestion = '';

// I - Contrôle de l'existance du produit demandé (un produit en favori à pu être supprimé de la BDD...) :
if (isset($_GET['id_produit'])) {
    // si un produit a été sélectionné :
    $resultat = executeRequete("SELECT * FROM produit WHERE id_produit = :id_produit", array(':id_produit' => $_GET['id_produit']));

    if ($resultat->rowCount() == 0) {
        // s'il n'y a pas de ligne dans $resultat, c'est que le produit n'existe pas
        header('location:boutique.php'); // on redirige vers la boutique
        exit();
    }
//II- Affichage des infos du produit :
    $produit = $resultat->fetch(PDO::FETCH_ASSOC); // on ne fait pas de boucle WHILE ici car on est certain de n'avoir qu'un produit par id_produit

    extract($produit); // extract() créer autant de variables qu'il y a d'indices dans l'array $produit. Celle-ci ont pour nom le nom de l'indice et pour valeur la valeur associée à cet indice.

// III- Affichage du formulaire d'ajout au panier si le stoxk est positif :
    if ($stock > 0) {
        // si le stock existe on  ajoute le bouton panier :
        $panier .= '<form method="POST" action="panier.php">';

        $panier .= '<input type="hidden" name="id_produit" value="' . $id_produit . '">'; // pour donner l'id du produit sélectionner au panier

        //Sélecteur de quantité de produit :
        $panier .= '<select name="quantite" class="custom-select col-sm-2">';
        for ($i = 1; $i <= $stock && $i <= 5; $i++) {

            $panier .= '<option>' . $i . '</option>';
        }
        $panier .= '</select>';

        $panier .= '<input type="submit" name="ajout_panier" value=" ajouter au panier" class="btn btn-success col-sm-8 ml-2">';

        $panier .= '</form>';
        $panier .= '<p>Nombre de produit(s) disponible(s) : ' . $stock . '</p>';

    } else {
        // si le stock est nul voir négatif on met le message suivant :
        $panier .= '<p>Produit en rupture de stock !</p>';
    }

} else {
    // sinon l'indice "id_produit" n'existe pas dans l'url, ce qui signifie que l'on a accédé à la page directement sans choisir de produit : on redirige donc vers la boutique.
    header('location:boutique.php');
    exit();
}

// -------------
// Exercice :
// Créer des suggestion des produits : afficher 2 produits (photo et titre) aléatoirement appartenent à la même catégorie que le produit affiché et differents du produit affiché. Vous utilisez la variable $suggestion pour afficher le contenu. La photo est cliquable et mène donc à la fiche du produit.

$resultat = executeRequete("SELECT photo, titre, id_produit FROM produit WHERE categorie = :categorie AND id_produit != :id_produit ORDER BY RAND() LIMIT 2 ", array(
    ':categorie' => $produit['categorie'],
    ':id_produit' => $produit['id_produit'],
));
while ($rand = $resultat->fetch(PDO::FETCH_ASSOC)) {

    $suggestion .= '<div class="col-md-3">';
    $suggestion .= '<a href="fiche_produit.php?id_produit=' . $rand['id_produit'] . '"><img  class="img-fluid" style="width:90px;"src="' . $rand['photo'] . '" alt="' . $rand['titre'] . '"></a>';
    $suggestion .= '</div>';
}
/*
CORRECTION

$resultat = executeRequete("SELECT * FROM produit WHERE categorie = '$categorie' AND id_peoduit <> is_produit ORDER BY RAND() LIMIT 2")

while($produit_sggestion =$resultat->fetch(PDO::FETCH_ASSOC)){
$suggestion .= '<div class="col-sm-3">
$suggestion .= '<a href="fiche_produit.php?id_produit='.$produit_sggestion  ['id_produit'].'><img src="'.$produit_sggestion['photo'] .'   alt="'.$produit_sggestion['titre'].' class="img-fluid"></a>';
$suggestion .= '</div">
}

 */

//----------------------------- AFFICHAGE -----------------------------
require_once 'inc/haut.inc.php';
?>
<div class="row">

    <div class="col-12">
        <h1><?php echo $titre; ?></h1>
    </div>

    <div class="col-md-8">
        <img src="<?php echo $photo; ?>" class="img-fluid" alt="<?php echo $titre; ?>">
    </div>

    <div class="col-md-4">
        <h3>Description</h3>
        <p><?php echo $description; ?></p>

        <h3>Détails</h3>
        <ul>
            <li>Catégorie :<?php echo $categorie ?></li>
            <li>Couleur :<?php echo $couleur ?></li>
            <li>Taille :<?php echo $taille ?></li>
        </ul>

        <h4>Prix : <?php echo number_format($prix, 2, ',', ''); ?></h4>

        <?php echo $panier; ?>

        <p>
            <a href="boutique.php?categorie=<?php echo $categorie; ?>">Retour vers la catégorie '<?php echo $categorie; ?>'</a>
        </p>
    </div>
</div><!-- .row -->

<!-- Suggestions de produits -->

<hr>
<div class="row">
    <div class="col-12">
        <h3>Suggestions de produit</h3>
    </div>

    <?php echo $suggestion; ?>

</div><!-- .row -->


















<?php
require_once 'inc/bas.inc.php';