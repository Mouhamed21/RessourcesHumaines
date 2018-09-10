<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\TypeFormation;
use AppBundle\Entity\EtatFormation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FormationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFormation',TextType::class, ['attr'=>['class' =>'form-control','placeholder'=>'Nom Formation']])
            ->add('datedebutformation',DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
            ->add('datefinformation',DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
            ->add('lieuFomation',TextType::class, ['attr'=>['class' =>'form-control','placeholder'=>'Lieu Formation']])
            ->add('typeformation',EntityType::class, [
                'class' => TypeFormation::class,
                'choice_label' => 'nomTypeFormation',
                'placeholder' => 'Choisir Type Formation',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('etatformation',EntityType::class, [
                'class' => EtatFormation::class,
                'choice_label' => 'nomEtatFormation',
                'placeholder' => 'Choisir Etat Formation',
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
            'data_class' => 'AppBundle\Entity\Formation'
        ));
    }
}
