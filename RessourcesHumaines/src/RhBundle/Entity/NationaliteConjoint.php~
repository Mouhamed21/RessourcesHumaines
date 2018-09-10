<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NationaliteConjoint
 *
 * @ORM\Table(name="nationalite_conjoint")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\NationaliteConjointRepository")
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
     * @ORM\JoinColumn(nullable=false)
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
     * @param \RhBundle\Entity\Nationalite $nationalite
     *
     * @return NationaliteConjoint
     */
    public function setNationalite(\RhBundle\Entity\Nationalite $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return \RhBundle\Entity\Nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set conjoint
     *
     * @param \RhBundle\Entity\Conjoint $conjoint
     *
     * @return NationaliteConjoint
     */
    public function setConjoint(\RhBundle\Entity\Conjoint $conjoint)
    {
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * Get conjoint
     *
     * @return \RhBundle\Entity\Conjoint
     */
    public function getConjoint()
    {
        return $this->conjoint;
    }
}
