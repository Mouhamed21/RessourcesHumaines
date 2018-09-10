<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Programme;
use AppBundle\Entity\Formation;
use AppBundle\Form\ProgrammeType;

/**
 * Programme controller.
 *
 * @Route("/formation_show")
 */
class ProgrammeController extends Controller
{
    /**
     * Lists all Programme entities.
     *
     * @Route("/", name="formation_show_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $programmes = $em->getRepository('AppBundle:Programme')->findAll();

        return $this->render('formation/show.html.twig', array(
            'programmes' => $programmes,
        ));
    }

    /**
     * Creates a new Programme entity.
     *
     * @Route("/new", name="formation_show_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $programme = new Programme();
        $form = $this->createForm('AppBundle\Form\ProgrammeType', $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($programme);
            $em->flush();

            return $this->redirectToRoute('formation_show', array('id' => $programme->getId()));
        }

        return $this->render('programme/new.html.twig', array(
            'programme' => $programme,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Programme entity.
     *
     * @Route("/{id}", name="formation_show_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(Programme $programme)
    {
        
        $deleteForm = $this->createDeleteForm($programme);
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository('AppBundle:Programme')->getProgramme($programme);
        //var_dump($programmes);die;
        return $this->render('programme/show.html.twig', array(
            'programme' => $programme,
            'formation'=>  $formation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Programme entity.
     *
     * @Route("/{id}/edit", name="formation_show_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Programme $programme)
    {
        $deleteForm = $this->createDeleteForm($programme);
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository('AppBundle:Programme')->getProgramme($programme);
        $editForm = $this->createForm('AppBundle\Form\ProgrammeType', $programme);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($programme);
            $em->flush();
            $this->addFlash('message7','Programme Modifié');
            return $this->redirectToRoute('formation_show_show', array('id' => $programme->getId()));
        }

        return $this->render('programme/edit.html.twig', array(
            'programme' => $programme,
            'formation'=>  $formation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Programme entity.
     *
     * @Route("/{id}", name="formation_show_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Programme $programme)
    {
        $form = $this->createDeleteForm($programme);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($programme);
            $em->flush();
        }
        return $this->redirectToRoute('formation_index');
    }

    /**
     * Creates a form to delete a Programme entity.
     *
     * @param Programme $programme The Programme entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Programme $programme)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formation_show_delete', array('id' => $programme->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
