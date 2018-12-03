<?php

namespace BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use BoutiqueBundle\Entity\Membre; 
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


use BoutiqueBundle\Form\MembreType;


class MembreController extends Controller
{

	/**
	* @Route("/inscription/", name="inscription")
	*
	*/
	public function inscriptionAction(Request $request){
		
		// Entity :
		$membre = new Membre; //obj vide
		
		
		// Formulaire :  
		$formBuilder = $this -> get('form.factory') -> createBuilder(FormType::class, $membre);
		// Le createBuilder a besoin de deux infos: Quel genre de formulaire, et à quelle entité est lié mon formulaire...
		
		$formBuilder 
			-> add('pseudo', TextType::class)
			-> add('mdp', PasswordType::class)
			-> add('nom', TextType::class)
			-> add('prenom', TextType::class)
			-> add('email', EmailType::class)
			-> add('civilite', ChoiceType::class, array(
				'choices' => array(
					'Homme' => 'm',
					'Femme' => 'f'
				)
			))
			-> add('ville', TextType::class)
			-> add('codePostal', IntegerType::class)
			-> add('adresse', TextType::class)

			-> add('enregistrer', SubmitType::class);
			
		$form = $formBuilder -> getForm();
		// Après avoir configurer notre formulaire, on le récupère. 
		
		
		// Traitement des infos du formulaire :
		$form -> handleRequest($request);
		// Cette ligne permet de lier notre objet $membre, aux infos saisie dans le formulaire. 
		
		if($form -> isSubmitted() && $form -> isValid()){
			// if(!empty($_POST))
			// + toutes les vérifs sur les champs
		
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($membre);
			$em -> flush();
			
			$request -> getSession() -> getFlashBag() -> add('success', 'Félicitations ' . $membre -> getPseudo() . ', vous êtes inscrit !');
			
			return $this -> redirectToRoute('connexion');
		}

		// Vue : 
		$params = array(
			'membreForm' => $form -> createView(),
			'title' => 'Inscription'
		);
		
		return $this -> render('@Boutique/Membre/form.html.twig', $params);
	}

	/**
	* @Route("/connexion/", name="connexion")
	*
	*/
	public function connexionAction(Request $request){
		
		$auth = $this -> get('security.authentication_utils');
		
		$lastUsername 	= $auth -> getLastUserName();
		$session 		= $request -> getSession();		
		$error 			= $auth -> getLastAuthenticationError();
		
		// On récupère 3 infos : 
		// - Le login de l'utilisateur si mauvais MDP
		// - La session pour les flashbag
		// - Les erreurs de connexion
		
		
		if(!empty($error)){
			$session -> getFlashBag() -> add('error', 'Problème d\'identifiant !');
		}
		
		$params = array(
			'lastUsername' => $lastUsername,
			'title' => 'Connexion'
		);
		
		return $this -> render('@Boutique/Membre/connexion.html.twig', $params);
	}
	
	/**
	* @Route("/deconnexion/", name="deconnexion")
	*
	*/
	public function deconnexionAction(){}
	
	
	/**
	* @Route("/login_check", name="login_check")
	*
	*/
	public function login_checkAction(){}
	
	
	
	
	
	
	
	
	/**
	* @Route("/profil/update/", name="profil_update")
	*
	*/
	public function updateProfilAction(Request $request){
		
		$em = $this -> getDoctrine() -> getManager();
		$membre = $em -> find(Membre::class, '1');
		
		$form = $this -> createForm(MembreType::class, $membre);
		// Je récupère un formulaire de la class MembreType et je le lie à mon objet membre. 
		
		$form -> handleRequest($request);
		// A Partir de maintenant notre objet $membre contient les infos saisies dans le formulaire. 
		
		if($form -> isSubmitted() && $form -> isValid()){
			
			$em -> persist($membre);
			$em -> flush();
			
			$request -> getSession() -> getFlashBag() -> add('success', 'les informations du profil ont été mises à jour');
			
			return $this -> redirectToRoute('connexion');
		}
		
		$params = array(
			'title' => 'Modification de profil',
			'membreForm' => $form -> createView()
		);
		return $this -> render('@Boutique/Membre/form.html.twig', $params);
	}
	
	



}