<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Formateur;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use AppBundle\Entity\OffreFormation;
class FormateurRetenuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('formateur')
            //->add('offreformation')
            ->add('Formateur', EntityType::class, [
                'class' => Formateur::class,
               
                'choice_label' => 'nomformateur',
                'choice_value' => function (Formateur $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Formateur',
                'attr' => [
                    'class' => 'form-control',
                ]])
                /*->add('save', SubmitType::Class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-right:10px;')))*/
            ->getForm()
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\FormateurRetenu'
        ));
    }
}
