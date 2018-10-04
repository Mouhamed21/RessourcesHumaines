<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $sexes = $em->getRepository('AppBundle:Employe')->findEmployeByHomme();
        $femmes = $em->getRepository('AppBundle:Employe')->findEmployeByFemme();
        $formation = $em->getRepository('AppBundle:Formation')->findAll();
        $nbr=count($formation);
        //var_dump($sexes);die;
        $employes = $em->getRepository('AppBundle:Employe')->findEmploye();
        $categorieemployes = $em->getRepository('AppBundle:Employe')->findEmployesByCategorie();
        $nationalites = $em->getRepository('AppBundle:Nationalite')->findEmployeByNationalite();
        //var_dump($employes);die;
        //$nbr=count($employes);
       
        return $this->render('homepage/index.html.twig', ['nbr'=>$nbr,'sexes'=>$sexes,'femmes'=>$femmes,
        'employes'=>$employes,'categorieemployes'=>$categorieemployes,'nationalites'=>$nationalites]);
    }
}
