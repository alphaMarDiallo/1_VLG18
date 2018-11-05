<?php
/*
EXERCICE :

Créez une classe membre avec les propriété pseudo et mot de passe
Objectif : afficher le pseudo et le mdp
 */

class Membre
{
    private $pseudo; // Le pseudo doit être inferieur à 15 caractère et supérieur à 0 ET que ce soit un string
    private $mdp;

    public function setPseudo($p)
    {
        if (is_string($p) && (strlen($p) > 0 && strlen($p) < 15)) {
            $this->pseudo = $p;
        }
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setMdp($m)
    {
        $this->mdp = $m;
    }

    public function getMdp()
    {

        return $this->mdp;
    }

}

$membre1 = new Membre();
$membre1->setPseudo('musclorbvp');
// var_dump($membre1);
$membre1->setMdp('masterUnivers500');
echo 'Votre pseudo : ' . $membre1->getPseudo() . '<br>';
echo 'Votre mot de passe : ' . $membre1->getMdp() . '<br>';
