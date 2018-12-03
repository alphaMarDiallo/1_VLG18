<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExperienceController extends Controller
{
    /**
     * @Route("/experience", name="experience")
     */
    public function experienceAction()
    {
        return $this->render('@FolioSymfony\experience\experience.html.twig');
    }
}
