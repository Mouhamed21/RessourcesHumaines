<?php

namespace AppBundle\Form;

use AppBundle\Entity\Metier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MetierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag',HiddenType::class)
            ->add('nommetier', EntityType::class, [
                'class' => Metier::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('m')
                        ->orderBy('m.nommetier', 'ASC')
                        ->where('m.tag != 1')
                        ;
                },
                'choice_label' => 'nommetier',
                'choice_value' => function (Metier $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Metier',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('save',SubmitType::Class, array('label'=> 'Enregistrer', 'attr' => array('class' =>'btn btn-primary',
                'style'=>'margin-right:10px;' )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Metier'
        ));
    }
}
