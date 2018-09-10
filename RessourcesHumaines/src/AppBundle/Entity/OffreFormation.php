<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreFormation
 *
 * @ORM\Table(name="offre_formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OffreFormationRepository")
 */
class OffreFormation
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
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float")
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutoffre", type="datetime")
     */
    private $datedebutoffre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinoffre", type="datetime")
     */
    private $datefinoffre;
    /**
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $formation;
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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return OffreFormation
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return OffreFormation
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return OffreFormation
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set datedebutoffre
     *
     * @param \DateTime $datedebutoffre
     *
     * @return OffreFormation
     */
    public function setDatedebutoffre($datedebutoffre)
    {
        $this->datedebutoffre = $datedebutoffre;

        return $this;
    }

    /**
     * Get datedebutoffre
     *
     * @return \DateTime
     */
    public function getDatedebutoffre()
    {
        return $this->datedebutoffre;
    }

    /**
     * Set datefinoffre
     *
     * @param \DateTime $datefinoffre
     *
     * @return OffreFormation
     */
    public function setDatefinoffre($datefinoffre)
    {
        $this->datefinoffre = $datefinoffre;

        return $this;
    }

    /**
     * Get datefinoffre
     *
     * @return \DateTime
     */
    public function getDatefinoffre()
    {
        return $this->datefinoffre;
    }

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     *
     * @return OffreFormation
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
}
