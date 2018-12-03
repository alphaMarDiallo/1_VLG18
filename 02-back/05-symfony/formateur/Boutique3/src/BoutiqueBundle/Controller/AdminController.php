<?php

namespace BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use BoutiqueBundle\Entity\Produit; 
use BoutiqueBundle\Entity\Membre; 
use BoutiqueBundle\Entity\Commande; 

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request; 

use BoutiqueBundle\Form\ProduitType;
use BoutiqueBundle\Form\MembreType;
use BoutiqueBundle\Form\CommandeType;

class AdminController extends Controller
{
	
	
	/**
	*@Route("/admin/produit/show/", name="show_produit")
	*
	*/
	public function showProduitAction(){
		
		$repository = $this -> getDoctrine() -> getRepository(Produit::class);
		
		$produits = $repository -> findAll();
		
		$params = array(
			'produits' => $produits,
			'title' => 'Gestion des produits'
		);
		
		return $this -> render("@Boutique/Admin/show_produit.html.twig", $params);
	}
	
	/**
	*@Route("/admin/produit/delete/{id}", name="delete_produit")
	*
	*/
	public function deleteProduitAction($id, Request $request){
		
		$em = $this -> getDoctrine() -> getManager();	
		$produit = $em -> find(Produit::class, $id);	
		$session = $request -> getSession();
		
		if($produit){
			
			$em -> remove($produit);
			$em -> flush();
			
			$session -> getFlashBag() -> add('success', 'Le produit a bien été supprimé');	
		}
		else{
			$session -> getFlashBag() -> add('error', 'Le produit n\'existe pas');	
		}
		
		return $this -> redirectToRoute("show_produit");
	}
	
	/**
	*@Route("/admin/commande/show/", name="show_commande")
	*
	*/
	public function showCommandeAction(){
		
		$repository = $this -> getDoctrine() -> getRepository(Commande::class);
		
		$commandes = $repository -> findAll();
		
		$params = array(
			'commandes' => $commandes,
			'title' => 'Gestion des commandes'
		);
		
		return $this -> render('@Boutique/Admin/show_commande.html.twig', $params);
	}
	
	/**
	*@Route("/admin/commande/delete/{id}", name="delete_commande")
	*
	*/
	public function deleteCommandeAction($id, Request $request){

		$em = $this -> getDoctrine() -> getManager();	
		$commande = $em -> find(Commande::class, $id);	
		$session = $request -> getSession();
		
		if($commande){
			
			$em -> remove($commande);
			$em -> flush();
			
			$session -> getFlashBag() -> add('success', 'La commande a bien été supprimé');	
		}
		else{
			$session -> getFlashBag() -> add('error', 'La commande n\'existe pas');	
		}
		
		return $this -> redirectToRoute("show_commande");
		
	}
	
	/**
	*@Route("/admin/membre/show/", name="show_membre")
	*
	*/
	public function showMembreAction(){
		$repository = $this -> getDoctrine() -> getRepository(Membre::class);
		
		$membres = $repository -> findAll();
		
		$params = array(
			'membres' => $membres,
			'title' => 'Gestion des membres'
		);
		
		return $this -> render('@Boutique/Admin/show_membre.html.twig', $params);	
	}
	
	/**
	*@Route("/admin/membre/delete/{id}", name="delete_membre")
	*
	*/
	public function deleteMembreAction($id, Request $request){
		
		$em = $this -> getDoctrine() -> getManager();	
		$membre = $em -> find(membre::class, $id);	
		$session = $request -> getSession();
		
		if($membre){
			
			$em -> remove($membre);
			$em -> flush();
			
			$session -> getFlashBag() -> add('success', 'Lmembre a bien été supprimé');	
		}
		else{
			$session -> getFlashBag() -> add('error', 'Le membre n\'existe pas');	
		}
		
		return $this -> redirectToRoute("show_membre");
	}
	
	
	/**
	*@Route("/admin/produit/add/", name="add_produit")
	*
	*/
	public function addProduitAction(Request $request){
		
		// On créé un objet $produit qui sera hydraté par le formulaire : 
		$produit = new Produit; 
		
		// On créé le formulaire : 
		$form = $this -> createForm(ProduitType::class, $produit);
		
		// Traitements des infos du formulaire : 
		$form -> handleRequest($request);
		
		if($form -> isSubmitted() && $form -> isValid()){
			
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($produit);
			$produit -> uploadPhoto();
			// Cette fonction va enregistrer le fichier photo, après l'avoir renommer, et va également, enregistrer dans la propriété photo, le nom de la photo (pour la BDD)
			
			$em -> flush();
		
			$request -> getSession() -> getFlashBag() -> add('success', 'Le produit ' . $produit -> getTitre() . ' a été ajouté avec succès !');
			
			return $this -> redirectToRoute('show_produit');

			
			
			
			
		}
		
		$params = array(
			'title' => 'Ajouter un produit',
			'produitForm' => $form -> createView()
		);
		
		return $this -> render('@Boutique/Admin/form_produit.html.twig', $params);
	}
	
	
	/**
	*@Route("/admin/produit/update/{id}", name="update_produit")
	*
	*/
	public function updateProduitAction($id, Request $request){
		
		// Je récupère les infos du produit à modifier pour le passer au formulaire : 
		$repository = $this -> getDoctrine() -> getRepository(Produit::class); 
		$produit = $repository -> find($id);
		$old = $produit -> getFile();
		
		// je créé mon formulaire en le liant au produit à modifier : 
		$form = $this -> createForm(ProduitType::class, $produit);
		
		// On hydrate l'objet produit des infos saisies dans le formulaire : 
		$form -> handleRequest($request);
		
		// traitement des infos du formulaire : 
		if($form -> isSubmitted() && $form -> isValid()){
			
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($produit);
			
			if($produit -> getFile() != NULL){
				//Avant de traiter la photo du formulaire on vérifie qu'il y en ait une. Sinon l'ancienne photo sera sauvegardée. 
				$produit -> removePhoto();
				$produit -> uploadPhoto();
			}
			
			
			$em -> flush();
			
			$request -> getSession() -> getFlashBag() -> add('success', 'Le produit ' . $produit -> getTitre() . ' a été modifié avec succès');
			return $this -> redirectToRoute('show_produit');
		}
		
		// affichage de la vue : 
		$params = array(
			'title' => 'Modifier le produit n°' . $produit -> getIdProduit(),
			'produitForm' => $form -> createView()
		);
		
		return $this -> render("@Boutique/Admin/form_produit.html.twig", $params);
	}
	
	
	/**
	*@Route("/admin/membre/{id}", name="profil_client")
	*/
	public function profilClientAction($id){
		
		$repo_membre = $this -> getDoctrine() -> getRepository(Membre::class);
		$membre = $repo_membre -> find($id);
		
		//$repo_commande = $this -> getDoctrine() -> getRepository(Commande::class);
		//$commandes = $repo_commande -> findBy(['idMembre'=> $id ]);
		
		$params = array(
			'membre' => $membre,
			//'commandes' => $membre -> getCommandes()
		);
		
		// Avec l'association mapping de Doctrine, ici il est plus nécessaire de récupérer les infos des commandes, elles sont déjà liées au membre. 
		
		return $this -> render("@Boutique/Admin/profil_client.html.twig", $params);
	}
	
	
	/**
	*@Route("/admin/commande/add", name="add_commande")
	*/
	public function addCommandeAction(Request $request){
		
		$commande = new Commande;
		$form = $this -> createForm(CommandeType::class, $commande);
		$form -> handleRequest($request);
		
		if($form -> isSubmitted() && $form -> isValid()){
			
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($commande);
			$em -> flush();
			
			$request -> getSession() -> getFlashBag() -> add('success', 'La commande' . $commande -> getIdCommande() . ' a été ajoutée avec succès');
			
			return $this -> redirectToRoute('show_commande');
		}
		
		$params = array(
			'commandeForm' => $form -> createView(),
			'title' => 'Ajouter une commande'
		);
		
		return $this -> render("@Boutique/Admin/form_commande.html.twig", $params);
	}
	
	
	
	
	
}


