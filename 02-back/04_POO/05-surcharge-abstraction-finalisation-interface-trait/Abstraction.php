<?php
//abstraction :

abstract class Joueur
{

    public function seConnecter()
    {
        return $this->EtreMajeur();
    }

    abstract public function EtreMajeur(); //Les méthodes abstraites n'ont pas de contenu
    abstract public function Devise();
}
//------------------------
class JoueurFr extends Joueur
{
    public function EtreMajeur()
    { // OBLIGATION de redéfinir la méthode de la classe parente sinon on obtient une erreur
        return 18;
    }
    public function Devise()
    {
        return '€';
    }
}
class JoueurUs extends Joueur
{
    public function EtreMajeur()
    { // OBLIGATION de redéfinir la méthode de la classe parente sinon on obtient une erreur
        return 21;
    }
    public function Devise()
    {
        return '$';
    }
}
//------------------------------------

//$joueur = new Joueur; // Erreur, une class abtraite n'est pas instanciable !!!

$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter() . '<hr>';

$joueurUS = new JoueurUs;
echo $joueurUS->seConnecter() . '<hr>';
//----------------------------------------------
/*
Une classe abstraite (abstract) N'EST PAS instanciable !
Les methodes abstraites (abstarct) N'ONT PAS de contenu !
Lorsque l'on hérite de méthodes abtraites , il est NECESSAIRE que la CLASSE qui les CONTIEN soit ABSTRAITE !!
Par ailleurs, une classe abstraite peut contenir des méthodes normales.

 */
