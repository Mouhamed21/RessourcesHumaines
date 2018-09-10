<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrappeFamiliale
 *
 * @ORM\Table(name="grappe_familiale")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GrappeFamilialeRepository")
 */
class GrappeFamiliale
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
     * @ORM\ManyToOne(targetEntity="Enfant")
     * @ORM\JoinColumn(nullable=true)
     */
    private $enfant;
    /**
     * @ORM\ManyToOne(targetEntity="Conjoint")
     * @ORM\JoinColumn(nullable=true)
     */
    private $conjoint;
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
     * Set enfant
     *
     * @param \AppBundle\Entity\Enfant $enfant
     *
     * @return GrappeFamiliale
     */
    public function setEnfant(\AppBundle\Entity\Enfant $enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return \AppBundle\Entity\Enfant
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set conjoint
     *
     * @param \AppBundle\Entity\Conjoint $conjoint
     *
     * @return GrappeFamiliale
     */
    public function setConjoint(\AppBundle\Entity\Conjoint $conjoint)
    {
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * Get conjoint
     *
     * @return \AppBundle\Entity\Conjoint
     */
    public function getConjoint()
    {
        return $this->conjoint;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return GrappeFamiliale
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
