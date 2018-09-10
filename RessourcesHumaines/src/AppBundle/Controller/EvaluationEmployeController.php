<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\EvaluationEmploye;
use AppBundle\Form\EvaluationEmployeType;

/**
 * EvaluationEmploye controller.
 *
 * @Route("/evaluation/evaluationemploye")
 */
class EvaluationEmployeController extends Controller
{
    /**
     * Lists all EvaluationEmploye entities.
     *
     * @Route("/", name="evaluation_evaluationemploye_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evaluationEmployes = $em->getRepository('AppBundle:EvaluationEmploye')->findAll();

        return $this->render('evaluationemploye/index.html.twig', array(
            'evaluationEmployes' => $evaluationEmployes,
        ));
    }

    /**
     * Creates a new EvaluationEmploye entity.
     *
     * @Route("/new", name="evaluation_evaluationemploye_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $evaluationEmploye = new EvaluationEmploye();
        $form = $this->createForm('AppBundle\Form\EvaluationEmployeType', $evaluationEmploye);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evaluationEmploye);
            $em->flush();

            return $this->redirectToRoute('evaluation_evaluationemploye_show', array('id' => $evaluationEmploye->getId()));
        }

        return $this->render('evaluationemploye/new.html.twig', array(
            'evaluationEmploye' => $evaluationEmploye,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EvaluationEmploye entity.
     *
     * @Route("/{id}", name="evaluation_evaluationemploye_show")
     * @Method("GET")
     */
    public function showAction(EvaluationEmploye $evaluationEmploye)
    {
        $deleteForm = $this->createDeleteForm($evaluationEmploye);

        return $this->render('evaluationemploye/show.html.twig', array(
            'evaluationEmploye' => $evaluationEmploye,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EvaluationEmploye entity.
     *
     * @Route("/{id}/edit", name="evaluation_evaluationemploye_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EvaluationEmploye $evaluationEmploye)
    {
        $deleteForm = $this->createDeleteForm($evaluationEmploye);
        $editForm = $this->createForm('AppBundle\Form\EvaluationEmployeType', $evaluationEmploye);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evaluationEmploye);
            $em->flush();

            return $this->redirectToRoute('evaluation_evaluationemploye_edit', array('id' => $evaluationEmploye->getId()));
        }

        return $this->render('evaluationemploye/edit.html.twig', array(
            'evaluationEmploye' => $evaluationEmploye,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EvaluationEmploye entity.
     *
     * @Route("/{id}", name="evaluation_evaluationemploye_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EvaluationEmploye $evaluationEmploye)
    {
        $form = $this->createDeleteForm($evaluationEmploye);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evaluationEmploye);
            $em->flush();
        }

        return $this->redirectToRoute('evaluation_evaluationemploye_index');
    }

    /**
     * Creates a form to delete a EvaluationEmploye entity.
     *
     * @param EvaluationEmploye $evaluationEmploye The EvaluationEmploye entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EvaluationEmploye $evaluationEmploye)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evaluation_evaluationemploye_delete', array('id' => $evaluationEmploye->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
