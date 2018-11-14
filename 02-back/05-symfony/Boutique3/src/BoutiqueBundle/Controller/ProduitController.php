<?php

namespace BoutiqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        //Récupéréer les produits (BDD)
        $produits = array(
            0 => array(
                'id_produit' => 1,
                'referrence' => 'tsfzht',
                'titre' => 'tshirt',
                'photo' => 'photo.php',
                'public' => 'm',
                'description' => 'C\' un super produit',
                'couleur' => 1,
                'taille' => 'm',
                'prix' => 9,
                'stock' => 1
            ),
            1 => array(
                'id_produit' => 2,
                'referrence' => 'zztacddc',
                'titre' => 'jean',
                'photo' => 'photo2.php',
                'public' => 'm',
                'description' => 'Jean straignt',
                'couleur' => 'bleu',
                'taille' => 'L',
                'prix' => 14.5,
                'stock' => 2
            ),
        );

        // Récupérer les catégories
        $categories = array(
            0 => array(
                'categorie' => 'tshirt'
            ),
            1 => array(
                'categorie' => 'jean'
            ),
        );

        //Transmettre les produits à la vue

        $params = array(
            'produits' => $produits,
            'categories' => $categories,
            'title' => 'Accueil'
        );

        return $this->render('@Boutique/Produit/index.html.twig', $params);
    }
    /**
     *  @Route("/produit/{id}", name="produit")
     *
     */
    public function produitAction($id)
    {
        return $this->render("@Boutique/Produit/produit.html.twig");
    }
    /**
     * @Route("/categorie/{cat}", name="categorie")
     *
     */
    public function categorieAction($cat)
    {
        
        return $this->render('@Boutique/Produit/index.html.twig');

    }

}
