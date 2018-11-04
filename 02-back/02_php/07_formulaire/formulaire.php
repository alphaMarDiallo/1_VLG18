<?php
//-----------------------------------
// Validation de formulaire :
//-----------------------------------

// Créer un formulaire qui permet d'enregistrer un nouvel employé dans la BDD societe.
function debug($param)
{
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}
$msg = ''; // variable pour afficher les message d'erreur
//2- connexion : 
$pdo = new PDO(
    'mysql:host=localhost;dbname=societe',
    'root',
    '',
    array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
    )
);

// 3 - Traitement de $_POST : 
if ($_POST) { // est équivalent à !empty($_POST)

    debug($_POST);
    // a-controle du formulaire : 
    if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 3 || strlen($_POST['prenom']) > 20) {
        $msg .= '<p style="background:red;color:white;">Le prénom doit comporter entre 3 et 20 caractères.</p>';// Si il n'existe pas l'indice prénom, c'est que le name correspondant a été modifié...on vérifie aussi la longeur du prénom
    }// FIN if (!isset($_POST['prenom']) 

    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 3 || strlen($_POST['nom']) > 20) {
        $msg .= '<p style="background:red;color:white;">Le nom doit comporter entre 3 et 20 caractères.</p>';// Si il n'existe pas l'indice prénom, c'est que le name correspondant a été modifié...on vérifie aussi la longeur du prénom
    }// FIN if (!isset($_POST['nom']) 

    if (!isset($_POST['service']) || strlen($_POST['service']) < 3 || strlen($_POST['service']) > 30) {
        $msg .= '<p style="background:red;color:white;">Le service doit comporter entre 3 et 30 caractères.</p>';// Si il n'existe pas l'indice prénom, c'est que le name correspondant a été modifié...on vérifie aussi la longeur du prénom
    }// FIN if (!isset($_POST['service']) 

    if (!isset($_POST['sexe']) || ($_POST['sexe'] != 'm' && $_POST['sexe'] != 'f')) {
        $msg .= '<p style="background:red;color:white;">Le sexe n\'est pas valide </p>';
    }// FIN if (!isset($_POST['sexe']) 

    if (!isset($_POST['date_embauche']) || !strtotime($_POST['date_embauche'])) {
        $msg .= '<p style="background:red;color:white;">La date n\'est pas valide</p>';  // strtotime() renvoie false si le timestamp de la date foruniene peut pas être obtenu, autrementdit si la date n'est pas réoputée valide 
    }// FIN if (!isset($_POST['date_embauche']) 

    if (!isset($_POST['salaire']) || !is_numeric($_POST['salaire']) || $_POST['salaire'] <= 0) {
        $msg .= '<p style="background:red;color:white;">Le salaire doit être un nombre positif</p>';// is_numeric() vérifie si la variable est un nombre ou bien une chaîne numérique (un nombre en string)
    }

    //------
    // si la variable $msg est vide, c'est que le formulaire est valide: on peu enregistrer en BDD : 

    if (empty($msg)) {
        // on échappe toutes les valeur de $_POST :
        foreach ($_POST as $indice => $valeur) {
            $_POST['$indice'] = htmlspecialchars($valeur, ENT_QUOTES); // on prend la valeur que l'on traite avec htmlspecialchars() puis que l'on range dans son emplacement initial qui est $_Post[$indice]

        }// FIN foreach($_POST as $indice => $valeur)

        // On reformate la date en yyyy-mm-dd :
        $date = new DateTime($_POST['date_embauche']); // on créer un objet date qui contient la date d'embauche à partir de la classe DateTime
        $date_embauche = $date->format('Y-m-d'); // on utilise la méthode format pour changer le format de la date

        // La requête preparée :
        $resultat = $pdo->prepare("INSERT INTO employes ( prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)");
        //on lie les marqueurs au valeurs
        $resultat->bindParam(':prenomx', $_POST['prenom']);
        $resultat->bindParam(':nom', $_POST['nom']);
        $resultat->bindParam(':service', $_POST['service']);
        $resultat->bindParam(':sexe', $_POST['sexe']);
        $resultat->bindParam(':date_embauche', $date_embauche);
        $resultat->bindParam(':salaire', $_POST['salaire']);
        // execute :
        $req = $resultat->execute(); // $req est un booléen : true en cas de succes de la requête sinon false en cas d'échec

        //Message de réussite ou d'échec de l'enregistrement : 
        if ($req) {
            $msg .= '<p style="background:green;color:white;">L\'employé a bien été ajouté</p> ';
        } else {
            $msg .= '<p style="background:red;color:white;">Erreur lors de l\'enregistrement</p>';
        }// FIN  if ($req)

    }// FIN if(empty($msg)

} // FIN if($_POST)

// 1 - Le formulaire HTML
echo $msg;
?>

<form method="POST" action="">
<label for="prenom">Prenon</label><br>
<input type="text" id="prenom" name="prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>"><br>

<label for="nom">Nom</label><br>
<input type="text" id="nom" name="nom" value="<?php echo $_POST['nom'] ?? ''; ?>"><br>

<label>Sexe</label><br>
<input type="radio" id="sexe" name="sexe" value="m" checked>Homme
<input type="radio" id="sexe" name="sexe" value="f" <?php if (isset($_POST['sexe']) && $_POST['sexe'] == 'f') echo 'checked'; ?>>Femme<br>

<label for="service">Service</label><br>
<input type="text" id="service" name="service" value="<?php echo $_POST['service'] ?? ''; ?>"><br>

<label for="date_embauche">Date d'embauche</label><br>
<input type="text" id="date_embauche" name="date_embauche" value="<?php echo $_POST['date_embauche'] ?? ''; ?>" placeholder="jj-mm-aaaa" ><br>

<label for="salaire">Salaire</label><br>
<input type="text" id="salaire" name="salaire" value="<?php echo $_POST['salaire'] ?? ''; ?>"><br>

<input type="submit" value="Enregistrer">


</form>