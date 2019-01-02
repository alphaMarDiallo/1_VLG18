<?php

namespace FolioSymfonyBundle\Controller;

use FolioSymfonyBundle\Entity\Contacts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function ContactAction(Request $request)
    {
        $contact = new Contacts;

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $contact);

        $formBuilder
            ->add('ctfirstname', TextType::class)
            ->add('ctlastname', TextType::class)
            ->add('ctemail', EmailType::class)
            ->add('ctmessage', TextType::class);

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $request
                ->getSession()
                ->getFlashBag()
                ->add('succes', 'Votre message à bien étét enregistré.');

        }

        $params = array(
            'contactForm' => $form->createView(),
        );

        return $this->render('@FolioSymfony\Contact\contact.html.twig', $params);
    }
}
