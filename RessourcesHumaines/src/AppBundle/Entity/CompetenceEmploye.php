<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceEmploye
 *
 * @ORM\Table(name="competence_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompetenceEmployeRepository")
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
     * @param \AppBundle\Entity\Competence $competence
     *
     * @return CompetenceEmploye
     */
    public function setCompetence(\AppBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \AppBundle\Entity\Competence
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return CompetenceEmploye
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
