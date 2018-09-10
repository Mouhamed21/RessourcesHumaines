<?php

namespace AppBundle\Form;

use AppBundle\Entity\TypeContrat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class TypeContratType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag',HiddenType::class)
            ->add('nomtypecontrat', EntityType::class, [
                'class' => TypeContrat::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.nomtypecontrat', 'ASC')
                        ->where('t.tag != 1')
                        ;
                },
                'choice_label' => 'nomtypecontrat',
                'choice_value' => function (TypeContrat $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Type de Contrat',
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
            'data_class' => 'AppBundle\Entity\TypeContrat'
        ));
    }
}
