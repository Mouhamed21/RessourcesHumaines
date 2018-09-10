<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreFormation
 *
 * @ORM\Table(name="offre_formation")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\OffreFormationRepository")
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
     * @ORM\Column(name="periode", type="datetime")
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuModule", type="string", length=255)
     */
    private $contenuModule;


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
     * Set periode
     *
     * @param \DateTime $periode
     *
     * @return OffreFormation
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \DateTime
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set contenuModule
     *
     * @param string $contenuModule
     *
     * @return OffreFormation
     */
    public function setContenuModule($contenuModule)
    {
        $this->contenuModule = $contenuModule;

        return $this;
    }

    /**
     * Get contenuModule
     *
     * @return string
     */
    public function getContenuModule()
    {
        return $this->contenuModule;
    }
}
