<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Materiel;
use AppBundle\Form\MaterielType;

/**
 * Materiel controller.
 *
 * @Route("/materiel")
 */
class MaterielController extends Controller
{
    /**
     * Lists all Materiel entities.
     *
     * @Route("/", name="materiel_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $materiels = $em->getRepository('AppBundle:Materiel')->findAll();
        
        return $this->render('formation/show.html.twig', array(
            'materiels' => $materiels,
        ));
    }

    /**
     * Creates a new Materiel entity.
     *
     * @Route("/new", name="materiel_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $materiel = new Materiel();
        $form = $this->createForm('AppBundle\Form\MaterielType', $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($materiel);
            $em->flush();

            return $this->redirectToRoute('materiel_show', array('id' => $materiel->getId()));
        }

        return $this->render('materiel/new.html.twig', array(
            'materiel' => $materiel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Materiel entity.
     *
     * @Route("/{id}", name="materiel_show")
     * @Method("GET")
     */
    public function showAction(Materiel $materiel)
    {
        $deleteForm = $this->createDeleteForm($materiel);
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository('AppBundle:Materiel')->getMateriel($materiel);
        return $this->render('materiel/show.html.twig', array(
            'materiel' => $materiel,
            'formation' => $formation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Materiel entity.
     *
     * @Route("/{id}/edit", name="materiel_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Materiel $materiel)
    {
        $deleteForm = $this->createDeleteForm($materiel);
        $editForm = $this->createForm('AppBundle\Form\MaterielType', $materiel);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository('AppBundle:Materiel')->getMateriel($materiel);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($materiel);
            $em->flush();
            $this->addFlash('message8','Matériel Modifié');

            return $this->redirectToRoute('materiel_edit', array('id' => $materiel->getId()));
        }

        return $this->render('materiel/edit.html.twig', array(
            'materiel' => $materiel,
            'formation' => $formation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Materiel entity.
     *
     * @Route("/{id}", name="materiel_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Materiel $materiel)
    {
        $form = $this->createDeleteForm($materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($materiel);
            $em->flush();
        }

        return $this->redirectToRoute('formation_index');
    }

    /**
     * Creates a form to delete a Materiel entity.
     *
     * @param Materiel $materiel The Materiel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Materiel $materiel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('materiel_delete', array('id' => $materiel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
