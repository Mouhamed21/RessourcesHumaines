<?php

namespace AppBundle\Form;

use AppBundle\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ServiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag',HiddenType::class)
            ->add('nomservice', EntityType::class, [
                'class' => Service::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nomservice', 'ASC')
                        ->where('s.tag != 1')
                        ;
                },
                'choice_label' => 'nomservice',
                'placeholder' => 'Choisir Service',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('departement',HiddenType::class)
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
            'data_class' => 'AppBundle\Entity\Service'
        ));
    }
}
