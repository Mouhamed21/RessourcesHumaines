<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Employe;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomcontact')
            ->add('prenomcontact')
            ->add('sexecontact')
            ->add('emailcontact')
            ->add('telephone')
            ->add('employe',EntityType::class, [
                'class' => Employe::class,
                'query_builder' => function (EntityRepository $er) {
                    $er->createQueryBuilder('e')
                        ->orderBy('e.prenom','ASC')
                       
                    ;
                },
                'choice_label' => 'prenom',
                //'required' => false,
                'placeholder' => 'Choisir Employe',
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
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }
}
