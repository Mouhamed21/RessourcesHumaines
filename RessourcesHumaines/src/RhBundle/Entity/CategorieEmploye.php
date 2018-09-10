<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieEmploye
 *
 * @ORM\Table(name="categorie_employe")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\CategorieEmployeRepository")
 */
class CategorieEmploye
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
     * @ORM\ManyToOne(targetEntity="StatutEmploye")
     */
    private $statutemploye;

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
     * @return CategorieEmploye
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
     * Set statutemploye
     *
     * @param \RhBundle\Entity\StatutEmploye $statutemploye
     *
     * @return CategorieEmploye
     */
    public function setStatutemploye(\RhBundle\Entity\StatutEmploye $statutemploye = null)
    {
        $this->statutemploye = $statutemploye;

        return $this;
    }

    /**
     * Get statutemploye
     *
     * @return \RhBundle\Entity\StatutEmploye
     */
    public function getStatutemploye()
    {
        return $this->statutemploye;
    }
}
