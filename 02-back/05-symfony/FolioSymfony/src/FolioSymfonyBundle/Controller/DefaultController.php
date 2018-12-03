<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    //Page d'accueil du site : ma présentation.
    /**
     * 
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('@FolioSymfony\Home\home.html.twig');
    }
}
