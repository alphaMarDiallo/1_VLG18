<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class XpController extends Controller
{
    /**
     * @Route("/xp", name="xp")
     */
    public function XpAction()
    {
        return $this->render('@FolioSymfony\xp\xp.html.twig');
    }
}
