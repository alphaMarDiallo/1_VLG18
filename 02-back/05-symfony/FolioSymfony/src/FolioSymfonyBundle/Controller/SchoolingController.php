<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SchoolingController extends Controller
{
    /**
     * @Route("/schooling", name="schooling")
     */
    public function SchoolingAction()
    {
        return $this->render('@FolioSymfony\schooling\schooling.html.twig');
    }
}
