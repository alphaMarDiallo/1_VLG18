<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LangageController extends Controller
{
    /**
     * @Route("/langage", name="langage")
     */
    public function langageAction()
    {
        return $this->render('@FolioSymfony\expereience\experience.html.twig');
    }
}
