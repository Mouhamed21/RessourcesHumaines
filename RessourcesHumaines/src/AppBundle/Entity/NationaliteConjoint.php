<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NationaliteConjoint
 *
 * @ORM\Table(name="nationnalite_conjoint")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NationaliteConjointRepository")
 */
class NationaliteConjoint
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
     * @ORM\ManyToOne(targetEntity="Nationalite")
     * @ORM\JoinColumn(nullable=false, unique=false)
     */
    private $nationalite;


    /**
     * @ORM\ManyToOne(targetEntity="Conjoint")
     * @ORM\JoinColumn(nullable=false)
     */
    private $conjoint;

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
     * Set nationalite
     *
     * @param \AppBundle\Entity\Nationalite $nationalite
     *
     * @return NationaliteConjoint
     */
    public function setNationalite(\AppBundle\Entity\Nationalite $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return \AppBundle\Entity\Nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set conjoint
     *
     * @param \AppBundle\Entity\Conjoint $conjoint
     *
     * @return NationaliteConjoint
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
}
