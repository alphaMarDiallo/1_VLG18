<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormationController extends Controller
{
    /**
     * @Route("/formation", name="formation")
     */
    public function formationAction()
    {
        return $this->render('@FolioSymfony\formation\formation.html.twig');
    }
}
