<?php

namespace BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use BoutiqueBundle\Entity\Produit;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ProduitController extends Controller
{
	
	
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
		// Récupérer les produits (BDD)
		// SELECT * FROM produit
		// On récupère le service doctrine
		$repository = $this -> getDoctrine() -> getRepository(Produit::class);
		// $repository est de fait le repository correspondant à la class produit (donc à la table produit). et me permet de faire des requete sur la table produit...

		$produits = $repository -> findAll();
		
		
		
		// Récupérer les catégories du site
		// SELECT DISTINCT categorie FROM produit

		// pour utilizer QueryBilder ou CreatQuery, le manager est necessaire
		$em = $this -> getDoctrine() -> getManager();
		// Méthode QueryBuilder (PHP)
		$query = $em -> createQueryBuilder();
		$query
			  -> select('p.categorie')
			  -> distinct(true)
			  -> from(Produit::class, 'p')
			  -> orderBy('p.categorie','ASC');
		// on bâtit une requête via des function PHP de doctrine.

		$categories = $query -> getQuery() -> getResult();
		// on exécute la requete et on fatch.


		// Méthode createQuery (SQL)
		$query = $em -> createQuery("SELECT DISTINCT p.categorie FROM BoutiqueBundle\Entity\Produit p ORDER BY p.categorie");
		// on éxécute la requete en sql via Doctrine 

		$categories = $query -> getResult();
		// on exécute la requete et on fetch
		
		
		// Transmettre les produits et catégorie à la vue
		
		$params = array(
			'produits' => $produits,
			'categories' => $categories, 
			'title' => 'Accueil'
		);
		
		return $this -> render('@Boutique/Produit/index.html.twig', $params);
		
	} // end of indexAction
	

	/*
	 * @Route("admin/produit/add", name="add_produit")
	 */
	//public function addProduitAction(){
	//	$produit = new Produit;

	//	$produit
				// -> setReference('ABC')
				// -> setCategorie('MCloth')
				// -> setTitre('Men cloth')
				// -> setDescription('Men who like style')
				// -> setCouleur('blue')
				// -> setTaille('m')
				// -> setPublic('m')
				// -> setPhoto('pantalon2.jpg')
				// -> setPrix(50.20)
				// -> setStock(20);

		// on récupère le manager pour pouvoir faire une insertion
		//$em = $this -> getDoctrine() -> getManager();

		// on prépare l'insertion
		//$em -> persist($produit);
		//$produit -> setStock(300);

		// on enregistre !!
		//$em -> flush();

		//return new Response("Ok, le produit est enregistré");
		// test : localhost:8000/admin/produit/add

	//} // end of addProduitAction

	/*
	 * @Route("admin/produit/update/{id}", name="update_produit")
	 */
	//public function updateProduitAction($id){

		// on récupère le produit
	//	$em = $this -> getDoctrine() -> getManager();

	//	$produit = $em -> find(Produit::class, $id);

		// on modifie une info quelqu'elle soit
	//	$produit -> setTitre('nouveau titre');

		//  on enregistre :
	//	$em -> persist($produit);
	//	$em -> flush();

		// message :
	//	return new Response('le produit n° '.$produit -> getIdProduit() .'a bien été modifié');
		// TEST : localhost:8000/admin/produit/update/5

	//} // end of updateProduitAction

	/*
	 * @Route("/admin/produit/delete/{id}", name="delete_produit")
	 */
	// public function deleteProduitAction($id, Request $request){

	// 	// on récupère le produit
	// 	$em = $this -> getDoctrine() -> getManager();

	// 	$produit = $em -> find(Produit::class, $id);

	// 	// on suprime : 
	// 	$em -> remove($produit);
	// 	$em -> flush();

	// 	$session = $request -> getSession();
	// 	$session -> getFlashBag() -> add('Success', 'Le produit a été supprime avec succès');

	// 	return $this -> redirectToRoute('show_produit');
		// Test : localhost/admin/produit/delete/21

	//} // end of deleteProduitAction
	
	

	
	/**
	* @Route("/produit/{id}", name="produit")
	* www.boutique.com/produit/12
	*/
	public function produitAction($id){

		// SELECT * FROM produit WHERE id = $id;

		// Méthode 1:
		// on réqupère le repository produit
		$repository = $this -> getDoctrine() -> getRepository(Produit::class);
		$produit = $repository -> find($id);

		// Méthode 2:
		// On récupère l'entityManager
		$em = $this -> getDoctrine() -> getManager();
		// le manager (patron des différent repository) est capable d'intervinir sur toutes les table les tables.
		// FindAll() n'existe sur le manager.
		$produit = $em -> find(Produit::class, $id);
		

		// Suggestions de produit
		// SELECT * FROM produit WHERE categorie = produit['categorie] AND id_produit != $id ORDER BY prix DESC LIMT 5;

		$categorie = $produit -> getCategorie();
		$suggestions = $repository -> findBy(['categorie' => $categorie], ['prix' => 'DESC'],3 ,0);



		$params = array(
			'produit' => $produit, 
			'title' => 'Produit : ' . $produit -> getTitre(),
			'suggestions' => $suggestions
		);
		
		return $this -> render('@Boutique/Produit/produit.html.twig', $params);

	} // end of produitAction
	
	/**
	*@Route("/categorie/{cat}", name="categorie")
	* www.boutique.com/categorie/tshirt
	*/ 
	public function categorieAction($cat){
		// Récupérer les produits (BDD)
		// SELECT * FROM produit WHERE categorie = '$cat' -> fetchAll()
		$repository = $this ->getDoctrine() -> getRepository(Produit::class);

		$produits = $repository -> findBy(['categorie' => $cat]);
		
		// Récupérer les catégories du site
		// SELECT DISTINCT categorie FROM produit
		$categories = $repository -> findAllCategorie();

		$categories = $repository -> findAllCategorie2();
		

		
		
		$params = array(
			'produits' => $produits,
			'categories' => $categories, 
			'title' => 'catégorie ' . $cat
		);
		
		
		return $this->render('@Boutique/Produit/index.html.twig', $params);	
		
	} // end of categorieAction
	
	
} // end of class ProduitController
