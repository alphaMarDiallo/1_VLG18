<?php

class Etudiant
{
    private $prenom;

    public function __construct($arg)
    {
        // __construct : méthode appelé automatiquement lors d'une instanciation de la class('new').
        //On ne peut pas déclarer 2 construct en PHP.

        echo "Instanciation, nous avons recu l'information suivante : $arg ";

        $this->setPrenom($arg);
    }

    public function setPrenom($arg)
    {
        $this->prenom = $arg;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
}
//---------------------------------

$etudiant1 = new Etudiant('Alpha'); // __construct est appelée automatiquement, nous avons mis un argument après le nom de la classe qui attérit directement dans le constructeur

echo '<br> Prenom : ' . $etudiant1->getPrenom();

// $etudiant->__construct(); // Le constructeurpeut tout de même être appelé comme une methode 'classique'.

//----- Plus :
//__construct : sera équivalent du init avec session_start().
//__construct : methode magique qui s'exécute automatiquement.
