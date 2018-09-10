<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\TypeFormation;
use AppBundle\Form\TypeFormationType;

/**
 * TypeFormation controller.
 *
 * @Route("/parametrage/typeformation")
 */
class TypeFormationController extends Controller
{
    /**
     * Lists all TypeFormation entities.
     *
     * @Route("/", name="parametrage_typeformation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeFormations = $em->getRepository('AppBundle:TypeFormation')->findAll();

        return $this->render('typeformation/index.html.twig', array(
            'typeFormations' => $typeFormations,
        ));
    }

    /**
     * Creates a new TypeFormation entity.
     *
     * @Route("/new", name="parametrage_typeformation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeFormation = new TypeFormation();
        $form = $this->createForm('AppBundle\Form\TypeFormationType', $typeFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeFormation);
            $em->flush();

            return $this->redirectToRoute('parametrage_typeformation_show', array('id' => $typeFormation->getId()));
        }

        return $this->render('typeformation/new.html.twig', array(
            'typeFormation' => $typeFormation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeFormation entity.
     *
     * @Route("/{id}", name="parametrage_typeformation_show")
     * @Method("GET")
     */
    public function showAction(TypeFormation $typeFormation)
    {
        $deleteForm = $this->createDeleteForm($typeFormation);

        return $this->render('typeformation/show.html.twig', array(
            'typeFormation' => $typeFormation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeFormation entity.
     *
     * @Route("/{id}/edit", name="parametrage_typeformation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeFormation $typeFormation)
    {
        $deleteForm = $this->createDeleteForm($typeFormation);
        $editForm = $this->createForm('AppBundle\Form\TypeFormationType', $typeFormation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeFormation);
            $em->flush();

            return $this->redirectToRoute('parametrage_typeformation_edit', array('id' => $typeFormation->getId()));
        }

        return $this->render('typeformation/edit.html.twig', array(
            'typeFormation' => $typeFormation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeFormation entity.
     *
     * @Route("/{id}", name="parametrage_typeformation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeFormation $typeFormation)
    {
        $form = $this->createDeleteForm($typeFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeFormation);
            $em->flush();
        }

        return $this->redirectToRoute('parametrage_typeformation_index');
    }

    /**
     * Creates a form to delete a TypeFormation entity.
     *
     * @param TypeFormation $typeFormation The TypeFormation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeFormation $typeFormation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parametrage_typeformation_delete', array('id' => $typeFormation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
