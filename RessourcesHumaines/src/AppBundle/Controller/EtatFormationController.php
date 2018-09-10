<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\EtatFormation;
use AppBundle\Form\EtatFormationType;

/**
 * EtatFormation controller.
 *
 * @Route("/parametrage/etatformation")
 */
class EtatFormationController extends Controller
{
    /**
     * Lists all EtatFormation entities.
     *
     * @Route("/", name="parametrage_etatformation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etatFormations = $em->getRepository('AppBundle:EtatFormation')->findAll();

        return $this->render('etatformation/index.html.twig', array(
            'etatFormations' => $etatFormations,
        ));
    }

    /**
     * Creates a new EtatFormation entity.
     *
     * @Route("/new", name="parametrage_etatformation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $etatFormation = new EtatFormation();
        $form = $this->createForm('AppBundle\Form\EtatFormationType', $etatFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etatFormation);
            $em->flush();

            return $this->redirectToRoute('parametrage_etatformation_show', array('id' => $etatFormation->getId()));
        }

        return $this->render('etatformation/new.html.twig', array(
            'etatFormation' => $etatFormation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EtatFormation entity.
     *
     * @Route("/{id}", name="parametrage_etatformation_show")
     * @Method("GET")
     */
    public function showAction(EtatFormation $etatFormation)
    {
        $deleteForm = $this->createDeleteForm($etatFormation);

        return $this->render('etatformation/show.html.twig', array(
            'etatFormation' => $etatFormation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EtatFormation entity.
     *
     * @Route("/{id}/edit", name="parametrage_etatformation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EtatFormation $etatFormation)
    {
        $deleteForm = $this->createDeleteForm($etatFormation);
        $editForm = $this->createForm('AppBundle\Form\EtatFormationType', $etatFormation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etatFormation);
            $em->flush();

            return $this->redirectToRoute('parametrage_etatformation_edit', array('id' => $etatFormation->getId()));
        }

        return $this->render('etatformation/edit.html.twig', array(
            'etatFormation' => $etatFormation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EtatFormation entity.
     *
     * @Route("/{id}", name="parametrage_etatformation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EtatFormation $etatFormation)
    {
        $form = $this->createDeleteForm($etatFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etatFormation);
            $em->flush();
        }

        return $this->redirectToRoute('parametrage_etatformation_index');
    }

    /**
     * Creates a form to delete a EtatFormation entity.
     *
     * @param EtatFormation $etatFormation The EtatFormation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EtatFormation $etatFormation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parametrage_etatformation_delete', array('id' => $etatFormation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
