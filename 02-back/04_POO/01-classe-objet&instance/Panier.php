<?php

// Une classe permet de produire plusieurs objets.  Par convention , une classe sera nommée avec la première lettre en MAJUSCULE.
class Panier
{

    public $nbProduit; // propriété
    public function ajouterArticle()
    { // méthode
        //traitement
        return "L'article a bien été ajouté";
    }
    protected function retirerArticle()
    {
        //traitement
        return "L'article a bien été retiré";
    }
    private function affichageArticle()
    {
        //traitement
        return "Voici les articles ! ";
    }

}

// ------------------------------

$panier1 = new Panier; // new Panier <=> Instanciation (permet de déployer l'objet issue de la classe(ici Panier) permet de passer d'une classe à l'objet.)
// $panier  représente l'objet issue de la classe
var_dump($panier1);
// type(object), nom de la classe, la référence de l'objet.
$panier1->nbProduit = 5;
echo ' <br>Panier1 : ' . $panier1->nbProduit . ' produits <br>'; //appel à une propriété public.
echo ' <br>Panier1 : ' . $panier1->ajouterArticle() . ' <br>'; //appel à une propriété public.
//echo ' <br>Panier1 : ' . $panier1->retirerArticle() . ' <br>'; //appel à une propriété public.
// Error, l'élément est accessible uniquement dans la classe où cela a été déclaré ainsi que dans les classes héritières.

//echo ' <br>Panier1 : ' . $panier1->affichagerArticle() . ' <br>'; //appel à une propriété public.
// Error, l'élément est accessible uniquement dans la classe où cela a été déclaré.

$panier2 = new Panier;
var_dump($panier2);
$panier2->nbProduit = 10;
echo ' <br>Panier2 : ' . $panier2->nbProduit . ' produits <br>'; //appel à une propriété public.

//----------------------------------------
//Niveau de visibilité :

//public : accessible de partout

//protected : accessible uniquement dans la classe où cela a été déclaré ainsi que dans les classes héritières

// private : accessible uniquement dans la classe où cela a été déclaré.

// new : mot-clé permettant d'effectuer une instanciation (et donc de créer un objet) Une classe permet de produire plusieurs objets et donc nous pouvons effectuer plusieurs instanciation 'new'. Ici $panier1 et $panier2 représentent l'objet issue de la classe Panier.

// Plus : Quand on instancie une classe, la variable stockant l'objet ne stocke en fait pas l'objet lui-même, mais un identifiant qui représente cet objet (espace mémoire en ram sur le serveur).
