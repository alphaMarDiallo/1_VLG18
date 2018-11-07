<?php
class Plombier
{
    public function getSpecialite()
    {
        return 'Tuyaux, robinets, compteurs, etc... <br>';
    }
    public function getHoraires()
    {
        return '8h00-19h00 <br>';
    }
}
// ----------------------------------------------------------------
class Electricien
{
    public function getSpecialite()
    {
        return 'Disjoncteurs, pose de cables, tableaux electriques, etc ...<br>';
    }
    public function getHoraires()
    {
        return '10h00-18h00 <br>';
    }
}
//----------------------------------------------------------------

class Entreprise
{ // La classe Entreprise n'hérite PAS d'une autre classe

    public $numero = 0;

    public function appelEmploye($employe)
    {
        $this->numero++;
        $this->{"monEmploye" . $this->numero} = new $employe;

        return $this->{"monEmploye" . $this->numero};
    }
}
//-----------------------------------------------------------------

$entreprise = new Entreprise;
$entreprise->appelEmploye('Plombier');
print('<pre>');
var_dump($entreprise) . '<br>';
print('</pre>');
echo '<br>';

echo $entreprise->monEmploye1->getSpecialite();
echo $entreprise->monEmploye1->getHoraires();

$entreprise->appelEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialite();
echo $entreprise->monEmploye2->getHoraires();
