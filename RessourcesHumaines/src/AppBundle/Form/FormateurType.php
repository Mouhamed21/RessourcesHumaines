<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FormateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomformateur',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Nom']])
            ->add('prenomformateur',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Prénom']])
            ->add('fonction',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Fonction']])
            ->add('telephone',IntegerType::class,['attr'=>['class' => 'form-control','placeholder'=>'Tél']])
            ->add('email',EmailType::class,['attr'=>['class' => 'form-control','placeholder'=>'Email']])
            ->add('boitepostale',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Code Postale']])
            ->add('codereference',IntegerType::class,['attr'=>['class' => 'form-control','placeholder'=>'Code Référence']])
            ->add('themeseminaire',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Theme Séminaire']])
            ->add('tarifsemaine',MoneyType::class,['attr'=>['class' => 'form-control','placeholder'=>'Tarif']])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Formateur'
        ));
    }
}
