<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Produit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ProduitController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        //Récupéréer les produits (BDD)
        //SELECT * FROM produits

        //on récupère le service Doctrine()
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        //repositiry est un nmodele qui permet d'accéder à une table
        //$repository est de fait le répository correspondant à la classe Produit (donc la table produit). Et me permet de faire des requête sur la table produit...
        $produits = $repository->findAll();

        // Récupérer les catégories
        //SELECT DISTINCT categorie FROM produit
        $em = $this->getDoctrine()->getManager();
        //pour utiliser QueryBuilder ou CreateQuery, le Manager est néccessaire
        //Methode QueryBuilder (PHP):
        $query = $em->createQueryBuilder();
        $query
            ->select('p.categorie')
            ->distinct(true)
            ->from(Produit::class, 'p')
            ->orderBy('p.categorie', 'ASC');
        //on bâtit une fonction via des fonctions PHP de doctrine
        $categorie = $query->getQuery()->getResult();
        // exeécute la requête et on fetch.

        //Methode createQuery (SQL) :
        $query = $em->createQuery("SELECT DISTINCT p.categorie FROM BoutiqueBundle\Entity\Produit p ORDER BY p.categorie");
        // Créer une requête en SQL via Doctrine
        $categorie = $query->getResult();
        // On exécute la requête et fetch.

        //Transmettre les produits à la vue
        $params = array(
            'produits' => $produits,
            'categories' => $categorie,
            'title' => 'Accueil',
        );

        return $this->render('@Boutique/Produit/index.html.twig', $params);
    }
    /**
     *  @Route("/produit/{id}", name="produit")
     *
     */
    public function produitAction($id)
    {
        //SELECT*FROM produit WHERE id_produit=id
        //Methode 1 :
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produit = $repository->find($id);

        //Methode 2 :
        //On récupère l'entityManager
        $em = $this->getDoctrine()->getManager();
        // le Manager(patron des different repository) est capable d'intervenir sur toute les tables.
        //findAll() n'existe pas avec le Manager.
        $produit = $em->find(Produit::class, $id);

        //suggestion de produit :
        // SELECT*FROM produit WHERE categogire = produit['categorie'] AND id_produit != $id
        $categorie = $produit->getCategorie();
        $suggestions = $repository->findBy(['categorie' => $categorie], ['prix' => 'DESC'], 3, 0);
        $params = array(
            'produit' => $produit,
            'title' => ' produits : ' . $produit->getTitre(),
            'suggestions' => $suggestions,
        );

        return $this->render("@Boutique/Produit/produit.html.twig", $params);
    }
    /**
     * @Route("/categorie/{cat}", name="categorie")
     *
     */
    public function categorieAction($cat)
    {

        //Récupéréer les produits (BDD)
        //SELECT * FROM produit WHERE ctegorie = '$cat'->fetchAll()

        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repository->findBy(['categorie' => $cat]);

        // Récupérer les catégories
        //SELECT DISTINCT categorie FROM produit

        //Method queryBuilder via ProduitRepository
        $categories = $repository->findAllCategorie();

        //Method createQuery via ProduitRepository

        //Transmettre les produits à la vue
        $params = array(
            'produits' => $produits,
            'categories' => $categories,
            'title' => 'Categorie ' . $cat,
        );

        return $this->render('@Boutique/Produit/index.html.twig', $params);

    }

    
	
}
