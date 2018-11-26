<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Commande;
use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Entity\Produit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

}
