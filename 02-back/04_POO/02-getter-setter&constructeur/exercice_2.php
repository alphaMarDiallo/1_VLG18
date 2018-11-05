<?php

class Voiture
{

    private $litre;

    public function setLitresEssence($essence)
    {
        if (is_numeric($essence)) {

            $this->litre = $essence;
        }
    }

    public function getLitresEssence()
    {

        return $this->litre;
    }

}

$voiture = new Voiture();
$voiture->setLitresEssence(5);
echo 'Il y a ' . $voiture->getLitresEssence() . ' litres d\'essence dans le véhicule <br>';

class Pompe
{
    private $litre;

    public function setLitresEssence($carburant)
    {
        if (is_numeric($carburant)) {

            $this->litre = $carburant;
        }
    }

    public function getLitresEssence()
    {

        return $this->litre;
    }

    public function setdonnerEssence($newCarbu)
    {
        if (is_int($newCarbu)) {
            $this->litre = $newCarbu;
        }
    }
    public function getdonnerEssence()
    {
        return $this->litre;
    }

}
$pompe = new Pompe();
$pompe->setLitresEssence(800);
echo 'Il y a ' . $pompe->getLitresEssence() . ' litres d\'essences dans à la pompe <br>';

$pompe1 = new Pompe();
$pompe1->setdonnerEssence(45);
// $voiture1 = new Voiture();

echo 'Après passage à la pompe le véhicule a  ' . ($voiture->getLitresEssence() + $pompe1->getLitresEssence()) . ' litre d\'essences dans son réservoir. <br> Et il reste ' . ($pompe->getLitresEssence() - $pompe1->getLitresEssence()) . ' litres d\'essences à la pompe.<br>';
