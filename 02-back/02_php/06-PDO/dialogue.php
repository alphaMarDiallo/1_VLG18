<style>
    h3 {color: purple;}
</style>
<?php
//--------------------------------------------------------
echo '<h3>  Cas pratique : un formulaire pour poster des commentaires </h3>';
//--------------------------------------------------------

// Objectif : sécuriser le formulaire.

/* Modélisation de la BDD : 
    - BDD : dialogue
    - Table : commentaire
        => Champs : id_commentaire            INT(3) PK AI
                    pseudo                    VARCHAR(20)
                    message                   TEXT
                    date_enregistrement       DATETIME
 */
//------------------------------------------------------------
// 2 - Connexion à la BDD et traitement de $_POST
//------------------------------------------------------------
$pdo = new PDO(
    'mysql:host=localhost;dbname=dialogue',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
    )
);
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

if (!empty($_POST)) {
    // c - Traitement contre les failles Javascript ou CSS : on parle déchapper les données ou déchapement:
    $_POST['pseudo'] = htmlspecialchars($_POST['pseudo'], ENT_QUOTES);
    $_POST['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES); // Convertit les caractères spéciaux(<,>,&,'',"") en entités HTML inoffensives (par exemple le > devient &gt;). Ainsi les balises <style> ou <script>saisie dans le formulaire deviennent inopérantes.


    // a - Nous commençons par faire une requête d'insertion qui n'est pas protégé contre les injection et qui n'accepte pas les apostrophes : 
    //$resultat = $pdo->query("INSERT INTO commentaire (pseudo, date_enregistrement, message) VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]')"); // exemple typique de ce qu'il ne faut pas faire : mettre des entrées utilisateur (ici $_POST) directement dans la requête.

    // b - Nous faisons une injection SQL suivante : ok');DELETE FROM commentaire;(
    //Elle a pour effet de vider la table commentaire.

    // Pour ce prémunir des injection SQL, nous faisons la requête préparé suivante : 
    $resultat = $pdo->prepare("INSERT INTO commentaire (pseudo, date_enregistrement, message) VALUES (:pseudo, NOW(), :message)");

    $resultat->bindParam(':pseudo', $_POST['pseudo']);
    $resultat->bindParam(':message', $_POST['message']);

    $resultat->execute();
    // Comment ça marche ? : Le fait de mettre des marqueurs dans la requête permet de ne pas concaténer les instruction SQL les rendant directement exécutables. En faisant un bindParam, les instructions SQL sont automatiquement neutralisées par PDO qui les transform en strings bruts inoffensifs. Ainsi le SGBD attend des valeurs à la place des marqueurs dont il sait qu'elles ne sont pas du codeà exécuter. 




}// FIN if(!empty($_POST))

//------------------------------------------------------------
// 1 - Formulaire de saisie des commentaire :
//------------------------------------------------------------
?>

<h1>Votre commentaire</h1>

<form action="" method="post">

<label for="pseudo">Pseudo</label><br>
<input type="text" id="pseudo" name="pseudo" value="<?php echo $_POST['pseudo'] ?? ''; ?>"><br>

<label for="message">Commentaire</label><br>
<textarea type="text" id="message" name="message" col="30" row="10"><?php echo $_POST['message'] ?? ""; ?></textarea><br>


<input type="submit" id="message" name="envoi" value="envoyer">
</form>
<?php 

// 3 - Affichage des commentaire :
$resultat = $pdo->query("SELECT pseudo, message, DATE_FORMAT(date_enregistrement, '%d-%m-%Y') AS datefr, DATE_FORMAT(date_enregistrement, '%H:%i:%s') AS heurefr FROM commentaire ORDER BY date_enregistrement DESC");

echo $resultat->rowCount() . ' commentaire postés <br><br>';

while ($commentaire = $resultat->fetch(PDO::FETCH_ASSOC)) {
    echo '<di>' . $commentaire['pseudo'] . ' le  ' . $commentaire['datefr'] . 'à ' . $commentaire['heurefr'] . '</div>';
    echo '<div>' . $commentaire['message'] . '</div><hr>';
}

?>