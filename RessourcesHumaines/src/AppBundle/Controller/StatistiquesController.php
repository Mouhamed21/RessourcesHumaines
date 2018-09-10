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
        return $this->render('formation/statistiqueformation.html.twig', []);
    }
}
