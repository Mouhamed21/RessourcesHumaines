<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetierEmploye
 *
 * @ORM\Table(name="metier_employe")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\MetierEmployeRepository")
 */
class MetierEmploye
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
     * @ORM\ManyToOne(targetEntity="Metier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $metier;
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
     * Set metier
     *
     * @param \RhBundle\Entity\Metier $metier
     *
     * @return MetierEmploye
     */
    public function setMetier(\RhBundle\Entity\Metier $metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return \RhBundle\Entity\Metier
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Set employe
     *
     * @param \RhBundle\Entity\Employe $employe
     *
     * @return MetierEmploye
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
