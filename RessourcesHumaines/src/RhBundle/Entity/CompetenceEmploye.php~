<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceEmploye
 *
 * @ORM\Table(name="competence_employe")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\CompetenceEmployeRepository")
 */
class CompetenceEmploye
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
     * @ORM\ManyToOne(targetEntity="Competence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competence;
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
     * Set competence
     *
     * @param \RhBundle\Entity\Competence $competence
     *
     * @return CompetenceEmploye
     */
    public function setCompetence(\RhBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \RhBundle\Entity\Competence
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set employe
     *
     * @param \RhBundle\Entity\Employe $employe
     *
     * @return CompetenceEmploye
     */
    public function setEmploye(\RhBundle\Entity\Employe $employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \RhBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
