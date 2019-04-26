<?php

namespace FolioSymfonyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormConfigBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Validator\Constraints as Assert;



class CompetencesType extends AbstractType{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Competence', TextType::class)
            ->add('Niveau', IntegerType::class)
            ->add('Enregistrer', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver){
        
        $resolver->setDefaults(array(
           'data_class'=>'FolioSymfonyBundle\Entity\Competences'

        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(){
        return 'foliosymfonybundle_competences';
    }
    
    
}