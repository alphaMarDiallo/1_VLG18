<?php

namespace FolioSymfonyBundle\Controller;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request; 

use FolioSymfonyBundle\Entity\User;


class AdminController extends Controller
{
    /***
     * @Route("/admin/profil", name="show_profil")
     */
    public function showProfilAction()
    {

        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findAll();

        $params = array(
            'users' => $users,
            'title' => 'gestion admin',
        );

        return $this->render("@FolioSymfony\Admin\profil.html.twig", $params);
    }
}
