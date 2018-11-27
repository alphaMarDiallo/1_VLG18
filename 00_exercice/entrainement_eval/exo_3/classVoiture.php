<?php 

class Vehicule{

    private $marque;
    public function setMarque($arg){
        if(is_string($arg) && strlen($arg) > 3 && strlen($arg)< 30){
            $this -> marque = $arg;
        }
        // return $this;
    }
    public function getMarque(){
           return $this -> marque;
    }
    //-----
    private $modele;
    public function setModele($arg)
    {
        if (is_string($arg) && strlen($arg) > 3 && strlen($arg)< 30) {
            $this -> modele = $arg;
        }
        // return $this;
    }
    public function getModele()
    {
        return $this -> modele;
    }
    //-------
    private $annee;
    public function setAnnee($arg)
    {
        if (is_int($arg) && strlen($arg) > 1 && strlen($arg) == 4) {
            $this -> annee = $arg;
        }
        // return $this;
    }
    public function getAnnee()
    {
        return $this -> annee;
    }
    //------
    private $couleur;
    public function setCouleur($arg)
    {
        if (is_string($arg) && strlen($arg) > 3 && strlen($arg)< 30) {
            $this -> couleur = $arg;
        }
        // return $this;
    }
    public function getCouleur()
    {
        return $this -> couleur;
    }
    //-------
    private $km;
    public function setKm($arg)
    {
        if (is_int($arg) && strlen($arg) >= 1 && strlen($arg) <= 6) {
            $this -> km = $arg;
        }
        // return $this;
    }
    public function getKm()
    {
        return $this -> km;
    }

    //---------

    public function getInfos(){
        $info = array();
        $info['marque'] = $this -> getMarque();
        $info['modele'] = $this -> getModele();
        $info['couleur'] = $this -> getCouleur();
        $info['annee'] = $this -> getAnnee();
        $info['km'] = $this -> getKm();
    }

}

