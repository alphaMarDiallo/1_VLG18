<?php

namespace FolioSymfonyBundle\Form;

use Symfony\Component\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\emailType;

use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType{

    /**
     * 
     * {@inheritdoc}
     */
    public function buildForm(formBuilderInterface $builder, array $option){
        $builder 
            ->add('Prenom', TextType::class,array(
                'required' => false,
                'constraints' => array(
                    new Assert \NotBlank(array (
                        'message' => 'Veuillez renseigner Votre Prénom',
                    )),
                    new Assert \Length(array(
                        'min' => 3,
                        'minMessage' => 'Votre Prenom doit contenir au minimun 3 caractères',
                        'max' => 30,
                        'message' => 'Votre Prenom doit contir au maximum 30 caractères',
                    )),
                    new Assert \Regex(array(
                        'pattern' => '/^[a-zA-Z-._0-9]+$/',
                        'message' => 'Les lettres et les chiffres sont acceptés',
                    )),
                    'attr' => array(
                        'placeholder'=>'Prenom',
                        'class'=>'form-control',
                    )

                )
            ))
        
            ->add('Nom', TextType::class,array(
                'required' => false,
                'contraints' => array(
                    new Assert \NotBlank(array(
                        'message' => 'Veuillez renseigner votre nom',
                    )),
                    new Assert \Length(array(
                        'min' => 3,
                        'minMessage' => 'Votre nom doit contenir au moins 3 caractères',
                        'max' => 20,
                        'message' => 'Votre nom doit avoir au maximum 30 caractères',
                    )),
                    new Assert \Regex(array(
                        'pattern' => '/^[a-zA-Z-._0-9]+$/', 
                        'message' => 'Les lettres et les chiffres sont acceptés',
                    )),
                    'attr' => array(
                        'placeholder'=> 'Nom',
                        'class' => 'form-control',
                    )
                ) 
            ))

            ->add('@email', EmailType::class, array(
                'attr' => array(
                    'placeholder'=> 'votre@email.com',
                ) 
            ))
            ->add('body', TextareaType::class, array(
                'attr'=> array(
                    'placeholder' =>'votre message',
                    'class' => 'tinymce',
                ) 
            ))
        
    }

    /**
     * 
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(      
            'data-class' => 'FolioSymfonyBundle\Entity\Contacts'
        ));
    }

    /**
     * 
     * {@inheritdoc}
     */
    public function getBlockPrefix(){
        return 'foliosymfonybundle_contacts';
    }
}