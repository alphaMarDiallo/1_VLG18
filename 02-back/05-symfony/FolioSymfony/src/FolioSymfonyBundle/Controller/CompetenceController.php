<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompetenceController extends Controller
{
    /**
     * @Route("/competence", name="competence")
     */
    public function competenceAction()
    {
        return $this->render('@FolioSymfony\Competence\compWorks.html.twig');
    }
}
