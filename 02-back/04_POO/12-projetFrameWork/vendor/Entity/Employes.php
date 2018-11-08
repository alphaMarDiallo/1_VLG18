<?php
namespace Entity;

class Employes
{

    protected $idEmploye, $prenom, $nom, $sexe, $service, $dateEmbauche, $salaire;

    public function __construct()
    {}
    //------------------------------ GETTER ------------------------------
    public function getEmploye()
    {
        return $this->idEmploye;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function getService()
    {
        return $this->service;
    }
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
//--------------------------------------- SETTER--------------------
    public function setEmploye($idEmploye)
    {
        $this->idEmploye = $idEmploye;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    public function setService($service)
    {
        $this->service = $service;
    }
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

}
