<?php
//Exception  : version procedural et tendance Orienté Objet.
// l'avantage des exception c'est  de centralisé un traitement à effectuer dans le catch en cas d'erreur.

function recherche($tab, $element)
{
    if (!is_array($tab)) {
        throw new Exception('Vous devez envoyer un Array !');
        // Trow : permet de nous envoyer dans le bloc catch et d'arrêter l'exécution du code.
    }
    if (sizeof($tab) <= 0) {
        throw new Exception('Vous devez envoyer un Array avec du contenu !');
    }
    $position = array_search($element, $tab);
    return $position;
}
//-------------------------------
$tab = array();
$liste = array('orange', 'fraise', 'pomme');

try { //bloc d'essaie(on essaie d'effectuer les instruction suivante dans le try)
    echo recherche($liste, 'pomme') . '<br>';
    echo recherche($tab, 'pomme') . '<br>';
    echo recherche('tableau', 'pomme') . '<br>';
    echo 'ttraitement php...<br>';

} catch (Exception $e) { // bloc de capture. On va attraper les exceptins 'Exception' s'il y en a qui est relevée. $e représente l'Exception car en renseignant le 'Throw', je n'ai pas pu mettre le nom d'une variable puisque l'exception est stoppé pour arriver dans le catch

    echo "Message d'erreur : " . $e->getMessage() . "<br>";
    echo "Traitement conforme dans le cas où l'argument ne soit pas un Array, OU que l'argument soit un Array vide<br>";

    echo "informations : " . $e->getCode() . "<br> Message : " . $e->getMessage() . " <br> Fichier :  " . $e->getFile() . "<br>Ligne : " . $e->getLine() . "<br>";

}
//-------------------------------------------
/*
Exception : est une classe prédéfinie
Une Exception est une erreur que l'on peut attraper grâce à try/catch
Throw : permet d'arrêter l'exécution du 'try' et de rentrer le 'catch'
try et catch permet d'avoir 2 blocs d'instruction distinctes.
 */
//-------------------------------
echo "<hr><hr>";
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test42', 'root', ''); //tentative de connexion
} catch (PDOException $e) { // on attrape les exception PDOException
    // echo 'La connexion à la bdd à échoué !!';
    echo 'Traitement conforme dans le cas où l\'argument n\'est pas un Array OU que l\'argument est un Array vide. <br>';
    echo 'Informations : ' . $e->getCode() . '<br>Message : ' . $e->getMessage() . '<br>Fichier : ' . $e->getFile() . '<br>Ligne : ' . $e->getLine() . '<br>';
    print '</pre>';

}

print '<pre>';
print_r(get_class_methods($e));
print '</pre>';
