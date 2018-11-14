<?php

namespace POLES\TestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@POLESTest/Default/index.html.twig');
    }

    /**
     * @Route("/bonjour/{prenom}", name="bonjour")
     */
    public function bonjourAction(/*$prenom, Request $request */)
    {
        //echo 'Bonjour';
        //return new Response('Bonjour');
        //    return new Response('Bonjour '. $prenom);
        //$age = $request->query->get('age');

        //$params = array(
           // 'prenom' => $prenom,
           // 'age' => $age,
       // );
        return $this->render("@POLESTest/Test/hello.html.twig"/*, $params*/);

    }

    /**
     * @Route("/redirect")
     */

    public function redirectAction()
    {
        $url = $this->get('router')->generate('bonjour');
        //l'argument 'bonjour' étant le nom de la route

        return new RedirectResponse($url);
    }

    /**
     * @Route("/redirect2")
     */
    public function redirect2Action(){
        return $this->redirectToRoute('bonjour');
        //l'argument 'bonjour' étant le nom de la route
    }

    /**
     * @Route("/message")
     */
    public function messageAction(Request $request){
        $session = $request->getSession();
        //on récupère le contenu de $_session sous la forme d'un objet session

        $session->getFlashBag()->add('test', 'Voici le message 1');
        $session->getFlashBag()->add('test', 'Voici le message 2');
        return $this->render("@POLESTest/Test/message.html.twig");
    }
}
