<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvaluationRepository")
 */
class Evaluation
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
     * @var string
     *
     * @ORM\Column(name="nomEvaluation", type="string", length=255)
     */
    private $nomEvaluation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="TypeEvaluation")
     */
    private $typeevaluation;

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
     * Set nomEvaluation
     *
     * @param string $nomEvaluation
     *
     * @return Evaluation
     */
    public function setNomEvaluation($nomEvaluation)
    {
        $this->nomEvaluation = $nomEvaluation;

        return $this;
    }

    /**
     * Get nomEvaluation
     *
     * @return string
     */
    public function getNomEvaluation()
    {
        return $this->nomEvaluation;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Evaluation
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Evaluation
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Evaluation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nomtypeevaluation
     *
     * @param \AppBundle\Entity\NomTypeEvaluation $nomtypeevaluation
     *
     * @return Evaluation
     */
    public function setNomtypeevaluation(\AppBundle\Entity\NomTypeEvaluation $nomtypeevaluation = null)
    {
        $this->nomtypeevaluation = $nomtypeevaluation;

        return $this;
    }

    /**
     * Get nomtypeevaluation
     *
     * @return \AppBundle\Entity\NomTypeEvaluation
     */
    public function getNomtypeevaluation()
    {
        return $this->nomtypeevaluation;
    }

    /**
     * Set typeevaluation
     *
     * @param \AppBundle\Entity\TypeEvaluation $typeevaluation
     *
     * @return Evaluation
     */
    public function setTypeevaluation(\AppBundle\Entity\TypeEvaluation $typeevaluation = null)
    {
        $this->typeevaluation = $typeevaluation;

        return $this;
    }

    /**
     * Get typeevaluation
     *
     * @return \AppBundle\Entity\TypeEvaluation
     */
    public function getTypeevaluation()
    {
        return $this->typeevaluation;
    }
}
