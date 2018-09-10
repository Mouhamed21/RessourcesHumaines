<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    /**
     * @ORM\ManyToOne(targetEntity="Departement")
     */
    private $departements;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Service
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set departements
     *
     * @param \RhBundle\Entity\Departement $departements
     *
     * @return Service
     */
    public function setDepartements(\RhBundle\Entity\Departement $departements = null)
    {
        $this->departements = $departements;

        return $this;
    }

    /**
     * Get departements
     *
     * @return \RhBundle\Entity\Departement
     */
    public function getDepartements()
    {
        return $this->departements;
    }
}
