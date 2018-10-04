<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ConjointType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomConjoint',TextType::Class, ['attr'=>['class' => 'form-control','placeholder'=>'Nom']])
            ->add('prenomConjoint',TextType::Class, ['attr'=>['class' => 'form-control','placeholder'=>'Prenom']])
            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
            /*->add('SituationMatrimoniale',ChoiceType::Class, [
                'choices' => [
                    'Célibataire' => 'Célibataire',
                    'Marié' => 'Marié',
                ],
                'required'    => true,
                'placeholder' => 'Situation Matrimoniale',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('raisonInactif',TextType::Class, ['attr'=>['class' => 'form-control','placeholder'=>'Raison Inactif']])*/
            ->add('situationProfessionnelle',TextType::Class, ['attr'=>['class' => 'form-control','placeholder'=>'Situation Professionnelle']])
            ->add('save',SubmitType::Class, array('label'=> 'Enregistrer', 'attr' => array('class' =>'btn btn-primary',
                'style'=>'margin-right:10px;')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Conjoint'
        ));
    }
}
