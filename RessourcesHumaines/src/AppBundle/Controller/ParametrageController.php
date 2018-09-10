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

class ParametrageController extends Controller
{
    /**
     * @Route("/parametrage/parametreremployemetier/{id}", name="delete_metier")
     */
    public function deleteMetierAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $metier = $em->getRepository('AppBundle:Metier')->find($id);

        //var_dump($metier);die;
        $metier->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($metier);
        $em->flush();
        $this->addFlash('message3','Métier Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployenationalite/{id}", name="nationalite")
     */
    public function deleteNationaliteAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $nationalite = $em->getRepository('AppBundle:Nationalite')->find($id);
        //var_dump($metier);die;
        $nationalite->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($nationalite);
        $em->flush();
        $this->addFlash('message3','Nationalité Supprimée!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployecategorie/{id}", name="delete_categorie")
     */
    public function deleteCategorieAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $categorieemploye = $em->getRepository('AppBundle:CategorieEmploye')->find($id);
        //var_dump($metier);die;
        $categorieemploye->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($categorieemploye);
        $em->flush();
        $this->addFlash('message3','Catégorie Supprimée!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployefonction/{id}", name="delete_fonction")
     */
    public function deleteFonctionAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $fonction = $em->getRepository('AppBundle:Fonction')->find($id);
        //var_dump($metier);die;
        $fonction->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($fonction);
        $em->flush();
        $this->addFlash('message3','Fonction Supprimée!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployecontrat/{id}", name="delete_contrat")
     */
    public function deleteTypeContratAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $typecontrat = $em->getRepository('AppBundle:TypeContrat')->find($id);
        //var_dump($metier);die;
        $typecontrat->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($typecontrat);
        $em->flush();
        $this->addFlash('message3','Contrat Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployestatut/{id}", name="delete_statut_employe")
     */
    public function deleteStatutEmployeAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $statutemploye = $em->getRepository('AppBundle:StatutEmploye')->find($id);
        //var_dump($metier);die;
        $statutemploye->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($statutemploye);
        $em->flush();
        $this->addFlash('message3','Statut Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployeetat/{id}", name="delete_etat")
     */
    public function deleteEtatAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $etat = $em->getRepository('AppBundle:Etat')->find($id);
        //var_dump($metier);die;
        $etat->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($etat);
        $em->flush();
        $this->addFlash('message3','Etat Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployeservice/{id}", name="delete_service")
     */
    public function deleteServiceAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $service = $em->getRepository('AppBundle:Service')->find($id);
        //var_dump($metier);die;
        $service->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($service);
        $em->flush();
        $this->addFlash('message3','Service Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployedepart/{id}", name="delete_departement")
     */
    public function deleteDepartementAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $departement = $em->getRepository('AppBundle:Departement')->find($id);
        //var_dump($metier);die;
        $departement->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($departement);
        $em->flush();
        $this->addFlash('message3','Département Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }
    /**
     * @Route("/parametrage/parametreremployedirect/{id}", name="delete_direct")
     */
    public function deleteDirectAction($id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $direction = $em->getRepository('AppBundle:Direction')->find($id);
        //var_dump($metier);die;
        $direction->setTag(1);
        //$em->remove($metier);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($direction);
        $em->flush();
        $this->addFlash('message3','Direction Supprimé!');
        return $this->redirectToRoute('parametrage_employe');
    }

    /**
     * @Route("/parametrage/parametreremploye", name="parametrage_employe")
     */
    public function ajouternationaliteAction(Request $request)
    {
        // replace this example code with whatever you need
        $nationalite = new Nationalite();
        $form = $this->createFormBuilder($nationalite)
            ->add('tag',HiddenType::class)
            ->add('nomNationalite', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Nationalite']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Nationalité', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nomNationalite = $form['nomNationalite']->getData();
            $nationalite->setNomNationalite($nomNationalite);
            $nationalite->setTag('0');
            $em = $this->getDoctrine()->getManager();
            $em->persist($nationalite);
            $em->flush();
            $this->addFlash('message1', 'Nationalité Ajoutée!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $metier = new Metier();
        $form1 = $this->createFormBuilder($metier)
            ->add('tag',HiddenType::class)
            ->add('nommetier', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Métier']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Métier', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {
            $nommetier = $form1['nommetier']->getData();
            $metier->setNommetier($nommetier);
            $metier->setTag('0');
            $em = $this->getDoctrine()->getManager();
            $em->persist($metier);
            $em->flush();
            $this->addFlash('message1', 'Métier Ajouté avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $categorieemploye = new CategorieEmploye();
        $statutemploye = new StatutEmploye();
        $form2 = $this->createFormBuilder([$categorieemploye,$statutemploye])
            ->add('tag',HiddenType::class)
            ->add('nomstatutemploye', EntityType::class, [
                'class' => StatutEmploye::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nomstatutemploye', 'ASC')
                        ->andWhere('s.tag != 1')
                        ;
                },
                'choice_label' => 'nom_statut_employe',
                'choice_value' => function (StatutEmploye $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Choisir Statut',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('nomcategorieemploye', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Categorie Employé']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Catégorie', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form2->handleRequest($request);
        if ($form2->isSubmitted() && $form2->isValid()) {
            $nomcategorieemploye = $form2['nomcategorieemploye']->getData();
            $nomstatutemploye = $form2['nomstatutemploye']->getData();
            $categorieemploye->setNomcategorieemploye($nomcategorieemploye);
            $categorieemploye->setStatutemploye($nomstatutemploye);
            $categorieemploye->setTag('0');
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorieemploye);
            $em->flush();
            $this->addFlash('message1', 'Catégorie Ajoutée avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $fonction = new Fonction();
        $form3 = $this->createFormBuilder($fonction)
            ->add('tag',HiddenType::class)
            ->add('nomfonction', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Fonction']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Fonction', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form3->handleRequest($request);
        if ($form3->isSubmitted() && $form3->isValid()) {
            $nomfonction = $form3['nomfonction']->getData();
            $fonction->setNomfonction($nomfonction);
            $fonction->setTag('0');
            $em = $this->getDoctrine()->getManager();
            $em->persist($fonction);
            $em->flush();
            $this->addFlash('message1', 'Fonction Ajoutée avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $typecontrat = new TypeContrat();
        $form4 = $this->createFormBuilder($typecontrat)
            ->add('tag',HiddenType::class)
            ->add('nomtypecontrat', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Contrat']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Contrat', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form4->handleRequest($request);
        if ($form4->isSubmitted() && $form4->isValid()) {
            $nomtypecontrat = $form4['nomtypecontrat']->getData();
            $typecontrat->setNomtypecontrat($nomtypecontrat);
            $typecontrat->setTag('0');
            $em = $this->getDoctrine()->getManager();
            $em->persist($typecontrat);
            $em->flush();
            $this->addFlash('message1', 'Contrat Ajouté avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $statutemploye = new StatutEmploye();
        $form5 = $this->createFormBuilder($statutemploye)
            ->add('tag',HiddenType::class)
            ->add('nomstatutemploye', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Statut Employé']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Statut', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form5->handleRequest($request);
        if ($form5->isSubmitted() && $form5->isValid()) {
            $nomstatutemploye = $form5['nomstatutemploye']->getData();
            $statutemploye->setNomstatutemploye($nomstatutemploye);
            $statutemploye->setTag('0');
            $em = $this->getDoctrine()->getManager();
            $em->persist($statutemploye);
            $em->flush();
            $this->addFlash('message1', 'Statut Ajouté avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $etat = new Etat();
        $form6 = $this->createFormBuilder($etat)
            ->add('tag',HiddenType::class)
            ->add('nometat', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Etat']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Etat', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form6->handleRequest($request);
        if ($form6->isSubmitted() && $form6->isValid()) {
            $nometat = $form6['nometat']->getData();
            $etat->setNometat($nometat);
            $etat->setTag('0');
            $em = $this->getDoctrine()->getManager();
            $em->persist($etat);
            $em->flush();
            $this->addFlash('message1', 'Etat Ajouté avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $departement = new Departement();
        $direction = new Direction();
        $form8 = $this->createFormBuilder([$departement,$direction])
            ->add('tag', HiddenType::class)
            ->add('nomdirection', EntityType::class, [
                'class' => Direction::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nomdirection', 'ASC')
                        ->andwhere('s.tag != 1')
                        ;
                },
                'choice_label' => 'nomdirection',
                'choice_value' => function (Direction $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Choisir Direction',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('nomdepartement', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Département']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Département', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form8->handleRequest($request);
        if ($form8->isSubmitted() && $form8->isValid()) {
            $nomdepartement = $form8['nomdepartement']->getData();
            $nomdirection = $form8['nomdirection']->getData();
            $departement->setNomdepartement($nomdepartement);
            $departement->setDirection($nomdirection);
            $departement->setTag(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($departement);
            $em->flush();
            $this->addFlash('message1', 'Département Ajoutée avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $service = new Service();
        $departement = new Departement();
        $form10 = $this->createFormBuilder([$service,$departement])
            ->add('tag',HiddenType::class)
            ->add('nomdepartement', EntityType::class, [
                'class' => Departement::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nomdepartement', 'ASC')
                        ->andWhere('s.tag != 1')
                        ;
                },
                'choice_label' => 'nomdepartement',
                'choice_value' => function (Departement $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Choisir Departement',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('nomservice', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Service']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Service', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form10->handleRequest($request);
        if ($form10->isSubmitted() && $form10->isValid()) {
            $nomservice = $form10['nomservice']->getData();
            $nomdepartement = $form10['nomdepartement']->getData();
            $service->setNomservice($nomservice);
            $service->setDepartement($nomdepartement);
            $service->setTag(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();
            $this->addFlash('message1', 'Service Ajouté avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $direction = new Direction();
        $form9 = $this->createFormBuilder($direction)
            ->add('tag',HiddenType::class)
            ->add('nomdirection', TextType::Class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Direction']])
            ->add('save', SubmitType::Class, array('label' => 'Ajouter Direction', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-top:10px; margin-bottom:5px')))
            ->getForm();
        $form9->handleRequest($request);
        if ($form9->isSubmitted() && $form9->isValid()) {
            $nomdirection = $form9['nomdirection']->getData();
            $direction->setNomdirection($nomdirection);
            $direction->setTag(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($direction);
            $em->flush();
            $this->addFlash('message1', 'Direction Ajouté avec Succès!');
            return $this->redirectToRoute('parametrage_employe');
        }
        $nationalites = $this->getDoctrine()->getRepository('AppBundle:Nationalite')->findNationalites();
        $metiers = $this->getDoctrine()->getRepository('AppBundle:Metier')->findMetiers();


        //$categorieemployes = $this->getDoctrine()->getRepository('AppBundle:CategorieEmploye')->findAll();
        //var_dump($categorieemployes);die;
        $statutemploye1 = $this->getDoctrine()->getRepository('AppBundle:StatutEmploye')->getStatuts();
        $departement1 = $this->getDoctrine()->getRepository('AppBundle:Direction')->getDepartements();
        $service1 = $this->getDoctrine()->getRepository('AppBundle:Departement')->getServices();
        //var_dump($departement1);die;

        $fonctions = $this->getDoctrine()->getRepository('AppBundle:Fonction')->findFonctions();
        $typecontrats = $this->getDoctrine()->getRepository('AppBundle:TypeContrat')->findContrats();
        $statutemployes = $this->getDoctrine()->getRepository('AppBundle:StatutEmploye')->findStatuts();
        $etats = $this->getDoctrine()->getRepository('AppBundle:Etat')->findEtats();
        $services = $this->getDoctrine()->getRepository('AppBundle:Departement')->getServices();
        $departements = $this->getDoctrine()->getRepository('AppBundle:Direction')->getDepartements();
        $directions = $this->getDoctrine()->getRepository('AppBundle:Direction')->findDirections();
        return $this->render('parametrage/parametreremploye.html.twig', ['services' => $services, 'etats' => $etats,
            'statutemployes' => $statutemployes, 'statutemploye1' => $statutemploye1, 'typecontrats' => $typecontrats,
            'fonctions' => $fonctions, 'metiers' => $metiers, 'departements' => $departements, 'directions' => $directions,
            'nationalites' => $nationalites, 'departement1'=> $departement1, 'service1'=> $service1,
            'form' => $form->createView(),
            'form1' => $form1->createView(), 'form2' => $form2->createView(), 'form3' => $form3->createView(),
            'form4' => $form4->createView(), 'form5' => $form5->createView(), 'form6' => $form6->createView(),
            'form8' => $form8->createView(), 'form9' => $form9->createView(),
            'form10' => $form10->createView()
            ]);
    }
}


