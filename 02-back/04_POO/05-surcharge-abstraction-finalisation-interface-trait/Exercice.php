<?php
/*
1.    Faire en sorte de ne pas avoir d'objet Vehicule. // abstract

2.     Obligation pour la Renault et la Peugeot de posséder la même méthode demarrer() qu'un Véhicule de base . // extends + final

3.    Obligation pour la Renault de déclarer un carburant diesel et pour la Peugeot de déclarer un carburant essence (exemple: return 'diesel'; -ou- return 'essence';). // abstract

4.    La Renault doit effectuer 30 tests de + qu'un véhicule de base. // redefinition + surcharge

5.    La Peugeot doit effectuer 70 tests de + qu'un véhicule de base. // redefinition + surcharge

6.    Effectuer les affichages nécessaire. // echo

 */

abstract class Vehicule
{
    final public function demarrer()
    {
        return 'je demarre';
    }
    abstract public function carburant();

    public function nombreDeTestObligatoire()
    {
        return 100;
    }

    // abstract public function vehicule();
}
//-----------------------
class Peugeot extends Vehicule
{
    public function carburant()
    {
        return 'essence';
    }
    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 70;
    }

}
$peugeot1 = new Peugeot;
// echo $peugeot->vehicule();
echo 'peugeot:<br>';
echo $peugeot1->carburant() . '<br>';
echo $peugeot1->demarrer() . '<br>';
echo $peugeot1->nombreDeTestObligatoire() . ' tests à faire <br>';
echo '<hr>';
//-----------------------
class Renault extends Vehicule
{
    public function carburant()
    {
        return 'diesel';
    }
    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 30;
    }
}
$renault1 = new Renault;
echo 'renault:<br>';
echo $renault1->carburant() . '<br>';
echo $renault1->demarrer() . '<br>';
echo $renault1->nombreDeTestObligatoire() . ' tests à faire <br>';
