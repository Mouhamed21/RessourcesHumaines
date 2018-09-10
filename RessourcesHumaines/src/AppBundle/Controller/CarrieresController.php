<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Evaluation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\EvaluationType;
class CarrieresController extends Controller
{
    /**
     * @Route("/carrieres", name="carrieres")
     */
    public function carrieresAction(Request $request)
    {
        // replace this example code with whatever you need
        $evaluations = $this->getDoctrine()->getRepository('AppBundle:Evaluation')->findAll();
        return $this->render('carrieres/carrieres.html.twig', ['evaluations'=>$evaluations]);
    }
    /**
     * @Route("/carrieres/creation", name="carrieres_creation")
     */
    public function carrierescreationAction(Request $request)
    {
        // replace this example code with whatever you need
        $evaluation = new Evaluation();
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $evaluation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($evaluation);
            $em->flush();
            $this->addFlash('message1','Evaluation créée');
            return $this->redirectToRoute('carrieres');
        }
        return $this->render('carrieres/carrierescreation.html.twig', ['form'=>$form->createView()]);
    }
    /**
     * @Route("/carrieres/update/{id}", name="carrieres_update")
     */
    public function carrieresupdateAction($id,Request $request)
    {
        // replace this example code with whatever you need
        $repository = $this->getDoctrine()->getRepository('AppBundle:Evaluation');
        $evaluation = $repository->find($id);
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $evaluation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($evaluation);
            $em->flush();
            return $this->redirectToRoute('carrieres');
        }
        return $this->render('carrieres/update.html.twig', ['form' => $form->createView()]);
    }
    /**
     * @Route("/carriere/delete/{id}", name="delete_evaluation")
     */
    public function deletePostAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $evaluation = $em->getRepository('AppBundle:Evaluation')->find($id);
        $em->remove($evaluation);
        $em->flush();
        $this->addFlash('message3','Evaluation Supprimée!');
        return $this->redirectToRoute('carrieres');
    }
}
