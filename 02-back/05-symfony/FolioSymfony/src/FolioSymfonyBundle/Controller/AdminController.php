<?php

namespace FolioSymfonyBundle\Controller;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use FolioSymfonyBundle\Entity\Competences;
use FolioSymfonyBundle\Entity\Schooling;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FolioSymfonyBundle\Form\CompetencesType;

class AdminController extends Controller
{

    /**
     *
     * @Route("/admin/profil", name="profil")
     */
    public function ProfilAdminAction()
    {

        return $this->render("@FolioSymfony/Admin/profil.html.twig");
    }

    /*------------------------------ gestion competence ------------------------------*/
    /**
     * @Route("/admin/show/competence", name="show_competence")
     *
     */
    public function ShowCompetenceAction()
    {
        $repository = $this->getDoctrine()->getRepository(Competences::class);
        $competences = $repository->findAll();

        $params = array(
            'competences' => $competences,
        );

        return $this->render("@FolioSymfony/Admin/show_competence.html.twig", $params);
    }
    /**
     * @Route("/admin/delete/competence", name="delete_competence")
     *
     */
    public function DeleteCompetenceAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $competences = $em->find(Competences::class, $id);
        $session = $request->getSession();

        if ($competences) {
            $em->remove($competences);
            $em->flush();

            $session->getFlashbag()->add('success', 'La competence a été suprimé');
        }

        return $this->redirectToRoute("@FolioSymfony/Admin/show_competence.html.twig");
    }

    /**
     * @Route("/admin/update/competence", name="update_competence")
     *
     */
    public function UpdateCompetenceAction($id, Request $request)
    {
        // $repository->$this->getDoctrine()->gertRepository(Competences::class);
        // $competences = $repository->find($id);

        return $this->redirectToRoute("@FolioSymfony/Admin/show_competence.html.twig");
    }



    /**
     *
     * @Route("/admin/show/schooling", name="show_schooling")
     */
    public function ShowSchoolingAction()
    {
        return $this->render('@FolioSymfony/Admin/show_schooling.html.twig');
    }

    /**
     *
     * @Route("/admin/show/language", name="show_language")
     */
    public function ShowLanguageAction()
    {
        return $this->render('@FolioSymfony/Admin/show_language.html.twig');
    }

    /**
     *
     * @Route("/admin/show/xp", name="show_xp")
     */
    public function ShowXpAction()
    {
        return $this->render('@FolioSymfony/Admin/show_xp.html.twig');
    }

    /**
     * @Route("/admin/show/hobbie", name="show_hobbie")
     */
    public function ShowHobbieAction()
    {

        return $this->render("@FolioSymfony/Admin/show_hobbie.html.twig");
    }
    /**
     * @Route("/admin/show/user", name="show_user")
     */
    public function ShowUserAction()
    {

        return $this->render("@FolioSymfony/Admin/show_user.html.twig");
    }

}
