<?php
// Les méthodes magiques s'exécutent automatiquement.
class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct()
    {}
    public function __set($nom, $valeur)
    { //Se déclencheuniquement en cas de tentative d'affectation sur une propriété inexistante.

        echo "La propriété $nom n'existe pas, la valeur $valeur n'a donc pas été affectée!<br>";
    }
    public function __get($nom)
    { //Se déclenche uniquement en cas de tentative d'affichage sur une propriété inexistante

        echo "La propriété $nom n'existe pas, on ne peut pas l'afficher !<br>";
    }

    public function __call($nom, $argument)
    { // Se déclenche uniquement en cas de tentative d'exécution sur une méthode qui n'existe pas.
        echo "Tentative d'exécuté la méthode $nom mais elle n'existe pas.<br> Les arguments étaient : " . implode('-', $argument) . "<br>";

    }
}
// ------------------------------------------------------------------
$societe1 = new Societe;
// $societe1->villes = 'Paris'; // test - Lorsque l'on tente d'affetcter une valeur à une propriété qui n'existe pas, ça fonctionne et ajoute donc la propriété et sa valeur à l'objet.
// echo $societe1->titre; // erreur undefine, la propriété n'existe pas
//echo $societe1->methode(); // erreur fatal, la methode n'existe pas
//------------------------
$societe1->pays = 'France'; //d'élenchement de la méthode __set() au lieu de la création d'une nouvelle propriété
$societe1->ville = 'Paris';
$societe1->titre; // declanchement de la methode __get() au lieu d'une erreur undefine
$societe1->methode1(1, 2, 3);//Declenchement le methode __call() au lieu d'une erreur fatal

print('<pre>');
print_r($societe1);
print('</pre>');
//-------------------------------------
/* 
Il existe plusieurs autres méthodes magiques. 
__callStatic($nom, $argument) => pour les méthodes static
__isset($nom) => Se lance lors d'une condition isset/empty sur une propriété
__destruct()=> Se lance à la fin de l'exécution du script. (pratique pour fermer la connexion à la BDD par exemple)
etc... => voir la doc
*/
