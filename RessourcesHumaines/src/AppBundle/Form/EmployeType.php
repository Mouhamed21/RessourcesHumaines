<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EmployeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag',HiddenType::class)
            ->add('nom',TextType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Nom']])
            ->add('prenom',TextType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Prenom']])
            ->add('sexe',ChoiceType::class,[
                'choices' => [
                    'M' => 'M',
                    'F' => 'F',
                ],
                'required'    => true,
                'placeholder' => 'Genre',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('matricule',TextType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Matricule']])
            ->add('mail',EmailType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Email']])
            ->add('telephone',TextType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Tél']])
            ->add('dateNaissance', DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
            ->add('situationMatri', ChoiceType::class, [
                    'choices' => [
                        'Célibataire' => 'Célibataire',
                        'Marié' => 'Marié',
                    ],
                    'required'    => true,
                    'placeholder' => 'Situation Matrimoniale',
                    'attr' => [
                        'class' => 'form-control',
                    ]
                ]
            )
            ->add('dateEmbauche', DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
            ->add('lieuTravail',TextType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Lieu de Travail']])
            ->add('lieuNaissance',TextType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Lieu de Naissance']])
            ->add('cv', FileType::class,array('data_class' => null))
            ->add('tag',HiddenType::class)
            ->add('save',SubmitType::class, array('label'=> 'Enregistrer', 'attr' => array('class' =>'btn btn-primary'
            )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Employe'
        ));
    }
}
