<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Formation;
use AppBundle\Form\FormationType;
use AppBundle\Form\ProgrammeType;
use AppBundle\Entity\Programme;
use AppBundle\Form\ActionType;
use AppBundle\Entity\Action;
use AppBundle\Form\MaterielType;
use AppBundle\Entity\Materiel;
use AppBundle\Form\OffreFormationType;
use AppBundle\Entity\OffreFormation;
use AppBundle\Entity\Employe;
use AppBundle\Entity\FormationEmploye;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Tests\Extension\Core\Type\SubmitTypeTest;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;
/**
 * Formation controller.
 *
 * @Route("/formation")
 */
class FormationController extends Controller
{
    /**
     * Lists all Formation entities.
     *
     * @Route("/", name="formation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('AppBundle:Formation')->findFormations();

        return $this->render('formation/index.html.twig', array(
            'formations' => $formations,
        ));
    }

    /**
     * Creates a new Formation entity.
     *
     * @Route("/new", name="formation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formation = new Formation();
        $form = $this->createForm('AppBundle\Form\FormationType', $formation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            $this->addFlash('message4','La formation a été ajoutée avec succès');
            return $this->redirectToRoute('formation_show', array('id' => $formation->getId()));
        }
        return $this->render('formation/new.html.twig', array(
            'formation' => $formation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formation entity.
     *
     * @Route("/{id}", name="formation_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(Formation $formation,Request $request)
    {
        $deleteForm = $this->createDeleteForm($formation);
        $em = $this->getDoctrine()->getManager();
        $formations = $em->getRepository('AppBundle:Formation')->getFormations($formation);
        $programmes = $em->getRepository('AppBundle:Programme')->getProgrammes($formation);
        $actions = $em->getRepository('AppBundle:Action')->getActions($formation);
        $materiels = $em->getRepository('AppBundle:Materiel')->getMateriels($formation);
        $offreFormations = $em->getRepository('AppBundle:OffreFormation')->getOffreFormations($formation);
        $employes = $em->getRepository('AppBundle:Employe')->getEmployees($formation);
        
        $programme = new Programme();
        $programmeform = $this->createForm(ProgrammeType::class, $programme);
        $programmeform->handleRequest($request);
        
        if (($programmeform->isValid())) {
            $programme = $programmeform->getData();
            $em = $this->getDoctrine()->getManager();
            $programme->setFormation($formation); 
            $em->persist($programme);
            $em->flush();
            $this->addFlash('message4','Programme Ajouté');
            return $this->redirectToRoute('formation_show',array('id' => $formation->getId()));
        }
        $action = new Action();
        $actionform = $this->createForm(ActionType::class, $action);
        $actionform->handleRequest($request);
        
        if (($actionform->isValid())) {
            $action = $actionform->getData();
            $em = $this->getDoctrine()->getManager();
            $action->setFormation($formation); 
            $em->persist($action);
            $em->flush();
            $this->addFlash('message4','Action Ajoutée');
            return $this->redirectToRoute('formation_show',array('id' => $formation->getId()));
        }
        $materiel = new Materiel();
        $materielform = $this->createForm(MaterielType::class, $materiel);
        $materielform->handleRequest($request);
        
        if (($materielform->isValid())) {
            $materiel = $materielform->getData();
            $em = $this->getDoctrine()->getManager();
            $materiel->setFormation($formation); 
            $em->persist($materiel);
            $em->flush();
            $this->addFlash('message4','materiel Ajouté');
            return $this->redirectToRoute('formation_show',array('id' => $formation->getId()));
        }
        $offreformation = new OffreFormation();
        $offreformationform = $this->createForm(OffreFormationType::class, $offreformation);
        $offreformationform->handleRequest($request);
        
        if (($offreformationform->isValid())) {
            $offreformation = $offreformationform->getData();
            $em = $this->getDoctrine()->getManager();
            $offreformation->setFormation($formation); 
            $em->persist($offreformation);
            $em->flush();
            $this->addFlash('message4',"Appel d'offres de Fromation Ajouté");
            return $this->redirectToRoute('formation_show',array('id' => $formation->getId()));
        }
        $employe = new Employe();
        $formationemploye = new Formationemploye();
        $form1 = $this->createFormBuilder([$employe,$formationemploye])
            ->add('employe', EntityType::class,[
                'class' => Employe::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->orderBy('e.prenom', 'ASC')
                        ->where('e.tag != 1')
                        ;
                },
               
                //'choice_label' => 'prenom',
                    'choice_label' => function ($employe) {
                        return $employe->getPrenom() . ' ' . $employe->getNom(). ' ' .$employe->getMatricule();
                    },
                    
                'choice_value' => function (Employe $entity = null) {
                    return $entity ? $entity->getId() : '';
                },
                'placeholder' => 'Choisir Un Employe',
                'attr' => [
                    'class' => 'form-control',
                ]])
                ->add('datedebutformationemploye',DateType::class,[
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    
                    'attr' => [
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy'
                    ]
                ])
                ->add('datefinformationemploye',DateType::class,[
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    
                    'attr' => [
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy'
                    ]
                ])
                ->add('save',SubmitType::class, array('label' => 'Enregistrer', 'attr' => array('class'=>'btn btn-primary',
                'style' => 'margin-right:10px;')))
            ->getForm();
            $form1->handleRequest($request);
            if ($form1->isSubmitted() && $form1->isValid()) {

                $employe= $form1['employe']->getData();   
                $datedebutformationemploye = $form1['datedebutformationemploye']->getData(); 
                $datedebutformationemploye = $form1['datefinformationemploye']->getData(); 
                $formationemploye->setDatedebutformationemploye($datedebutformationemploye);
                $formationemploye->setDatefinformationemploye($datedebutformationemploye);
                $formationemploye->setEmploye($employe); 
                $formationemploye->setFormation($formation);
                $em = $this->getDoctrine()->getManager();
                $em->persist($formationemploye);
                $em->flush();
                $this->addFlash('message4', 'Employe Ajouté!');
                return $this->redirectToRoute('formation_show',array('id' => $formation->getId()));
            }
        return $this->render('formation/show.html.twig', array(
            'formation' => $formation,
            'formations' => $formations,
            'employes' => $employes,
            'programmes' => $programmes,
            'actions' => $actions,
            'materiels' => $materiels,
            'offreFormations' => $offreFormations,
            'delete_form' => $deleteForm->createView(),
            'programme_form' => $programmeform->createView(),
            'action_form' => $actionform->createView(),
            'materiel_form' => $materielform->createView(),
            'form1' => $form1->createView(),
            'offreformation_form' => $offreformationform->createView(),
        ));
    }
    

    /**
     * Displays a form to edit an existing Formation entity.
     *
     * @Route("/{id}/edit", name="formation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Formation $formation)
    {
        $deleteForm = $this->createDeleteForm($formation);
        $editForm = $this->createForm('AppBundle\Form\FormationType', $formation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            $this->addFlash('message4','Formation Modifiée');
            return $this->redirectToRoute('formation_show', array('id' => $formation->getId()));
        }

        return $this->render('formation/edit.html.twig', array(
            'formation' => $formation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Formation entity.
     *
     * @Route("/{id}", name="formation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Formation $formation)
    {
        $form = $this->createDeleteForm($formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formation);
            $em->flush();
        }

        return $this->redirectToRoute('formation_index');
    }

    /**
     * Creates a form to delete a Formation entity.
     *
     * @param Formation $formation The Formation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formation $formation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formation_delete', array('id' => $formation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
