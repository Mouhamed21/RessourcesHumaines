<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Nationalite;
use AppBundle\Entity\NationnaliteEmploye;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Employe;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;
class InformationsController extends Controller
{
    /**
     * @Route("/informationsdiverses", name="informations")
     */
    public function informationsAction(Request $request)
    {
        // replace this example code with whatever you need

        return $this->render('employe/informations.html.twig', []);
    }
    /**
     * @Route("/employe/view/informationsdiverses/creation/{id}", name="informations_creation")
     */
    public function informationscreationAction(Request $request)
    {
        // replace this example code with whatever you need
        $nationalite = new Nationalite();
        $form = $this->createFormBuilder($nationalite)
            ->add('id',HiddenType::class)
            ->add('nomNationalite', EntityType::class, [
                'class' => Nationalite::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('n')
                        ->orderBy('n.nomNationalite', 'ASC');
                },
                'choice_label' => 'nomNationalite',
                'placeholder' => 'Nationalité',
                'attr' => [
                    'class' => 'form-control',
                ]])
            // query choices from this entity
            ->add('save',SubmitType::Class, array('label'=> 'Ajouter Nationalité', 'attr' => array('class' =>'btn btn-primary',
                'style'=>'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form->handleRequest($request);

        return $this->render('employe/informationscreation.html.twig', ['form' => $form->createView()]);
    }

}
