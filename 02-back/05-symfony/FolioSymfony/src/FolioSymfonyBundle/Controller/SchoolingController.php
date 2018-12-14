<?php

namespace FolioSymfonyBundle\Controller;

use FolioSymfonyBundle\Entity\Languages;
use FolioSymfonyBundle\Entity\Schooling;

use Symfony\Component\Routing\Annotation\Route;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SchoolingController extends Controller
{
    /**
     * @Route("/schooling", name="schooling")
     */
    public function SchoolingAction()
    {
        $repository = $this->getDoctrine()->getRepository(Schooling::class);
        $repository2 = $this->getDoctrine()->getRepository(Languages::class);

        $schoolings = $repository->findAll();
        $languages = $repository2->findAll();

        $params = array(
            'schoolings' => $schoolings,
            'languages' => $languages,
        );
        return $this->render('@FolioSymfony\schooling\schooling.html.twig', $params);
    }
}
