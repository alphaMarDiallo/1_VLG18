<?php

// namespace FolioSymfonyBundle\Controller;

// use FolioSymfonyBundle\Entity\Projects;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//     class ProjectController extends Controller
//     {
//         /**
//          * @Route("/competence", name="competence")
//          */
//         public function projectAction()
//         {
//             $repository = $this->getDoctrine()->getRepository(Projects::class);

//             $projects = $repository->findAll();

//             $params = [
//                 'projects' => $projects,
//             ];

//             return $this->render('@FolioSymfony\Competence\compWorks.html.twig', $params);
//         }

//     }
