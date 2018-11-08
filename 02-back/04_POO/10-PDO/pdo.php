<?php
//PDO : Php Data Object
/*
Exec() :
INSERT, UPDATE, DELETE : Exec() est utilisé pour la formulation de requête ne retournant pas de résultat.
Exec() renvoie le nombre de lignes affectées par la requête.

Valeur de retour :
->Echec : False (BOOLEAN)
->Succes : 1 (INT). CE nombrepeut bien être supérieur tout dépend du nombre d'enregistrement affectés par la requ^te.

//---------------------------------
Query() :
SELECT : Au contraire de Exec(), Query() est utilisé pour la formulation de requête retournant un ou plusieurs résultats.

Valeur de retour :
->Echec : False (BOOLEAN)
->Succes : PDOstatement(object)

//---------------------------------

Prepare() -> Execute() :
INSERT, UPDATE, DELETE, SELECT : prepare() permet de préparer une requête mais ne l'exécute pas

Execute() permet d'exécuter une requête préparée.

Cette méthode est à préconiser si l'on exécute plusieurs fois la même requête et ainsi vouloir éviter le cycle : analyse / interprétation/exécution

Valeur de retour :
prepare() renvoie toujours un PDOstatement (object)
Execute:
->Echec : False (BOOLEAN)
->Succes : PDOstatement(object)
//----------------------------------------------

Toutes ces méthodes peuvent prendre un ou des arguments si nécéssaire.
SAUF pour Exec() : $pdo représente mon objet PDO, quand j'exécute une requête PDO, il me retourne un objet PDOstatement(qui n'est donc plus l'objet PDO...!!!)

Permet d'afficher les erreurs et la requête après exécution :
Pour exec() ou query() :
print'<pre>';
print_r($pdo->errorinfo()); // sur l'objet PDO
print'</pre>';

Pour prepare() puis execute() :
print_r($resultat->errorinfo()); // sur l'objet PDOstatement

Il est interessant d'utiliser query ou exec pour les requêtes en dur et d'utiliser prepare + execute pour les requêtes dynamique (incluantdupost, get,  etc...)
---------------------------------------
 */

$pdo = new PDO('mysql:host=localhost;dbname=entreprise_pole_S', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

var_dump($pdo);

// print'<pre>';
//     print_r(get_class_methods($pdo));
// print'</pre>';

//----------------------------------------------
echo '<h1>SELECT + query() + fetch(</h1>';

$r = $pdo->query('SELECT*FROM employes'); //$resultat : PDOstatement

// var_dump($r);
// print'<pre>';
//     print_r(get_class_methods($r));
// print'</pre>';
// echo '<hr>';
// print'<pre>';
//     print_r(get_object_vars($r)); //permet d'afficher les propriétés de la Classes PDOstatement
// print'</pre>';

$donnees = $r->fetch();
// print'<pre>';
//     print_r($donnees);
// print'</pre>';

foreach ($donnees as $indice => $contenu) {
    echo $indice . '->' . $contenu . '<br>';
}
//fetch() ressort la prmière ligne de resultat et nous affectuons une boucle dessus pour afficher toutes les valeurs de chaque champs sur cette même ligne
//----------------------------------------------
echo '<h1>SELECT  + fetch ne renvoie pas un seul resultat si il est dans une boucle</h1>';

$r = $pdo->query('SELECT*FROM employes'); //$resultat : PDOstatement

while ($contenu = $r->fetch()) {
    echo '<div>';
    echo $contenu['id_employes'] . '<br>';
    echo $contenu['prenom'] . '<br>';
    echo $contenu['nom'] . '<br>';
    echo $contenu['sexe'] . '<br>';
    echo $contenu['service'] . '<br>';
    echo $contenu['date_embauche'] . '<br>';
    echo $contenu['salaire'] . '<hr>';
    echo '</div>';
}

//---------------------------------------------------
echo '<h1>SELECT +query() + fetchall() et PDO::FETCH_ASSOC</h1>';

$r = $pdo->query("SELECT * FROM employes");
$donnees = $r->fetchall(PDO::FETCH_ASSOC); //fetchall() retourne toutes les lignes de résultats dans un tableau multidimentionnel

// print'<pre>';
//     print_r($donnees);
// print'</pre>';
echo '<h2>foreach</h2>';
foreach ($donnees as $indice => $contenu) {
    echo '<div>';
    foreach ($contenu as $indice2 => $contenu2) {
        echo "$indice2" . " : " . "$contenu2 <br>";
    }
    echo '</div>';
}
echo '<h2>for</h2>';

for ($i = 0; $i < count($donnees); $i++) {
    echo '<div>';
    echo $donnees[$i]['id_employes'] . '<br>';
    echo $donnees[$i]['prenom'] . '<br>';
    echo $donnees[$i]['nom'] . '<br>';
    echo $donnees[$i]['sexe'] . '<br>';
    echo $donnees[$i]['service'] . '<br>';
    echo $donnees[$i]['date_embauche'] . '<br>';
    echo $donnees[$i]['salaire'] . '<br><hr>';
    echo '</div>';
}

echo '<h2>while</h2>';
$i = 0;
while ($i < count($donnees)) {
    echo '<div>';
    echo $donnees[$i]['id_employes'] . '<br>';
    echo $donnees[$i]['prenom'] . '<br>';
    echo $donnees[$i]['nom'] . '<br>';
    echo $donnees[$i]['sexe'] . '<br>';
    echo $donnees[$i]['service'] . '<br>';
    echo $donnees[$i]['date_embauche'] . '<br>';
    echo $donnees[$i]['salaire'] . '<br><hr>';
    echo '</div>';
    $i++;
}
//---------------------------------------------------------
echo '<h1>SELECT +query() + fetchall()+ ColumnCounty()</h1>';

$resultat = $pdo->query("SELECT*FROM employes", PDO::FETCH_ASSOC); //ici, on demande d'indexer uniquement quant c'est toujours au stade d'objet

echo '<table border="1"><tr>';
for ($i = 0; $i < $resultat->columnCount(); $i++) {
    $colonne = $resultat->getColumnMeta($i);
    echo '<th>' . $colonne['name'] . '</th>';
}
echo '</tr>';
foreach ($resultat as $contenu) {
    echo '<tr align="center">';
    foreach ($contenu as $indice => $info) {
        echo '<td>' . $info . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
//------------------------------------------------------------------
echo '<h1>Arg Array + prepare() + execute() + fetch() </h1>';

$resultat = $pdo->prepare("SELECT*FROM employes WHERE nom = ?"); // on prépare notre requête, ici le  '?' est un marqueur

$resultat->execute(array("durand")); //"Durand" va remplacermon marqueur ('?')

print '<pre>';
print_r($resultat->errorInfo()); // si je fais une erreur sur prépare() ou execute() on demande l'erreur via PDOstatement
print '</pre>';

$resultat->fetch(PDO::FETCH_ASSOC);
print '<pre>';
var_dump($donnees); // si je fais une erreur sur prépare() ou execute() on demande l'erreur via PDOstatement
print '</pre>';

$resultat = $pdo->prepare("SELECT*FROM employes WHERE nom = :nom");
$resultat->execute(array('nom' => 'chevel'));
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
print '<pre>';
var_dump($donnees);

// ---------------------------------------------------------------------------------
echo '<hr><h1>Arg bindParam() + prepare() + execute() + fetch() </h1>';
$nom = 'Sennard';
$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom'); //   :nom est un marqueur
$resultat->bindParam(':nom', $nom, PDO::PARAM_STR); //on précise que bindParam doit recevoir exclusivement une variable
$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
var_dump($donnees);
// ---------------------------------------------------------------------------------
echo '<hr><h1>Arg bindValue() + prepare() + execute() + fetch() </h1>';
$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom'); // :nom est un marqueur
$resultat->bindValue(':nom', 'Thoyer', PDO::PARAM_STR); //on précise que bindParam doit recevoir exclusivement une variable
$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
var_dump($donnees);
// ---------------------------------------------------------------------------------
echo '<hr><h1>Arg bindValue() + prepare() + execute() + fetch() + PDO::FETCH_OBJ </h1>';
$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :name'); // :nom est un marqueur
$resultat->bindValue(':name', $nom);
$resultat->execute();
echo '<ul>';
$donnees = $resultat->fetch(PDO::FETCH_OBJ); //PDO::FETCH_OBJ : retourne des objets
print '<pre>';
print_r($donnees); // si je fais une erreur sur prépare() ou execute() on demande l'erreur via PDOstatement
print '</pre>';

echo '</ul>';
var_dump($donnees);

//---------------------------------------------------------------------------
// echo '<hr><h1>Plusieurs execute d\'une même requête</h1>';

// $pdostatement = $pdo->prepare("INSERT INTO employes(prenom, nom, sexe, service, date_embauche,salaire) VALUES ('test', 'test', 'm', 'test', '2012-01-01', 1111)");

// for ($i = 0; $i < 3; $i++) {
//     $pdostatement->execute();
// }

//---------------------------------------------------------------------------
echo '<hr><h1>Transaction + requête et annulation</h1>';
//ATTENTION : si la transaction ne passe pas, il faut supprimer la bdd 'entreprise_pole_S'

$pdo->beginTransaction(); // Démarre une transaction (désactivé l'auto-commit)

$resultat = $pdo->query("SELECT*FROM employes", PDO::FETCH_NUM);
echo '<table border="1">';
for ($i = 0; $i < $resultat->columnCount(); $i++) {
    $colonne = $resultat->getColumnMeta($i);
    echo '<th>' . $colonne['name'] . '</th>';
}
foreach ($resultat as $contenu) {
    echo '<tr>';
    foreach ($contenu as $indice => $info) {
        echo '<td>' . $info . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

var_dump($pdo->inTransaction()); // renvoie true si nous sommes dans une transaction à cet instant précis, sino false.

// si on s'apperçoit  que l'on a fait une erreur et que l'on veut annuler une modification:
$pdo->rollBack();

//---------------------------------------------------------------------------
echo '<hr><h1>FETCH_CLASS</h1>';

class Employes
{

    public $id_employes;
    public $prenom;
    public $nom;
    public $sexe;
    public $service;
    public $date_embauche;
    public $salaire;
}

$r = $pdo->query("SELECT*FROM employes");
 $objet = $r->fetchAll(PDO::FETCH_CLASS, 'Employes');

 foreach($objet as $employes){
     echo $employes->prenom. '<br>';
 }