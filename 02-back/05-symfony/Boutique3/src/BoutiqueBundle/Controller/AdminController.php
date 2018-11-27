<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Commande;
use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Entity\Produit;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use BoutiqueBundle\Form\ProduitType;
use BoutiqueBundle\Form\MembreType;
use BoutiqueBundle\Form\CommandeType;

class AdminController extends Controller
{

    /**
     * @Route("/admin/produit/show/", name="show_produit")
     */
    public function showProduitAction()
    {

        $repository = $this->getDoctrine()->getRepository(Produit::class);

        $produit = $repository->findAll();

        $params = array(
            'produits' => $produit,
            'title' => 'Gestion des produits',
        );

        return $this->render("@Boutique/Admin/show_produit.html.twig", $params);
    }
//-----------------------------------------------------------------
    /**
     * @Route("/admin/produit/delete/{id}", name="delete_produit")
     */
    public function deleteProduitAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $produit = $em->find(Produit::class, $id);

        $session = $request->getSession();
        if ($produit) {

            $em->remove($produit);
            $em->flush();

            $session->getFlashBag()->add('success', 'Le produit à bien été supprimé');
        } else {
            $session->getFlashBag()->add('error', 'Le produit n\'existe pas');

        }

        return $this->redirectToRoute("show_produit");
    }
//-----------------------------------------------------------------

    /**
     * @Route("/admin/commande/show/", name="show_commande")
     */
    public function showCommandeAction()
    {
        $repository = $this->getDoctrine()->getRepository(Commande::class);

        $commandes = $repository->findAll();

        $params = array(
            'commandes' => $commandes,
            'title' => 'Gestion des commandes',
        );

        return $this->render("@Boutique/Admin/show_commande.html.twig", $params);
    }
//-----------------------------------------------------------------
    /**
     * @Route("/admin/commande/delete/{id}", name="delete_commande")
     */
    public function deleteCommandeAction($id, Request $request)
    {
        $session = $request->getSession();
        $session->getFlashBag()->add('success', 'La commande à bien été supprimé');

        return $this->redirectToRoute("show_commande");
    }
//-----------------------------------------------------------------

    /**
     * @Route("/admin/membre/show/", name="show_membre")
     */
    public function showMembreAction()
    {

        $repository = $this->getDoctrine()->getRepository(Membre::class);

        $membres = $repository->findAll();

        $params = array(
            'membres' => $membres,
            'title' => 'Gestion des membres',
        );

        return $this->render("@Boutique/Admin/show_membre.html.twig", $params);
    }
//-----------------------------------------------------------------
    /**
     * @Route("/admin/membre/delete/{id}", name="delete_membre")
     */
    public function deleteMembreAction($id, Request $request)
    {
        $session = $request->getSession();
        $session->getFlashBag()->add('success', 'Le membre à bien été supprimé');

        return $this->redirectToRoute("show_membre");
    }

//-----------------------------------------------------------------
    /**
     *@Route("/admin/produit/add/", name="add_produit")
     *
     */
    public function addProduitAction(Request $request)
    {
		
		// On créé un objet $produit qui sera hydraté par le formulaire : 
        $produit = new Produit; 
		
		// On créé le formulaire : 
        $form = $this->createForm(ProduitType::class, $produit);
		
		// Traitements des infos du formulaire : 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $produit->uploadedPhoto();//Cette fonction va enregistrer le fichier photo, après l'avoir renommer et va également enregistrer dans la propriété photo, le nom de la photo (pour la BDD)

            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Le produit <b>' . $produit->getTitre() . '</b> a été ajouté avec succès !');

            return $this->redirectToRoute('show_produit');

        }

        $params = array(
            'title' => 'Ajouter un produit',
            'produitForm' => $form->createView()
        );

        return $this->render('@Boutique/Admin/form_produit.html.twig', $params);
    }

    /**
     
     * @Route("/admin/produit/update/{id}", name="produit_update")
     */
    public function updateProduitAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->find(Produit::class, $id);

        $form = $this->createForm(ProduitType::class, $produit);
    //Je récupère un formulaire de la classe ProduitType et je le lie à mon objet membre

        $form->handleRequest($request);
    // A partir de maintenant notre oibjet $membre contient les infos saisies dans le formulaire

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($produit);

            if($produit->getFile() != NULL){
                //Avant de traiter la photo du formulaire on vérifie qu'il y en ait une. sinon l'ancienne sera sauvegardé
                $produit->removePhoto();
                $produit->uploadedPhoto();
            }

            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'success',
                'les informations du produit  '.$produit->getTitre().'  a été mises à jour.'
            );

            return $this->redirectToRoute('show_produit');
        }

        $params = array(
            'title' => 'Modification de produit ' .$produit->getIdProduit(),
            'produitForm' => $form->createView()
        );

        return $this->render("@Boutique/admin/form_produit.html.twig", $params);
    }

    /**
     * 
     * @Route("/admin/membre/{id}" name="profil_client")
     */

    public function profilClientAction($id){

        $repo_membre = $this->getDoctrine()->getRepository(Membre::class);
        $membres = $repo_membre->find($id);

        $repo_commande = $this->getDoctrine()->getRepository(Commande::class);
        $commandes = $repo_commande->findBy(['idMembre' => $id]);

        $params = array(
            'membre' => $membre,
            'commandes' => $commandes
        );

        return $this->render("@Boutique/Admin/profil_client.html.twig", $params);
    }

}
