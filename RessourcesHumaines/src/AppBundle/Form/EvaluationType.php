<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\TypeEvaluation;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EvaluationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEvaluation',TextType::class, ['attr'=>['class' =>'form-control','placeholder'=>'Nom']])
            ->add('datedebut',DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
            ->add('datefin',DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
            ->add('description',TextareaType::class, ['attr'=>['class' => 'form-control','placeholder'=>'Une petite description']])
            ->add('typeevaluation',EntityType::class, [
                'class' => TypeEvaluation::class,
                'choice_label' => 'nomTypeEvaluation',
                'placeholder' => 'Choisir Type Evaluation',
                'attr' => [
                    'class' => 'form-control',
                ]])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Evaluation'
        ));
    }
}
