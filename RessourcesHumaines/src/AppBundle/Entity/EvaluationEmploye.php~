<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluationEmploye
 *
 * @ORM\Table(name="evaluation_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvaluationEmployeRepository")
 */
class EvaluationEmploye
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="noteEvaluation", type="integer")
     */
    private $noteEvaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text")
     */
    private $observation;
    /**
     * @ORM\ManyToOne(targetEntity="Evaluation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $evaluation;


    /**
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set noteEvaluation
     *
     * @param integer $noteEvaluation
     *
     * @return EvaluationEmploye
     */
    public function setNoteEvaluation($noteEvaluation)
    {
        $this->noteEvaluation = $noteEvaluation;

        return $this;
    }

    /**
     * Get noteEvaluation
     *
     * @return int
     */
    public function getNoteEvaluation()
    {
        return $this->noteEvaluation;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return EvaluationEmploye
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set evaluation
     *
     * @param \AppBundle\Entity\Evaluation $evaluation
     *
     * @return EvaluationEmploye
     */
    public function setEvaluation(\AppBundle\Entity\Evaluation $evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return \AppBundle\Entity\Evaluation
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return EvaluationEmploye
     */
    public function setEmploye(\AppBundle\Entity\Employe $employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \AppBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
