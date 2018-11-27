<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Membre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\HttpFoundation\Request;

use BoutiqueBundle\Form\MembreType;


class MembreController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction(Request $request)
    {
        //Entity :
        $membre = new Membre; // OBJ vide

        //Formulaire :
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $membre);
        // Le createBuilder a besoin de 2 infos :
        //-> quel genre de formulaire
        //-> à quelle entitité est lié le formulaire

        $formBuilder
            ->add('pseudo', TextType::class)
            ->add('mdp', PasswordType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('civilite', ChoiceType::class, array(
                'choices' => array(
                    'genre' => '',
                    'Homme' => 'm',
                    'Femme' => 'f',
                ),
            ))
            ->add('ville', TextType::class)
            ->add('codePostal', IntegerType::class)
            ->add('adresse', TextType::class)
            ->add('enregistrer', SubmitType::class);

        $form = $formBuilder->getForm();
        // après avoir configuré notre formulaire, on le récupère.

        // traitement des infos du formulaire :
        $form->handleRequest($request);
        //Cette ligne permet de lier notre objet $membre aux infos saisie dans le formulaire
        if ($form->isSubmitted() && $form->isValid()) {

            //if(!empty($_POST))
            //+ toute les vérifs sur les champs

            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'success', 'Félicitation ' . $membre->getPseudo() . ' Vous êtes inscrit '
            );
            return $this->redirectToRoute('connexion');
        };

        //Vue:
        $params = array(
            'membreForm' => $form->createView(),
            'title' => 'inscription'
        );

        return $this->render('@Boutique/Membre/form.html.twig', $params);
    }

    /**
     * @Route("/connexion", name="connexion")
     *
     *
     */

    public function connexionAction()
    {
        $params = array(

        );

        return $this->render(
            '@Boutique/Membre/connexion.html.twig', $params
        );
    }



    /**
     * 
     * @Route("/profil/update", name="profil_update")
     */
    public function updateProfilAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $membre = $em->find(Membre::class,'2');

    $form = $this->createForm(MembreType::class, $membre);
    //Je récupère un formulaire de la classe MembreType et je le lie à mon objet membre

    $form->handleRequest($request);
    // A partir de maintenant notre oibjet $membre contient les infos saisies dans le formulaire

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($membre);
            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'success', 'les informations du profil ont été mises à jour'
            );

            return $this->redirectToRoute('connexion');
        }

        $params = array(
            'title' => 'Modification de profil',
            'membreForm' => $form->createView()
        );
    
        return $this->render("@Boutique/Membre/form.html.twig", $params);
    }

}
