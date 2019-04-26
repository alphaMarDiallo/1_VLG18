<?php

namespace FolioSymfonyBundle\Controller;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request; 

use FolioSymfonyBundle\Entity\User;
use FolioSymfonyBundle\Entity\Competences;

use FolioSymfonyBundle\Form\CompetencesType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;



class AdminController extends Controller
{
    /** 
     * @Route("/admin/profil", name="show_profil")
     */
    public function showProfilAction()
    {

        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findAll();

        $params = array(
            'users' => $users,
            'title' => 'gestion admin',
        );

        return $this->render("@FolioSymfony\admin\profil.html.twig",$params);
    }

    /**
     * @Route("/admin/show/competence", name="show_competence")
     */
    public function showCompetenceAction(){

        $repository = $this->getDoctrine()->getRepository(Competences::class);
        $competences = $repository->findAll();

        $params = array(
            'competences' =>$competences 
        );

        return $this->render("@FolioSymfony/admin/show_competence.html.twig",$params);
    }
    /**
     * @Route("/admin/add/competence", name="add_competence")
     */
    public function addCompetenceAction()
    {
       $competences = new Competences;

       $formBuilder = $this->get('form.factory')->createBuilder(CompetencesType::class, $competences);

       $formBuilder
        ->add('cptechnology', TextType::class)
        ->add('cplevel', IntegerType::class);

        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($competences);
            $em->flush();

            $request
                ->getSession()
                ->getFlashBag()
                ->add('succes', 'Une nouvelle compétence à été enregistré.');
        }

        $params = array(
            'competenceForm' =>$form->createView(),
        );

        return $this->render("@FolioSymfony/Admin/competenceForm.html.twig", $params);
    }
}
