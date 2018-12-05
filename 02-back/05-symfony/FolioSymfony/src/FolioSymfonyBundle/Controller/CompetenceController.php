<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class CompetenceController extends Controller
{
    /**
     * @Route("/competence", name="competence")
     */
    public function competenceAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        return $this->render('@FolioSymfony\Competence\compWorks.html.twig');
    }
}
