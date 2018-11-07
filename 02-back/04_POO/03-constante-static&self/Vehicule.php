<?php

class Vehicule
{
    private static $marque = 'BMW'; // appartient à la classe
    private $couleur = 'noir'; //appartient à l'objet

    public function setMarque($m)
    {
        self::$marque = $m;
    }

    public function getMarque()
    {
        return self::$marque;
    }

    public function setCouleur($c)
    {
        $this->couleur = $c; // propriété ($this->)
    }

    public function getCouleur()
    {
        return $this->couleur; // propriété ($this)
    }

}
//---------------------------------------------------------

$vehicule1 = new Vehicule;
echo 'Vehicule de marque ' . $vehicule1->getMarque() . ' et de couleur ' . $vehicule1->getcouleur() . ' <hr>'; //BMW noir

$vehicule2 = new Vehicule;
echo 'Vehicule de marque ' . $vehicule2->getMarque() . ' et de couleur ' . $vehicule2->getcouleur() . ' <hr>'; //BMW noir

$vehicule3 = new Vehicule;
$vehicule3->setCouleur('rouge'); // modification de la couleur sur l'objet en cours
echo 'Vehicule de marque ' . $vehicule3->getMarque() . ' et de couleur ' . $vehicule3->getcouleur() . ' <hr>';

$vehicule4 = new Vehicule;
echo 'Vehicule de marque ' . $vehicule4->getMarque() . ' et de couleur ' . $vehicule4->getcouleur() . ' <hr>'; //BMW noir

$vehicule5 = new Vehicule;
$vehicule5->setMarque('Mercedes'); // modification de la classe (car la propriété $marque est static) et donc modification de tout les objet emanant de la classe
echo 'Vehicule de marque ' . $vehicule5->getMarque() . ' et de couleur ' . $vehicule5->getcouleur() . ' <hr>'; //Mercedes noir

$vehicule6 = new Vehicule;
echo 'Vehicule de marque ' . $vehicule6->getMarque() . ' et de couleur ' . $vehicule6->getcouleur() . ' <hr>'; ////Mercedes noir
