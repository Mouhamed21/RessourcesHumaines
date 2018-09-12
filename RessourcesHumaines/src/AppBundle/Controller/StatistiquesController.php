<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StatistiquesController extends Controller
{
    /**
     * @Route("/statistiques", name="statistique_formation")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        $em = $this->getDoctrine()->getManager();
        $formations = $em->getRepository('AppBundle:Formation')->getFormationsStats();
        $etatformations = $em->getRepository('AppBundle:Formation')->getFormationsStatsetat();
        
       //var_dump($etatformations);die;
        return $this->render('formation/statistiqueformation.html.twig', ['formations' => $formations,
        'etatformations' => $etatformations
        ]);
    }
}
