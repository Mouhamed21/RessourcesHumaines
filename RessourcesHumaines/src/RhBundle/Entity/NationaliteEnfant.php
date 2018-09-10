<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NationaliteEnfant
 *
 * @ORM\Table(name="nationalite_enfant")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\NationaliteEnfantRepository")
 */
class NationaliteEnfant
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
     * @ORM\ManyToOne(targetEntity="Enfant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enfant;
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
     * @return NationaliteEnfant
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
     * Set enfant
     *
     * @param \RhBundle\Entity\Enfant $enfant
     *
     * @return NationaliteEnfant
     */
    public function setEnfant(\RhBundle\Entity\Enfant $enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return \RhBundle\Entity\Enfant
     */
    public function getEnfant()
    {
        return $this->enfant;
    }
}
