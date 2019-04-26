<?php

namespace FolioSymfonyBundle\Controller;



use FolioSymfonyBundle\Entity\Competences;
use FolioSymfonyBundle\Entity\Projects;
use Symfony\Component\Routing\Annotation\Route;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompetenceController extends Controller
{
    /**
     * @Route("/competence", name="competence")
     */
    public function competenceAction()
    {
        $repository = $this->getDoctrine()->getRepository(Competences::class);
        $repository2 = $this->getDoctrine()->getRepository(Projects::class);

        $competences = $repository->findAll();
        $projects = $repository2->findAll();

        $params = array(
            'competences' => $competences,
            'projects' => $projects
        );

        return $this->render('@FolioSymfony\Competence\compWorks.html.twig', $params);
    }

  

}
