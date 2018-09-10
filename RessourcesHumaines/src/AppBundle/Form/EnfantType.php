<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Conjoint;
use Doctrine\ORM\Query\Expr\Join;
use AppBundle\Repository\EmployeRepository;
use AppBundle\Repository\ConjointRepository;
class EnfantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $employe = $options['action_name'];
        //var_dump($id);die;
        $builder
            ->add('nomEnfant',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Nom']])
            ->add('prenomEnfant',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Prenom']])
            ->add('dateNaissance', DateType::class,[
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]])
            ->add('adresse',TextType::class,['attr'=>['class' => 'form-control','placeholder'=>'Adresse']])
            ->add('sexeenfant',ChoiceType::class,[
                'choices' => [
                    'M' => 'M',
                    'F' => 'F',
                ],
                'required'    => true,
                'placeholder' => 'Genre',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('handicap',ChoiceType::class, array(
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non'
                ),
                'label' => 'handicap',
                'required' => true,
                'choices_as_values' => true
            ))
            ->add('scolariser',ChoiceType::class, array(
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non'
                ),
                'label' => 'scolariser',
                'required' => true,
                'choices_as_values' => true
            ))
            ->add('numeroIdentification',IntegerType::class,['attr'=>['class' => 'form-control','placeholder'=>'Prenom']])
            ->add('tag',HiddenType::class)
            ->add('conjoint', EntityType::class, [
                'class' => Conjoint::class,
                /*'query_builder' => function (EmployeRepository $er) use ($employe){
                
                    return $er->getConjoints($employe);

                    ;
                },*/
                'choice_label' => 'prenomConjoint',
                //'required' => false,
                'placeholder' => 'Choisir Conjoint',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('save',SubmitType::Class, array('label'=> 'Enregistrer', 'attr' => array('class' =>'btn btn-primary',
                'style'=>'margin-right:10px;')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        //$resolver->setDefaults(array(
            //'data_class' => 'AppBundle\Entity\Enfant',
            $resolver->setRequired(['action_name'])
        ;
    }
}
