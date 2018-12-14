<?php

namespace FolioSymfonyBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FolioSymfonyBundle\Entity\Xp;
// use Doctrine\ORM\EntityManagerInterface;


class XpController extends Controller
{
    /**
     * @Route("/xp", name="xp")
     */
    public function XpAction()
    {
        $repository= $this->getDoctrine()->getRepository(Xp::class);
        $xps = $repository->findAll();
        
        $params = [
            'xps' => $xps,
        ];

        return $this->render('@FolioSymfony\xp\xp.html.twig', $params);
    }
}
