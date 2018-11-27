<?php 

class Voiture{

    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    private $km;

    public function setMarque($arg){
        if(is_string($arg) && strlen($arg)>3 && strlen($arg)<30){
            $this-> marque=$arg;
        }
    }
    public function getMarque(){
        return $this->marque;
    }
    public function setmodele($arg){
        if(is_string($arg) && strlen($arg)>3 && strlen($arg)>30){
            $this->modele=$arg;
        }
    }
    public function getmodele(){
        return $this->modele;
    }
    public function setAnnee($arg){
        if(is_numeric($arg) && strlen($arg) > 1 && strlen($arg) < 4){
            $this->annee=$arg;
        }
    }
    public function getAnnee(){
        return $this->annee;
    }
    public function setCouleur($arg){
        if(string($arg) && strlen($arg) > 3 && strlen($arg) < 30){
            $this-> couleur=$arg;
        }
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function setKm($arg){
        if(is_numeric($arg) && strlen($arg) >1 && strlen($arg)>6){
            $this->km=$arg;
        }
    }
    public function getKm(){
        return $this->km;
    }

    public function getInfo(){
        $info = arra();

        $info['marque'] = $this->getMarque();
        $info['modele'] = $this->getmodele();
        $info['couleur'] = $this->getcouleur();
        $info['annee'] = $this->getannee();
        $info['km'] = $this->getkm();
    }

}