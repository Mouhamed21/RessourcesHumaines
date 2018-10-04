<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class OffreFormationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Nom']])
            ->add('budget',IntegerType::class,['attr'=>['class' => 'form-control','placeholder'=>'Buget']])
            ->add('theme',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Theme']])
            ->add('datedebutoffre',DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                
                
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                    
                ]
            ])
            ->add('datefinoffre',DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\OffreFormation'
        ));
    }
}
