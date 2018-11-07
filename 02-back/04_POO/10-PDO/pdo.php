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

$pdo= new PDO('mysql:host=localhost;dbname=entreprise_pole_S', 'root', '', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8') );

var_dump($pdo);

// print'<pre>';
//     print_r(get_class_methods($pdo)); 
// print'</pre>';

//----------------------------------------------
echo '<h1>SELECT + query() + fetch(</h1>';

$r =$pdo->query('SELECT*FROM employes');//$resultat : PDOstatement

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

foreach($donnees as $indice => $contenu){
    echo $indice. '->'.$contenu.'<br>';
}
//fetch() ressort la prmière ligne de resultat et nous affectuons une boucle dessus pour afficher toutes les valeurs de chaque champs sur cette même ligne
//----------------------------------------------
echo '<h1>SELECT  + fetch ne renvoie pas un seul resultat si il est dans une boucle</h1>';

$r =$pdo->query('SELECT*FROM employes');//$resultat : PDOstatement

while($contenu = $r->fetch()){
    echo '<div>';
    echo  $contenu['id_employes'] .'<br>';
    echo  $contenu['prenom'] .'<br>';
    echo  $contenu['nom'] .'<br>';
    echo  $contenu['sexe'] .'<br>';
    echo  $contenu['service'] .'<br>';
    echo  $contenu['date_embauche'] .'<br>';
    echo  $contenu['salaire'] .'<hr>';
    echo '</div>';
}

//---------------------------------------------------
echo '<h1>SELECT +query() + fetchall() et PDO::FETCH_ASSOC</h1>';