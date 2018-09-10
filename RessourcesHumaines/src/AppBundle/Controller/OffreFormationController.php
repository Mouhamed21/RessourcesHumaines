<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\OffreFormation;
use AppBundle\Entity\Formateur;
use AppBundle\Entity\FormateurRetenu;
//use AppBundle\Entity\OffreFormation;
use AppBundle\Form\OffreFormationType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;

/**
 * OffreFormation controller.
 *
 * @Route("/offreformation")
 */
class OffreFormationController extends Controller
{
    /**
     * Lists all OffreFormation entities.
     *
     * @Route("/", name="offreformation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offreFormations = $em->getRepository('AppBundle:OffreFormation')->findAll();

        return $this->render('formation/show.html.twig', array(
            'offreFormations' => $offreFormations,
        ));
    }

    /**
     * Creates a new OffreFormation entity.
     *
     * @Route("/new", name="offreformation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $offreFormation = new OffreFormation();
        $form = $this->createForm('AppBundle\Form\OffreFormationType', $offreFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($offreFormation);
            $em->flush();

            return $this->redirectToRoute('offreformation_show', array('id' => $offreFormation->getId()));
        }

        return $this->render('offreformation/new.html.twig', array(
            'offreFormation' => $offreFormation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OffreFormation entity.
     *
     * @Route("/{id}", name="offreformation_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(OffreFormation $offreFormation, Request $request)
    {
        $deleteForm = $this->createDeleteForm($offreFormation);
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository('AppBundle:OffreFormation')->getOffreFormation($offreFormation);
        $formateurRetenus = $em->getRepository('AppBundle:Formateur')->getFormateurs($offreFormation);
        $formateur = new Formateur();
        $formateurretenu = new FormateurRetenu();
        $form1 = $this->createFormBuilder([$formateur,$formateurretenu])
            ->add('nomformateur', EntityType::class, [
                'class' => Formateur::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('f')
                        ->orderBy('f.nomformateur', 'ASC')
                        ;
                },
                    'choice_label' => function ($formateur) {
                        return $formateur->getPrenomformateur() . ' ' . $formateur->getNomformateur(). ' 
                        ' .$formateur->getCodereference();
                    },
               
                //'choice_label' => 'nomformateur',
                'choice_value' => function (Formateur $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Formateur',
                'attr' => [
                    'class' => 'form-control',
                ]])
                ->add('save', SubmitType::Class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-right:10px;')))
            ->getForm();
            $form1->handleRequest($request);
            if ($form1->isSubmitted() && $form1->isValid()) {

                $nomformateur = $form1['nomformateur']->getData();   
                $formateurretenu->setFormateur($nomformateur); 
                $formateurretenu->setOffreformation($offreFormation);
                $em = $this->getDoctrine()->getManager();
                $em->persist($formateurretenu);
                $em->flush();
                $this->addFlash('message5', 'Formateur Retenu!');
                return $this->redirectToRoute('offreformation_show',array('id' => $offreFormation->getId()));
            }
       
        return $this->render('offreformation/show.html.twig', array(
            'offreFormation' => $offreFormation,
            'formation' => $formation,
            'formateurRetenus' => $formateurRetenus,
            'delete_form' => $deleteForm->createView(),
            'form1' => $form1->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OffreFormation entity.
     *
     * @Route("/{id}/edit", name="offreformation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, OffreFormation $offreFormation)
    {
        $deleteForm = $this->createDeleteForm($offreFormation);
        $editForm = $this->createForm('AppBundle\Form\OffreFormationType', $offreFormation);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository('AppBundle:OffreFormation')->getOffreFormation($offreFormation);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($offreFormation);
            $em->flush();
            $this->addFlash('message6','Offre de Formation Modifié');
            return $this->redirectToRoute('offreformation_show', array('id' => $offreFormation->getId()));
        }

        return $this->render('offreformation/edit.html.twig', array(
            'offreFormation' => $offreFormation,
            'formation' => $formation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a OffreFormation entity.
     *
     * @Route("/{id}", name="offreformation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, OffreFormation $offreFormation)
    {
        $form = $this->createDeleteForm($offreFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($offreFormation);
            $em->flush();
        }

        return $this->redirectToRoute('formation_index');
    }

    /**
     * Creates a form to delete a OffreFormation entity.
     *
     * @param OffreFormation $offreFormation The OffreFormation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OffreFormation $offreFormation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offreformation_delete', array('id' => $offreFormation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
