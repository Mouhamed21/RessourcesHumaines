<?php

namespace AppBundle\Form;

use AppBundle\Entity\CategorieEmploye;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CategorieEmployeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag',HiddenType::class)
            ->add('nomcategorieemploye', EntityType::class, [
                'class' => CategorieEmploye::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.nomcategorieemploye', 'ASC')
                        ->where('c.tag != 1')
                        ;
                },
                'choice_label' => 'nomcategorieemploye',
                'choice_value' => function (CategorieEmploye $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Categorie',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('statutemploye',HiddenType::class)
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
            'data_class' => 'AppBundle\Entity\CategorieEmploye'
        ));
    }
}
