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
       //$this->denyAccessUnlessGranted('ROLE_USER');
       $currentdate = new \DateTime('now');
       //var_dump($currentdate);die;
        $em = $this->getDoctrine()->getManager();
        $formations = $em->getRepository('AppBundle:Formation')->getFormationsStats();
        $formation = $em->getRepository('AppBundle:Formation')->findAll();
        $nbr=count($formation);
        //var_dump($nbr);die;
        $etatformations = $em->getRepository('AppBundle:Formation')->getFormationsStatsetat();
        $formationlieus = $em->getRepository('AppBundle:Formation')->getFormationsStatslieu();
        $formationdates = $em->getRepository('AppBundle:Formation')->getFormationsStatsdate();
        
        //var_dump($formationdates);die;
        return $this->render('formation/statistiqueformation.html.twig', ['nbr'=> $nbr,'formations' => $formations,
        'etatformations' => $etatformations,'formationlieus' => $formationlieus,'formationdates' => $formationdates
        ]);
    }
    /**
     * @Route("/statistiquesemploye", name="statistique_employe")
     */
    public function statemplAction(Request $request)
    {
        // replace this example code with whatever you need
       //$this->denyAccessUnlessGranted('ROLE_USER');
        
        $em = $this->getDoctrine()->getManager();
        $sexes = $em->getRepository('AppBundle:Employe')->findEmployeBySexe();
        $metiers = $em->getRepository('AppBundle:Metier')->findEmployeByMetiers();
        $categorieemployes = $em->getRepository('AppBundle:Employe')->findEmployesByCategorie();
        $services = $em->getRepository('AppBundle:Employe')->findEmployesByService();
        //var_dump($services);die;
        
        
        return $this->render('employe/statistiqueemploye.html.twig', ['sexes' => $sexes,'metiers' => $metiers,
        'categorieemployes' => $categorieemployes,'services'=>$services
        ]);
    }
}
