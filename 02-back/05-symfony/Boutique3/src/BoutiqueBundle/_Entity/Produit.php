<?php

namespace BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="produit")
 *
 * @ORM\Entity(repositoryClass="BoutiqueBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     * @ORM\Column(name="id_produit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="reference", type="string", length=20)
     */
    private $reference;
    /**
     * @var string
     * @ORM\Column(name="categorie", type="string", length=20)
     */
    private $categorie;

    /**
     * @var string
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var string
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="taille", type="string", length=5)
     */
    private $taille;

    /**
     * @var string
     * @ORM\Column(name="public", type="string", length=5)
     */
    private $public;

    /**
     * @var string
     * @ORM\Column(name="couleur", type="string", length=200)
     */
    private $couleur;

    /**
     * @var string
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @var string
     * @ORM\Column(name="photo", type="string", length=250, nullable=true)
     */
    private $photo;

    /**
     * Get Id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set Id
     * @return Produit
     * @param int $arg
     */
    public function setId($arg)
    {
        $this->id = $arg;
        return $this;
    }
    /**
     * Get reference
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference
     * @return Produit
     * @param string $arg
     */
    public function setReference($arg)
    {
        $this->reference = $arg;
        return $this;
    }
    /**
     * Get categorie
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    /**
     * Set categorie
     * @return Produit
     * @param string $arg
     */
    public function setCategorie($arg)
    {
        $this->categorie = $arg;
        return $this;
    }
    /**
     * Get titre
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * Set titre
     * @return Produit
     * @param string $arg
     */
    public function setTitre($arg)
    {
        $this->titre = $arg;
        return $this;
    }
    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description
     * @return Produit
     * @param string $arg
     */
    public function setDescription($arg)
    {
        $this->description = $arg;
        return $this;
    }
    /**
     * Get taille
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }
    /**
     * Set taille
     * @return Produit
     * @param int $arg
     */
    public function setTaille($arg)
    {
        $this->taille = $arg;
        return $this;
    }
    /**
     * Getpublic
     * @return string
     */
    public function getPublic()
    {
        return $this->public;
    }
    /**
     * Set public
     * @return Produit
     * @param string $arg
     */
    public function setPublic($arg)
    {
        $this->public = $arg;
        return $this;
    }
    /**
     * Get couleur
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }
    /**
     * Set couleur
     * @return Produit
     * @param string $arg
     */
    public function setCouleur($arg)
    {
        $this->couleur = $arg;
        return $this;
    }
    /**
     * Get prix
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * Set prix
     * @return Produit
     * @param int $arg
     */
    public function setPrix($arg)
    {
        $this->prix = $arg;
        return $this;
    }
    /**
     * Get stock
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }
    /**
     * Set stock
     * @return Produit
     * @param int $arg
     */
    public function setStock($arg)
    {
        $this->stock = $arg;
        return $this;
    }
    /**
     * Get photo
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * Set photo
     * @return Produit
     * @param string $arg
     */
    public function setPhoto($arg)
    {
        $this->photo = $arg;
        return $this;
    }

}
