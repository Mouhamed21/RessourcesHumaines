<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiel
 *
 * @ORM\Table(name="materiel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MaterielRepository")
 */
class Materiel
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
     * @ORM\Column(name="nomMateriel", type="string", length=255)
     */
    private $nomMateriel;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;
    
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
     * Set nomMateriel
     *
     * @param string $nomMateriel
     *
     * @return Materiel
     */
    public function setNomMateriel($nomMateriel)
    {
        $this->nomMateriel = $nomMateriel;

        return $this;
    }

    /**
     * Get nomMateriel
     *
     * @return string
     */
    public function getNomMateriel()
    {
        return $this->nomMateriel;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Materiel
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     *
     * @return Materiel
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
