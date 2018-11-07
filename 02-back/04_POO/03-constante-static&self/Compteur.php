<?php

class Compteur
{

    public static $nbInstanceClass = 0; // propriété qui appartient à la classe
    public $nbInstanceObjet = 0; // pripriété qui appartient à l'objet

    public function __construct()
    {
        ++self::$nbInstanceClass; // => self::$nbInstanceClass+1
        ++$this->nbInstanceObjet; // => $this->$nbInstanceObjet +1
    }

}
//-----------------------------

$c1 = new Compteur; // nbInstanceClass à 1 - nbInstanceObjet à 1
$c2 = new Compteur; // nbInstanceClass à 2 - nbInstanceObjet à 1
$c3 = new Compteur; // nbInstanceClass à 3 - nbInstanceObjet à 1
$c4 = new Compteur; // nbInstanceClass à 4 - nbInstanceObjet à 1
$c5 = new Compteur; // nbInstanceClass à 5 - nbInstanceObjet à 1

echo 'Nombre de fois que la Classe à instancier : ' . Compteur::$nbInstanceClass . '<hr>';
// Je peux accéder à une propriété de ma class via ma class // affiche 5
echo 'Nombre de fois que l\'objet à instancier : ' . $c5->nbInstanceObjet . '<hr>';
// Je peux accéder à une propriété de mon objet via mon objet // affiche 1

//------------------------
/*
La class a 'produit' 5 objets
Chaque objet a été 'produit' 1 fois

Exemple une dame à 5 enfants, donc elle est maman de 5 fois ! Chacun  de ses enfantsest né UNE SEULE FOIS.

Ici, la classe serait la mère qui a eu 5 enfants et chaque objet serait les enfants nés une fois chacun.

 */
    