<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormateurRetenu
 *
 * @ORM\Table(name="formateur_retenu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormateurRetenuRepository")
 */
class FormateurRetenu
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
     * @ORM\ManyToOne(targetEntity="Formateur")
     */
    private $formateur;
    /**
     * @ORM\ManyToOne(targetEntity="OffreFormation")
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    private $offreformation;
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
     * Set formateur
     *
     * @param \AppBundle\Entity\Formateur $formateur
     *
     * @return FormateurRetenu
     */
    public function setFormateur(\AppBundle\Entity\Formateur $formateur = null)
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * Get formateur
     *
     * @return \AppBundle\Entity\Formateur
     */
    public function getFormateur()
    {
        return $this->formateur;
    }


    /**
     * Set offreformation
     *
     * @param \AppBundle\Entity\OffreFormation $offreformation
     *
     * @return FormateurRetenu
     */
    public function setOffreformation(\AppBundle\Entity\OffreFormation $offreformation = null)
    {
        $this->offreformation = $offreformation;

        return $this;
    }

    /**
     * Get offreformation
     *
     * @return \AppBundle\Entity\OffreFormation
     */
    public function getOffreformation()
    {
        return $this->offreformation;
    }
}
