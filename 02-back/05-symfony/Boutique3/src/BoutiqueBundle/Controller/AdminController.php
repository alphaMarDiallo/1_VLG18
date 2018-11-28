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
     * @Route("/admin/show_produit", name="show_produit")
     */
    public function showProduitsAction()
    {
        $repository = $this -> getDoctrine() -> getRepository(Produit::class);
		$produits = $repository -> findAll();

        $params = array(
            'produits' => $produits,
            'title' => 'Gestion Des Produits'
		);
		
		return $this -> render('@Boutique/Admin/show_produits.html.twig', $params);

    } // end of showProduitsAction


    /**
     * @Route("/admin/delete_produit/{id}", name="delete_produit")
     */
    public function deleteProduitAction($id, Request $request)
    {
        $em = $this -> getDoctrine() -> getManager();

        $produit = $em -> find(Produit::class, $id);

        $session = $request -> getSession();

        if($produit){

            $em -> remove($produit);
            $em -> flush();

            $session -> getFlashBag() -> add('success', 'Le produit a bien été suprimé');
        }
        else{
            $session -> getFlashBag() -> add('error', 'Le produit n\'existe pas');
        }



        return $this -> redirectToRoute('show_produit');

    } // end of deleteProduitAction

    
    /**
     * @Route("/admin/show_commande", name="show_commande")
     */
    public function showCommandeAction()
    {

        $repository = $this -> getDoctrine() -> getRepository(Commande::class);

		$commandes = $repository -> findAll();

        $params = array(
			'commandes' => $commandes,
			'title' => 'Gestion Des commandes'
		);
		
		return $this -> render('@Boutique/Admin/show_commandes.html.twig', $params);

    } // end of showCommandeAction

    
    /**
     * @Route("/admin/delete_commande/{id}", name="delete_commande")
     */
    public function deleteCommandeAction($id, Request $request)
    {
        $em = $this -> getDoctrine() -> getManager();
        $commande = $em -> find(Commande::class);
        $session = $request -> getSession();

        if($commande){

            $em -> remove($commande);
            $em -> flush();
            $session -> getFlashBag() -> add('success', 'Le commande a bien été suprimé');
        }
        else{
            $session -> getFlashBag() -> add('error', 'La commande n\'existe pas');
        }

        return $this -> redirectToRoute('show_commandes');

    } // end of showCommandeAction


    /**
     * @Route("/admin/show_membre", name="show_membre")
     */
    public function showMembreAction()
    {

        $repository = $this -> getDoctrine() -> getRepository(Membre::class);
		$membres = $repository -> findAll();

        $params = array(
            'membres' => $membres,
            'title' => 'Gestion des membres'
		);
		
		return $this -> render('@Boutique/Admin/show_membres.html.twig', $params);

    } // end of showMembreAction

    /**
     * @Route("/admin/delete_membre/{id}", name="delete_membre")
     */
    public function deleteMembreAction($id, Request $request)
    {
        $session = $request -> getSession();
        $session -> getFlashBag() -> add('success', 'Le membre a bien été suprimé');

        return $this -> redirectToRoute('show_membres');

    } // end of deleteMembreAction

    
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
            $produit -> uploadPhoto();
            // Cette function va enregistrer le fichier photo, apres l'avoir renommer, et va également, enregistrer dans la propriéte photo, le nom de la photo (pour la BDD)
			$em -> persist($produit);
			
			$em -> flush();
				$request -> getSession() -> getFlashBag() -> add('success', 'Le produit <strong>' . $produit -> getTitre() . '</strong> a été ajouté avec succès !');
				
				return $this -> redirectToRoute('show_produit');
			
		}
		
		$params = array(
			'title' => 'Ajouter un produit',
			'produitForm' => $form -> createView()
		);
		
		return $this -> render('@Boutique/Admin/form_produit.html.twig', $params);
    }
    

    /**
     * @Route("/admin/produit/update{id}", name="update_produit")
     */
    public function updateProduitAction($id, Request $request){

        // je récupère les infos du produit à modifier pour le passer au formulaire :
        $repository = $this -> getDoctrine() -> getRepository(Produit::class);
        $produit = $repository -> find($id);

        // je crée mon formulaire en le liant au produit à modifier :
        $form = $this -> createForm(ProduitType::class, $produit);

        // On hydrate l'objet produit des infos saisie dans le formulaire :
        $form -> handleRequest($request);

        // Traitements des infos du formulaire : 
        if($form -> isSubmitted() && $form -> isValid()){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($produit);

            if($produit -> getFile() !=NULL){
                $produit -> removePhoto();
                $produit -> uploadPhoto();
            }

            $em -> flush();

            $request -> getSession() -> getFlashBag() -> add('success', 'Le produit <strong>' . $produit -> getTitre() . '</strong> a été modifié avec succès !');
				
			return $this -> redirectToRoute('show_produit');
        }

        // affichage de la vue :
        $params = array(
			'title' => 'Modifier le produit n° ' . $produit -> getIdProduit(),
			'produitForm' => $form -> createView()
		);
		
		return $this -> render('@Boutique/Admin/form_produit.html.twig', $params);

    }

    /**
     * @Route("/admin/membre/{id}", name="profil_client")
     */
    public function profilClientAction($id){
        
        $repo_membre = $this -> getDoctrine() -> getRepository(Membre::class);
        $membre = $repo_membre -> find($id);

        // $repo_commande = $this -> getDoctrine() -> getRepository(Commande::class);
        // $commandes = $repo_commande -> findBy(['idMembre' => $id]);

        $params = array(
            'membre' => $membre,
            // 'commandes' => $commandes ->getCommandes()
        );

        // Avec l'association mapping de doctrine, ici il est plus nécessaire de récupérer les infos des commandes, elle sont déjà liées au membre

        return $this -> render('@Boutique/Admin/profil_client.html.twig', $params);
    }

    /**
     * @Route("/admin/commande/add", name="add_commande")
     */
    public function addCommandAction(Request $request){
        $commande = new Commande;
        $form = $this -> createForm(CommandeType::class, $commande);
        $form -> handleRequest($request);


        if($form -> isSubmitted() && $form -> isValid()){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($commande);
            $em -> flush();

            $request -> getSession() -> getFlashBag() -> add('success', 'La commande' . $commande -> getIdCommande() . ' a été joutée avec succès !');
				
			return $this -> redirectToRoute('show_commande');
        }

        // affichage de la vue :
        $params = array(
			'commandeForm' => $form -> createView(),
			'title' => 'Ajouter une commande'
		);
		
		return $this -> render('@Boutique/Admin/form_command.html.twig', $params);


    }





} //end of AdminController