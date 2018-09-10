<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="NomFormation", type="string", length=255)
     */
    private $nomFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutformation", type="datetime")
     */
    private $datedebutformation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinformation", type="datetime")
     */
    private $datefinformation;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuFomation", type="string", length=255)
     */
    private $lieuFomation;
    /**
     * @ORM\ManyToOne(targetEntity="TypeFormation")
     */
    private $typeformation;
    /**
     * @ORM\ManyToOne(targetEntity="EtatFormation")
     */
    private $etatformation;


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
     * Set nomFormation
     *
     * @param string $nomFormation
     *
     * @return Formation
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    /**
     * Get nomFormation
     *
     * @return string
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * Set datedebutformation
     *
     * @param \DateTime $datedebutformation
     *
     * @return Formation
     */
    public function setDatedebutformation($datedebutformation)
    {
        $this->datedebutformation = $datedebutformation;

        return $this;
    }

    /**
     * Get datedebutformation
     *
     * @return \DateTime
     */
    public function getDatedebutformation()
    {
        return $this->datedebutformation;
    }

    /**
     * Set datefinformation
     *
     * @param \DateTime $datefinformation
     *
     * @return Formation
     */
    public function setDatefinformation($datefinformation)
    {
        $this->datefinformation = $datefinformation;

        return $this;
    }

    /**
     * Get datefinformation
     *
     * @return \DateTime
     */
    public function getDatefinformation()
    {
        return $this->datefinformation;
    }

    /**
     * Set lieuFomation
     *
     * @param string $lieuFomation
     *
     * @return Formation
     */
    public function setLieuFomation($lieuFomation)
    {
        $this->lieuFomation = $lieuFomation;

        return $this;
    }

    /**
     * Get lieuFomation
     *
     * @return string
     */
    public function getLieuFomation()
    {
        return $this->lieuFomation;
    }

    /**
     * Set typeformation
     *
     * @param \AppBundle\Entity\TypeFormation $typeformation
     *
     * @return Formation
     */
    public function setTypeformation(\AppBundle\Entity\TypeFormation $typeformation = null)
    {
        $this->typeformation = $typeformation;

        return $this;
    }

    /**
     * Get typeformation
     *
     * @return \AppBundle\Entity\TypeFormation
     */
    public function getTypeformation()
    {
        return $this->typeformation;
    }

    /**
     * Set etatformation
     *
     * @param \AppBundle\Entity\EtatFormation $etatformation
     *
     * @return Formation
     */
    public function setEtatformation(\AppBundle\Entity\EtatFormation $etatformation = null)
    {
        $this->etatformation = $etatformation;

        return $this;
    }

    /**
     * Get etatformation
     *
     * @return \AppBundle\Entity\EtatFormation
     */
    public function getEtatformation()
    {
        return $this->etatformation;
    }
}
