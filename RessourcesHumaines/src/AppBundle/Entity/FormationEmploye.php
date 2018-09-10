<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormationEmploye
 *
 * @ORM\Table(name="formation_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationEmployeRepository")
 */
class FormationEmploye
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
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutformationemploye", type="datetime")
     */
    private $datedebutformationemploye;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinformationemploye", type="datetime")
     */
    private $datefinformationemploye;

     /**
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formation;
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
     * Set datedebutformationemploye
     *
     * @param \DateTime $datedebutformationemploye
     *
     * @return FormationEmploye
     */
    public function setDatedebutformationemploye($datedebutformationemploye)
    {
        $this->datedebutformationemploye = $datedebutformationemploye;

        return $this;
    }

    /**
     * Get datedebutformationemploye
     *
     * @return \DateTime
     */
    public function getDatedebutformationemploye()
    {
        return $this->datedebutformationemploye;
    }

    /**
     * Set datefinformationemploye
     *
     * @param \DateTime $datefinformationemploye
     *
     * @return FormationEmploye
     */
    public function setDatefinformationemploye($datefinformationemploye)
    {
        $this->datefinformationemploye = $datefinformationemploye;

        return $this;
    }

    /**
     * Get datefinformationemploye
     *
     * @return \DateTime
     */
    public function getDatefinformationemploye()
    {
        return $this->datefinformationemploye;
    }

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     *
     * @return FormationEmploye
     */
    public function setFormation(\AppBundle\Entity\Formation $formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \AppBundle\Entity\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return FormationEmploye
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
