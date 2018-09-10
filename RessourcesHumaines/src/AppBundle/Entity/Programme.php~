<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProgrammeRepository")
 */
class Programme
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutprogramme", type="datetime")
     */
    private $datedebutprogramme;
      /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinprogramme", type="datetime")
     */
    private $datefinprogramme;
     /**
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumn(nullable=false)
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Programme
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set datedebutprogramme
     *
     * @param \DateTime $datedebutprogramme
     *
     * @return Programme
     */
    public function setDatedebutprogramme($datedebutprogramme)
    {
        $this->datedebutprogramme = $datedebutprogramme;

        return $this;
    }

    /**
     * Get datedebutprogramme
     *
     * @return \DateTime
     */
    public function getDatedebutprogramme()
    {
        return $this->datedebutprogramme;
    }

    /**
     * Set datefinprogramme
     *
     * @param \DateTime $datefinprogramme
     *
     * @return Programme
     */
    public function setDatefinprogramme($datefinprogramme)
    {
        $this->datefinprogramme = $datefinprogramme;

        return $this;
    }

    /**
     * Get datefinprogramme
     *
     * @return \DateTime
     */
    public function getDatefinprogramme()
    {
        return $this->datefinprogramme;
    }

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     *
     * @return Programme
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
