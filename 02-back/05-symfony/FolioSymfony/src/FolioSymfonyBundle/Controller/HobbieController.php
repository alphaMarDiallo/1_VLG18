<?php

namespace FolioSymfonyBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HobbieController extends Controller
{
    /**
     * @Route("/hobbie", name="hobbie")
     */
    public function HobbieAction()
    {
        return $this->render('@FolioSymfony\hobbie\hobbie.html.twig');
    }
}
