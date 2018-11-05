<?php

class Maison
{

    public static $espaceTerrain = '500m²'; //appartient à la classe
    public $couleur = 'blanc'; //appartient à la l'objet

    const HAUTEUR = '10m'; //appartient à la classe

    private static $nbPiece = 7; // appartient à la classe
    private $nbPorte = 10; // appartient à l'objet

    public static function getNbPiece()
    {
        return self::$nbPiece; // Lors d'un self::, il faut mettre le $ devant la propriété
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }

}
//--------------------------------------

echo 'nbPiece : ' . Maison::getNbPiece() . '<hr>'; //j'appel une méthode de ma classe par ma classe
echo 'EspaceTerrain : ' . Maison::$espaceTerrain . '<hr>'; //j'appel une propriété de ma classe par ma classe

$maison1 = new Maison;
echo 'couleur ' . $maison1->couleur . '<hr>'; // j'appel une propriété de mon objet par mon objet
echo 'nbPorte ' . $maison1->getNbPorte() . '<hr>'; // j'appel une propriété de mon objet par mon objet

echo 'Hauteur : ' . Maison::HAUTEUR . '<hr>'; // j'appel une constant de ma classe par ma classe

//----------------------

//echo $maison1->espaceTerrain; // erreur, on ne peut pas appeler une propriété static par mon objet

//echo $maison::$couleur; // erreur, on ne peut pas appeler une propriété public avec ma classe

//echo $maison::getNbPorte(); // erreur, on ne peut pas appeler une methode public avec ma classe

//echo $maison1->getNbPorte(); // pas d'erreur..., mais ça devrait car la methode est static et donc il faudrait l'appeler par la classe et non pas par l'objet

echo $maison1::$espaceTerrain; // devrait donner là aussi une erreur, c'est n'importe quoi

//----------------------------

/*
Opérateurs :
- $objet->élément d'un objet à l'extérieur de la classe
- $this-> élément d'un objet à l'intérieur de la classe

- class::élément d'un objet à l'extérieur de la classe
- self:: élément d'un objet à l'intérieur de la classe

2 Question à se poser :
Est-ce que c'est 'static' ?
si OUI : => self:: , class::
Est-ce que c'est dans la class ?
si OUI : => self::
si NON : => class::

si NON : => $objet-> , $this->
Est-ce que c'est dans la class ?
si OUI : $this->
si NON :$objet->

Précision :
STATIC : indique qu'un élément appartient à la classe
CONST : indique

 */
