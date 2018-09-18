<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CategorieEmploye;
use AppBundle\Entity\Conjoint;
use AppBundle\Entity\Enfant;
use AppBundle\Entity\Etat;
use AppBundle\Entity\EtatEmploye;
use AppBundle\Entity\Fonction;
use AppBundle\Entity\FonctionEmploye;
use AppBundle\Entity\GrappeFamiliale;
use AppBundle\Entity\Metier;
use AppBundle\Entity\MetierEmploye;
use AppBundle\Entity\Nationalite;
use AppBundle\Entity\NationnaliteEmploye;
use AppBundle\Entity\Service;
use AppBundle\Entity\TypeContrat;
use AppBundle\Entity\TypeContratEmploye;
use AppBundle\Form\CategorieEmployeType;
use AppBundle\Form\ConjointType;
use AppBundle\Form\EmployeType;
use AppBundle\Form\EnfantType;
use AppBundle\Form\EtatEmployeType;
use AppBundle\Form\EtatType;
use AppBundle\Form\FonctionEmployeType;
use AppBundle\Form\FonctionType;
use AppBundle\Form\MetierType;
use AppBundle\Form\NationaliteEmployeType;
use AppBundle\Form\NationaliteType;
use AppBundle\Form\ServiceType;
use AppBundle\Form\TypeContratType;
use AppBundle\Repository\EmployeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Employe;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class EmployeController extends Controller
{
    /**
     * @Route("/employe", name="employe")
     */
    public function employeAction(Request $request)
    {
        // replace this example code with whatever you need

        $repository = $this->getDoctrine()->getRepository('AppBundle:Employe');
        $employes =$repository->getEmployes();
        return $this->render('employe/employe.html.twig', ['employes' => $employes]);
    }
    /**
     * @Route("/employe/creation", name="creer_employe")
     */
    public function creerEmployeAction(Request $request)
    {
        $employe = new Employe();
        $nationalite = new Nationalite();
        $nationaliteemploye = new NationnaliteEmploye();
        $etat = new Etat();
        $etatemploye = new EtatEmploye();
        $fonction = new Fonction();
        $fonctionemploye = new FonctionEmploye();
        $metier = new Metier();
        $metieremploye = new MetierEmploye();
        $categorieemploye = new CategorieEmploye();
        $service = new Service();
        $typecontrat = new TypeContrat();
        $typecontratemploye = new TypeContratEmploye();


        $form = $this->createForm(EmployeType::class, $employe);
        $form1 = $this->createForm(NationaliteType::class, $nationalite);
        $form2 = $this->createForm(EtatType::class, $etat);
        $form3 = $this->createForm(FonctionType::class, $fonction);
        $form4 = $this->createForm(MetierType::class, $metier);
        $form5 = $this->createForm(CategorieEmployeType::class, $categorieemploye);
        $form6 = $this->createForm(ServiceType::class, $service);
        $form7 = $this->createForm(TypeContratType::class, $typecontrat);


        $form->handleRequest($request);
        $form1->handleRequest($request);
        $form2->handleRequest($request);
        $form3->handleRequest($request);
        $form4->handleRequest($request);
        $form5->handleRequest($request);
        $form6->handleRequest($request);
        $form7->handleRequest($request);

        if (($form->isValid()) ||($form1->isValid())||($form2->isValid())||($form3->isValid())||($form4->isValid())
            ||($form5->isValid()) ||($form6->isValid())||($form7->isValid())
        )
        {
           
            $file = $employe->getCv();
            $fileName = $this->get('app.cv_uploader')->upload($file);
                
            $employe->setCv($fileName);
    

            // ... persist the $employe variable or any other work

            $employe = $form->getData();
            $employe1 = $form['dateEmbauche']->getData();
            $nationalite = $form1['nomNationalite']->getData();
            $etat = $form2['nometat']->getData();
            $fonction = $form3['nomfonction']->getData();
            $metier = $form4['nommetier']->getData();
            $categorieemploye = $form5['nomcategorieemploye']->getData();
            $service = $form6['nomservice']->getData();
            $typecontrat = $form7['nomtypecontrat']->getData();

            //var_dump($etat);die;
            $employe->setTag(0);
            $employe->setCategorieemploye($categorieemploye);
            $employe->setService($service);
            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush();
            $nationaliteemploye->setNationalite($nationalite);
            $nationaliteemploye->setEmploye($employe);
            $nationaliteemploye->setTag(0);
            $etatemploye->setEmploye($employe);
            $etatemploye->setEtat($etat);
            $etatemploye->setDatedebutetat($employe1);
            $etatemploye->setTag(0);
            $typecontratemploye->setEmploye($employe);
            $typecontratemploye->setTypecontrat($typecontrat);
            $typecontratemploye->setDatedebutcontrat($employe1);    
            $typecontratemploye->setTag(0);
            $fonctionemploye->setEmploye($employe);
            $fonctionemploye->setFonction($fonction);
            $fonctionemploye->setDatedebutfonction($employe1);
            $fonctionemploye->setTag(0);
            $metieremploye->setMetier($metier);
            $metieremploye->setEmploye($employe);
            $metieremploye->setTag(0);
            $em->persist($nationaliteemploye);
            $em->persist($etatemploye);
            $em->persist($fonctionemploye);
            $em->persist($metieremploye);
            $em->persist($typecontratemploye);
            $em->flush();
            $this->addFlash('message','Employé Crée!');
            return $this->redirectToRoute('employe');
        }
        return $this->render('employe/creerEmploye.html.twig', ['form' => $form->createView(),
            'form1' => $form1->createView(),'form2' => $form2->createView(),'form3' => $form3->createView(),
            'form4' => $form4->createView(),'form5' => $form5->createView(),'form6' => $form6->createView(),
            'form7' => $form7->createView()
        ]);
    }

    /**
     * @Route("/employe/view/{id}", name="show_employe")
     */

    public function showPostAction($id,Request $request)
    {
        // replace this example code with whatever you need

        $nationalite = new Nationalite();
        $nationnaliteemploye = new NationnaliteEmploye();
        $form = $this->createForm(NationaliteType::class,$nationalite);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nomNationalite = $form['nomNationalite']->getData();
            $em = $this->getDoctrine()->getManager();
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $nationnaliteemploye->setEmploye($employe);
            $nationnaliteemploye->setNationalite($nomNationalite);
            $nationnaliteemploye->setTag(0);
            $em->persist($nationnaliteemploye);
            $em->flush();
            $this->addFlash('message','Nationalité Ajoutée!');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        
        $fonction = new Fonction();
        $fonctionemploye = new FonctionEmploye();
        $form1 = $this->createFormBuilder([$fonction,$fonctionemploye])
            ->add('nomfonction', EntityType::class, [
                'class' => Fonction::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('f')
                        ->orderBy('f.nomfonction', 'ASC')
                        ->where('f.tag != 1')
                        ;
                },
                'choice_label' => 'nomfonction',
                'choice_value' => function (Fonction $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Fonction',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('datedebutfonction', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]])
            ->add('datefin', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
                ])
            ->add('save', SubmitType::Class, array('label' => 'Changer Fonction', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-right:10px;')))
            ->getForm();
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {
            $nomfonction = $form1['nomfonction']->getData();
            $datedebutfonction = $form1['datedebutfonction']->getData();
            $datefin = $form1['datefin']->getData();
            $fonctionemploye->setTag(0);
            $fonctionemploye->setDatedebutfonction($datedebutfonction);
            $fonctionemploye->setDatefin($datefin);
            $fonctionemploye->setFonction($nomfonction);
            $em = $this->getDoctrine()->getManager();
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $fonctionemploye->setEmploye($employe);
            $em->persist($fonctionemploye);
            $em->flush();
            $this->addFlash('message', 'Fonction Ajouté avec Succès!');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        $metier = new Metier();
        $metieremploye = new MetierEmploye();
        $form2 = $this->createForm(MetierType::class,$metier);
        $form2->handleRequest($request);
        if ($form2->isSubmitted() && $form2->isValid()) {
            $nommetier = $form2['nommetier']->getData();
            $em = $this->getDoctrine()->getManager();
            $employe =  $em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $metieremploye->setEmploye($employe);
            $metieremploye->setMetier($nommetier);
            $metieremploye->setTag(0);
            $em->persist($metieremploye);
            $em->flush();
            $this->addFlash('message','Métier Ajouté!');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        $etat = new Etat();
        $etatemploye = new EtatEmploye();
        $form3 = $this->createFormBuilder([$etat,$etatemploye])
            ->add('nometat', EntityType::class, [
                'class' => Etat::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('et')
                        ->orderBy('et.nometat', 'ASC')
                        ->where('et.tag != 1')
                        ;
                },
                'placeholder' => 'choisir Etat',
                'choice_label' => 'nometat',
                'choice_value' => function (Etat $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('datedebutetat', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]])
            ->add('datefinetat', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]
                ])
            ->add('save', SubmitType::class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-right:10px;')))
            ->getForm();
        $form3->handleRequest($request);
        if ($form3->isSubmitted() && $form3->isValid()) {
            $nometat = $form3['nometat']->getData();
            $datedebutetat = $form3['datedebutetat']->getData();
            $datefinetat = $form3['datefinetat']->getData();
            $etatemploye->setTag(0);
            $etatemploye->setDatedebutetat($datedebutetat);
            $etatemploye->setDatefinetat($datefinetat);
            $etatemploye->setEtat($nometat);
            $em = $this->getDoctrine()->getManager();
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $etatemploye->setEmploye($employe);
            $em->persist($etatemploye);
            $em->flush();
            $this->addFlash('message', 'Etat Ajouté avec Succès!');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        $typecontrat = new TypeContrat();
        $typecontratemploye = new TypeContratEmploye();
        $form4 = $this->createFormBuilder([$typecontrat,$typecontratemploye])
            ->add('nomtypecontrat', EntityType::class, [
                'class' => TypeContrat::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.nomtypecontrat', 'ASC')
                        ->where('t.tag != 1')
                        ;
                },
                'choice_label' => 'nomtypecontrat',
                'placeholder' => 'Type de Contrat',
                'attr' => [
                    'class' => 'form-control',
                ]])
            ->add('datedebutcontrat', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                ]])
            ->add('datefincontrat', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy',
                ]
                ]
                )
            ->add('save', SubmitType::Class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-primary',
                'style' => 'margin-right:10px;')))
            ->getForm();
        $form4->handleRequest($request);
        if ($form4->isValid()) {
            $nomtypecontrat = $form4['nomtypecontrat']->getData();
            $datedebutcontrat = $form4['datedebutcontrat']->getData();
            $datefincontrat = $form4['datefincontrat']->getData();
            $em = $this->getDoctrine()->getManager();
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $typecontratemploye->setEmploye($employe);
            $typecontratemploye->setTag(0);
            //var_dump($nomtypecontrat);die;

            $typecontratemploye->setTypecontrat($nomtypecontrat);


            $typecontratemploye->setDatedebutcontrat($datedebutcontrat);
            $typecontratemploye->setDatefincontrat($datefincontrat);
            $em = $this->getDoctrine()->getManager();

            $em->persist($typecontratemploye);
            $em->flush();
            $this->addFlash('message', 'Contrat Ajouté avec Succès!');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        $categorieemploye = new CategorieEmploye();
        $form5 = $this->createForm(CategorieEmployeType::class,$categorieemploye);
        $form5->handleRequest($request);
        if ($form5->isSubmitted() && $form5->isValid()) {
            $nomcategorieemploye = $form5['nomcategorieemploye']->getData();
            $em = $this->getDoctrine()->getManager();
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $employe->setCategorieemploye($nomcategorieemploye);
            $em->persist($employe);
            $em->flush();
            $this->addFlash('message','Catégorie Ajoutée!');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        $service = new Service();
        $form6 = $this->createForm(ServiceType::class,$service);
        $form6->handleRequest($request);
        if ($form6->isSubmitted() && $form6->isValid()) {
            $nomservice = $form6['nomservice']->getData();

            $em = $this->getDoctrine()->getManager();
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $employe->setService($nomservice);
            $em->persist($employe);
            $em->flush();
            $this->addFlash('message','Service Ajouté!');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        $conjoint = new Conjoint();
        $form7 = $this->createForm(ConjointType::class, $conjoint);
        $form7->handleRequest($request);

        if (($form7->isValid())) {
            $conjoint = $form7->getData();
            $em = $this->getDoctrine()->getManager();
            $conjoint->setTag(0);
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $conjoint->setEmploye($employe);
            $em->persist($conjoint);
            $em->flush();
            $this->addFlash('message','Conjoint Ajouté');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }

        $conjoint= new Conjoint();
        $enfant = new Enfant();
        $employe = $this->getDoctrine()->getRepository('AppBundle:Employe')->find($id);
        $conjointe=$this->getDoctrine()->getRepository('AppBundle:Conjoint')->getConjoints($employe);
       // var_dump($employe);die;
        $form8 = $this->createForm(EnfantType::class,$enfant, [
            'action_name' => $conjointe]);
       
        $form8->handleRequest($request);
        if (($form8->isValid())) {
            $enfant = $form8->getData();
            $em = $this->getDoctrine()->getManager();
            $enfant->setTag(0);
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($id);
            $enfant->setEmploye($employe);
            $em->persist($enfant);
            $em->flush();
            $this->addFlash('message','Enfant Ajouté');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }

        $employe = $this->getDoctrine()->getRepository('AppBundle:Employe')->find($id);
        $nationalites = $this->getDoctrine()->getRepository('AppBundle:Nationalite')->getNationalites($employe);
        $metiers = $this->getDoctrine()->getRepository('AppBundle:Metier')->getMetiers($employe);
        $fonctions = $this->getDoctrine()->getRepository('AppBundle:Fonction')->getFonctions($employe);
        $fonction2 = $this->getDoctrine()->getRepository('AppBundle:Fonction')->getFonction1($employe);
        $etat1 = $this->getDoctrine()->getRepository('AppBundle:Etat')->getEtat1($employe);
        $etats = $this->getDoctrine()->getRepository('AppBundle:Etat')->getEtats($employe);

        $typecontrat1 = $this->getDoctrine()->getRepository('AppBundle:Typecontrat')->getContrat1($employe);
        $typecontrats = $this->getDoctrine()->getRepository('AppBundle:Typecontrat')->getContrats($employe);

        $categorieemployes = $this->getDoctrine()->getRepository('AppBundle:CategorieEmploye')->getCategories($employe);
        $services = $this->getDoctrine()->getRepository('AppBundle:Service')->getServices($employe);
        $conjoint = $this->getDoctrine()->getRepository('AppBundle:Conjoint')->getConjoints($employe);
        $conjoints = count($conjoint);
        $enfants = $this->getDoctrine()->getRepository('AppBundle:Enfant')->getEnfants($employe);

        return $this->render('employe/view.html.twig', ['employe' => $employe,
            'nationalites'=>$nationalites,'fonctions'=>$fonctions,'fonction2'=>$fonction2,'metiers'=>$metiers,
            'typecontrats' => $typecontrats,'typecontrat1' => $typecontrat1,'categorieemployes' => $categorieemployes, 'services' => $services,
            'conjoints' => $conjoints, 'conjoint' => $conjoint,
            'etat1' => $etat1, 'etats' => $etats,
            'enfants' => $enfants,
            'form' => $form->createView(),'form1' => $form1->createView(),
            'form2' => $form2->createView(), 'form3' => $form3->createView(),'form4' => $form4->createView(),
            'form5' => $form5->createView(), 'form6' => $form6->createView(), 'form7' => $form7->createView(),
            'form8' => $form8->createView(),
            ]);
    }
    /**
     * @Route("/employe/update/{id}", name="update_employe")
     */
    public function updatePostAction($id,Request $request)
    {
        // replace this example code with whatever you need
        $employe = $this->getDoctrine()->getRepository('AppBundle:Employe')->find($id);
        $employe->setCv(
            new File($this->getParameter('cvs_directory').'/'.$employe->getCv())
        );
        $form = $this->createForm(EmployeType::class, $employe);
        //var_dump($employe);die;

        $form->handleRequest($request);
       
        if (($form->isValid())
        )
        {
            
            $employe = $form->getData();
            $employe->setTag(0);
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush();
            $this->addFlash('message','Modification réussie!');
            return $this->redirectToRoute('employe');
        }
        return $this->render('employe/update.html.twig', ['form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/employe/updateconjoint/{idemp}/{id}", name="update_conjoint")
     */
    public function updateConjointAction($idemp,$id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
       // $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($idemp);
        $conjoint = $em->getRepository("\AppBundle\Entity\Conjoint")->find($id);
        //var_dump($conjoint);die;
        $form = $this->createForm(ConjointType::class, $conjoint);
        $form->handleRequest($request);
        if (($form->isValid())) {
            $conjoint = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $conjoint->setTag(0);
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($idemp);
            $conjoint->setEmploye($employe);
            $em->persist($conjoint);
            $em->flush();
            $this->addFlash('message','Modification réussi');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        return $this->render('employe/updateconjoint.html.twig', ['form' => $form->createView(),
            'conjoint' => $conjoint
        ]);
    }
    /**
     * @Route("/employe/updateenfant/{idenemp}/{idconj}/{id}", name="update_enfant")
     */
    public function updateEnfantAction($idenemp,$idconj,$id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //$conjoint = $em->getRepository("\AppBundle\Entity\Conjoint")->find($idconj);
        $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($idenemp);

        $enfant = $em->getRepository("\AppBundle\Entity\Enfant")->find($id);
        $form = $this->createForm(EnfantType::class, $enfant);
        //$form2 = $this->createForm(ConjointType::class, $conjoint);
        $form->handleRequest($request);
        if (($form->isValid())) {
            //$conjoint = $form2->getData();
            $enfant = $form->getData();
            $em = $this->getDoctrine()->getManager();
            //$conjoint->setTag(0);
            $enfant->setTag(0);
            //$enfant->setConjoint($conjoint);
            $employe=$em->getRepository("\AppBundle\Entity\Employe")->find($idenemp);
            $enfant->setEmploye($employe);
            $em->persist($employe);
            $em->flush();
            $this->addFlash('message','Modification réussi');
            return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
        }
        //var_dump($enfant);die;

        return $this->render('employe/updateenfant.html.twig', ['form' => $form->createView(),
            //'form2' => $form2->createView()
        ]);
    }

    /**
     * @Route("/deleteconjointemploye/{id}/{idemp}", name="delete_conjoint_employe")
     */
    public function deleteConjointAction($id,$idemp)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($idemp);
        $conjoint = $em->getRepository('AppBundle:Conjoint')->find($id);
        //var_dump($conjoint);die;
        $conjoint->setTag(1);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($conjoint);
        $em->flush();
        $this->addFlash('message3','Conjoint Supprimé!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));

    }

    /**
     * @Route("/deleteenfantmploye/{id}/{idenemp}", name="delete_enfant_employe")
     */
        public function deleteEnfantAction($id,$idenemp)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($idenemp);
        //

        $enfant = $em->getRepository('AppBundle:Enfant')->find($id);
        //var_dump($enfant);die;

        $enfant->setTag(1);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($enfant);
        $em->flush();
        $this->addFlash('message3','Enfant Supprimé!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));

    }
    /**
     * @Route("/deletefonctionemploye/{id}/{idfemp}", name="delete_fonction_employe")
     */
    public function deleteFonctionAction($id,$idfemp)
    {
        // replace this example code with whatever you need

        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);

        $fonctionemploye = $em->getRepository('AppBundle:FonctionEmploye')->find($idfemp);
        $fonctionemploye->setTag(1);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($fonctionemploye);
        $em->flush();
        $this->addFlash('message3','Fonction Supprimée!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));

    }
    /**
     * @Route("/deleteetatemploye/{id}/{idetemp}", name="delete_etat_employe")
     */
    public function deleteEtatAction($id,$idetemp)
    {
        // replace this example code with whatever you need

        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);
        $etatemploye = $em->getRepository('AppBundle:EtatEmploye')->find($idetemp);
        $etatemploye->setTag(1);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($etatemploye);
        $em->flush();
        $this->addFlash('message3','Etat Supprimée!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
    }
    /**
     * @Route("/deletecontratemploye/{id}/{idtemp}", name="delete_contrat_employe")
     */
    public function deleteContratAction($id,$idtemp)
    {
        // replace this example code with whatever you need

        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);
        $typecontrat = $em->getRepository('AppBundle:TypeContratEmploye')->find($idtemp);
        $typecontrat->setTag(1);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($typecontrat);
        $em->flush();
        $this->addFlash('message3','Contrat Supprimé!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));
    }

    /**
     * @Route("/deletemetieremploye/{id}/{idmemp}", name="delete_metier_employe")
     */
    public function deleteMetierAction($id,$idmemp)
    {
        // replace this example code with whatever you need

        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);
        //var_dump($employe);die;
        $metieremploye = $em->getRepository('AppBundle:MetierEmploye')->find($idmemp);
        $metieremploye->setTag(1);
        //var_dump($metieremploye);die;
        //$em->remove($nationalite);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($metieremploye);
        $em->flush();
        $this->addFlash('message3','Métier Supprimée!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));

    }
    /**
     * @Route("/deletecategorieemploye/{id}", name="delete_categorie_employe")
     */
    public function deleteCategorieAction($id)
    {


        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);
        $employe->setCategorieEmploye(null);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($employe);
        $em->flush();
        $this->addFlash('message3','Catégorie Supprimée!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));

    }
    /**
     * @Route("/deleteserviceemploye/{id}", name="delete_service_employe")
     */
    public function deleteserviceAction($id)
    {


        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);
        $employe->setService(null);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($employe);
        $em->flush();
        $this->addFlash('message3','Catégorie Supprimée!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));

    }



    /**
     * @Route("/deletenationalitemploye/{id}/{idnatemp}", name="delete_nationalite_employe")
     */
    public function deleteNationaliteAction($id,$idnatemp)
    {
        // replace this example code with whatever you need

        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);
        $nationaliteemploye = $em->getRepository('AppBundle:NationnaliteEmploye')->find($idnatemp);
        $nationaliteemploye->setTag(1);
        //$em->remove($nationalite);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($nationaliteemploye);
        $em->flush();
        $this->addFlash('message','Nationalité Supprimée!');
        return $this->redirectToRoute('show_employe',array('id' => $employe->getId()));

    }

    /**
     * @Route("/employe/delete/{id}", name="delete_employe")
     */
    public function deletePostAction($id)
    {
        // replace this example code with whatever you need
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('AppBundle:Employe')->find($id);
        $employe->setTag(1);
        //$em->remove($employe);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($employe);
        $em->flush();
        $this->addFlash('message3','Employé Supprimé!');
        return $this->redirectToRoute('employe');

    }
}
