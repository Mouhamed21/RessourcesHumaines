<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\FormateurRetenu;
use AppBundle\Form\FormateurRetenuType;

/**
 * FormateurRetenu controller.
 *
 * @Route("/formateurretenu")
 */
class FormateurRetenuController extends Controller
{
    /**
     * Lists all FormateurRetenu entities.
     *
     * @Route("/", name="formateurretenu_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formateurRetenus = $em->getRepository('AppBundle:FormateurRetenu')->findAll();

        return $this->render('offreformation/show.html.twig', array(
            'formateurRetenus' => $formateurRetenus,
        ));
    }

    /**
     * Creates a new FormateurRetenu entity.
     *
     * @Route("/new", name="formateurretenu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formateurRetenu = new FormateurRetenu();
        $form = $this->createForm('AppBundle\Form\FormateurRetenuType', $formateurRetenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formateurRetenu);
            $em->flush();

            return $this->redirectToRoute('formateurretenu_show', array('id' => $formateurRetenu->getId()));
        }

        return $this->render('formateurretenu/new.html.twig', array(
            'formateurRetenu' => $formateurRetenu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FormateurRetenu entity.
     *
     * @Route("/{id}", name="formateurretenu_show")
     * @Method("GET")
     */
    public function showAction(FormateurRetenu $formateurRetenu)
    {
        $deleteForm = $this->createDeleteForm($formateurRetenu);
        $em = $this->getDoctrine()->getManager();
        $offreformation = $em->getRepository('AppBundle:Formateur')->getFormateur($formateurRetenu);
        $formateurRetenus = $em->getRepository('AppBundle:Formateur')->findFormateur($formateurRetenu);
        return $this->render('formateurretenu/show.html.twig', array(
            'formateurRetenu' => $formateurRetenu,
            'offreformation' => $offreformation,
            'delete_form' => $deleteForm->createView(),
            'formateurRetenus' => $formateurRetenus,
        ));
    }

    /**
     * Displays a form to edit an existing FormateurRetenu entity.
     *
     * @Route("/{id}/edit", name="formateurretenu_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FormateurRetenu $formateurRetenu)
    {
        $deleteForm = $this->createDeleteForm($formateurRetenu);
        $editForm = $this->createForm('AppBundle\Form\FormateurRetenuType', $formateurRetenu);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $offreformation = $em->getRepository('AppBundle:Formateur')->getFormateur($formateurRetenu);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formateurRetenu);
            $em->flush();

            return $this->redirectToRoute('formateurretenu_edit', array('id' => $formateurRetenu->getId()));
        }

        return $this->render('formateurretenu/edit.html.twig', array(
            'formateurRetenu' => $formateurRetenu,
            
            'offreformation' => $offreformation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FormateurRetenu entity.
     *
     * @Route("/{id}", name="formateurretenu_delete")
     *
     */
    public function deleteAction(Request $request, FormateurRetenu $formateurRetenu)
    {
        $form = $this->createDeleteForm($formateurRetenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formateurRetenu);
            $em->flush();
        }

        return $this->redirectToRoute('formation_index');
    }

    /**
     * Creates a form to delete a FormateurRetenu entity.
     *
     * @param FormateurRetenu $formateurRetenu The FormateurRetenu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FormateurRetenu $formateurRetenu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formateurretenu_delete', array('id' => $formateurRetenu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
