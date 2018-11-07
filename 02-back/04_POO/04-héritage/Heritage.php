<?php

class Membre
{

    public $id = 10;
    public $pseudo;
    public $mdp;

    public function __construct()
    { //fonction qui s'exécute automatiquement
        echo 'Internaute ! <br>';
    }
    public function inscription()
    {
        //traitement
        return 'Je me inscrit ! <br>';
    }
    public function seConnecter()
    {
        //traitement
        return 'Je me connecte ! <br>';
    }
}
//------------------------

class Admin extends Membre
{ //extends = heritage, comme include, ici on a un copier/coller du code de la classe Membre

    public function accesBackOffice()
    {
        //traitement
        return 'Acces Back Office ! <br>';
    }

}
//------------------------------

$admin1 = new Admin; // Je crée un objet admin qui hérite de la class membre. Affiche la fonction construct()

echo $admin1->seConnecter();
echo $admin1->accesBackOffice();
echo $admin1->id; // j'acces à la propriété par l'objet admin
echo '<br>';
$membre1 = new Membre;

echo $membre1->seConnecter(); // j'accède à la methode par l'objet membre1
echo $membre1->id; // j'acces à la propriété par l'objet admin
echo $membre1->accesBackOffice(); // ERREUR !! la méthode accesBackOffice() n'est pas dans ma classe Membre et je n'ai pas d'heritage de ma class admin donc je ne peux pas accéder à cette méthode.

// LORS D'UN HERITAGE, ON HERITE DE TOUT !!! (même ce qui est private!)
