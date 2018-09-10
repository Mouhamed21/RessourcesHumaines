<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\TypeEvaluation;
use AppBundle\Form\TypeEvaluationType;

/**
 * TypeEvaluation controller.
 *
 * @Route("/parametrage/evaluation")
 */
class TypeEvaluationController extends Controller
{
    /**
     * Lists all TypeEvaluation entities.
     *
     * @Route("/", name="parametrage_evaluation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeEvaluations = $em->getRepository('AppBundle:TypeEvaluation')->findAll();

        return $this->render('typeevaluation/index.html.twig', array(
            'typeEvaluations' => $typeEvaluations,
        ));
    }

    /**
     * Creates a new TypeEvaluation entity.
     *
     * @Route("/new", name="parametrage_evaluation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeEvaluation = new TypeEvaluation();
        $form = $this->createForm('AppBundle\Form\TypeEvaluationType', $typeEvaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeEvaluation);
            $em->flush();

            return $this->redirectToRoute('parametrage_evaluation_index', array('id' => $typeEvaluation->getId()));
        }

        return $this->render('typeevaluation/new.html.twig', array(
            'typeEvaluation' => $typeEvaluation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeEvaluation entity.
     *
     * @Route("/{id}", name="parametrage_evaluation_show")
     * @Method("GET")
     */
    public function showAction(TypeEvaluation $typeEvaluation)
    {
        $deleteForm = $this->createDeleteForm($typeEvaluation);

        return $this->render('typeevaluation/show.html.twig', array(
            'typeEvaluation' => $typeEvaluation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeEvaluation entity.
     *
     * @Route("/{id}/edit", name="parametrage_evaluation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeEvaluation $typeEvaluation)
    {
        $deleteForm = $this->createDeleteForm($typeEvaluation);
        $editForm = $this->createForm('AppBundle\Form\TypeEvaluationType', $typeEvaluation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeEvaluation);
            $em->flush();

            return $this->redirectToRoute('parametrage_evaluation_index', array('id' => $typeEvaluation->getId()));
        }

        return $this->render('typeevaluation/edit.html.twig', array(
            'typeEvaluation' => $typeEvaluation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeEvaluation entity.
     *
     * @Route("/{id}", name="parametrage_evaluation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeEvaluation $typeEvaluation)
    {
        $form = $this->createDeleteForm($typeEvaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeEvaluation);
            $em->flush();
        }

        return $this->redirectToRoute('parametrage_evaluation_index');
    }

    /**
     * Creates a form to delete a TypeEvaluation entity.
     *
     * @param TypeEvaluation $typeEvaluation The TypeEvaluation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeEvaluation $typeEvaluation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parametrage_evaluation_delete', array('id' => $typeEvaluation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
