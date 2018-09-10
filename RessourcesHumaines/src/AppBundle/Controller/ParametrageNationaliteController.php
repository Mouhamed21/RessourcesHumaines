<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CategorieEmploye;
use AppBundle\Entity\Departement;
use AppBundle\Entity\Direction;
use AppBundle\Entity\Etat;
use AppBundle\Entity\Fonction;
use AppBundle\Entity\Metier;
use AppBundle\Entity\MetierEmploye;
use AppBundle\Entity\Nationalite;
use AppBundle\Entity\Service;
use AppBundle\Entity\StatutEmploye;
use AppBundle\Entity\TypeContrat;
use AppBundle\Entity\TypeEvaluation;
use AppBundle\Form\StatutEmployeType;
use AppBundle\Form\TypeEvaluationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class ParametrageNationaliteController extends Controller
{
    /**
     * @Route("/parametrage/parametreremployeed/{id}", name="delete_nationalite")
     */
    public function deleteNationaliteAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $nationalite = $em->getRepository('AppBundle:Nationalite')->find($id);

        //var_dump($metier);die;
        $nationalite->setTag('1');
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($nationalite);
        $em->flush();
        $this->addFlash('message3','Nationalite Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }



}


