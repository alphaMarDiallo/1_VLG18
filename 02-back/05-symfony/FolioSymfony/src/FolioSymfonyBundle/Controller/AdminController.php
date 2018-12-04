<?php

namespace FolioSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/admin/competence", name="show_competence")
     */
    public function ShowCompetenceAction()
    {
        return $this->render('@FolioSymfony\Admin\show_competence.html.twig');
    }

    /**
     * @Route("/admin/competence", name="show_competence")
     */
    public function ShowWorkAction()
    {
        return $this->render('@FolioSymfony\Admin\show_competence.html.twig');
    }

    /**
     * @Route("/admin/xp", name="show_xp")
     */
    public function ShowXpAction()
    {
        return $this->render('@FolioSymfony\Admin\show_xp.html.twig');
    }


    /**
     * @Route("/admin/schooling", name="show_schooling")
     */
    public function ShowSchoolingAction()
    {
        return $this->render('@FolioSymfony\Admin\show_schooling.html.twig');
    }

    /**
     * @Route("/admin/schooling", name="show_schooling")
     */
    public function ShowLangageAction()
    {
        return $this->render('@FolioSymfony\Admin\show_schooling.html.twig');
    }

    /**
     * @Route("/admin/hobbie", name="show_hobbie")
     */
    public function ShowHobbieAction()
    {
        return $this->render('@FolioSymfony\Admin\show_hobbie.html.twig');
    }

    /**
     * @Route("/admin/user", name="show_user")
     */
    public function ShowUserAction()
    {
        return $this->render('@FolioSymfony\Admin\show_user.html.twig');
    }


}