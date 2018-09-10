<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Nationalite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NationaliteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id',HiddenType::class)
            ->add('nomNationalite', EntityType::class, [
                'class' => Nationalite::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('n')
                        ->orderBy('n.nomNationalite', 'ASC')
                        ->where('n.tag != 1')
                        ;
                },
                'choice_label' => 'nomNationalite',
                'choice_value' => function (Nationalite $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Nationalité',
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
            'data_class' => 'AppBundle\Entity\Nationalite'
        ));
    }
}
