<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FonctionEmploye
 *
 * @ORM\Table(name="fonction_employe")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\FonctionEmployeRepository")
 */
class FonctionEmploye
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
     * @ORM\ManyToOne(targetEntity="Fonction")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fonction;
    /**
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;

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
     * Set fonction
     *
     * @param \RhBundle\Entity\Fonction $fonction
     *
     * @return FonctionEmploye
     */
    public function setFonction(\RhBundle\Entity\Fonction $fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \RhBundle\Entity\Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set employe
     *
     * @param \RhBundle\Entity\Employe $employe
     *
     * @return FonctionEmploye
     */
    public function setEmploye(\RhBundle\Entity\Employe $employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \RhBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
