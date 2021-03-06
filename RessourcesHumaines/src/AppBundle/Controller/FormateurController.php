<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Formateur;
use AppBundle\Form\FormateurType;

/**
 * Formateur controller.
 *
 * @Route("/formateur")
 */
class FormateurController extends Controller
{
    /**
     * Lists all Formateur entities.
     *
     * @Route("/", name="formateur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formateurs = $em->getRepository('AppBundle:Formateur')->findAll();

        return $this->render('formateur/index.html.twig', array(
            'formateurs' => $formateurs,
        ));
    }

    /**
     * Creates a new Formateur entity.
     *
     * @Route("/new", name="formateur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formateur = new Formateur();
        $form = $this->createForm('AppBundle\Form\FormateurType', $formateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formateur);
            $em->flush();

            return $this->redirectToRoute('formateur_show', array('id' => $formateur->getId()));
        }

        return $this->render('formateur/new.html.twig', array(
            'formateur' => $formateur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formateur entity.
     *
     * @Route("/{id}", name="formateur_show")
     * @Method("GET")
     */
    public function showAction(Formateur $formateur)
    {
        $deleteForm = $this->createDeleteForm($formateur);

        return $this->render('formateur/show.html.twig', array(
            'formateur' => $formateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Formateur entity.
     *
     * @Route("/{id}/edit", name="formateur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Formateur $formateur)
    {
        $deleteForm = $this->createDeleteForm($formateur);
        $editForm = $this->createForm('AppBundle\Form\FormateurType', $formateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formateur);
            $em->flush();
            $this->addFlash('message7','Formateur Modifié');
            return $this->redirectToRoute('formateur_edit', array('id' => $formateur->getId()));
        }

        return $this->render('formateur/edit.html.twig', array(
            'formateur' => $formateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Formateur entity.
     *
     * @Route("/{id}", name="formateur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Formateur $formateur)
    {
        $form = $this->createDeleteForm($formateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formateur);
            $em->flush();
        }

        return $this->redirectToRoute('formateur_index');
    }

    /**
     * Creates a form to delete a Formateur entity.
     *
     * @param Formateur $formateur The Formateur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formateur $formateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formateur_delete', array('id' => $formateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
