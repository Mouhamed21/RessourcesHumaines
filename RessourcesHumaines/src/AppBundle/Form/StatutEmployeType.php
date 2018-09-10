<?php

namespace AppBundle\Form;

use AppBundle\Entity\StatutEmploye;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StatutEmployeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomstatutemploye', EntityType::class, [
                'class' => StatutEmploye::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nomstatutemploye', 'ASC');
                },
                'choice_label' => 'nom_statut_employe',
                'choice_value' => function (StatutEmploye $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Statut Employe',
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
            'data_class' => 'AppBundle\Entity\StatutEmploye'
        ));
    }
}
