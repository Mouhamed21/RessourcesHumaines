<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatEmploye
 *
 * @ORM\Table(name="etat_employe")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\EtatEmployeRepository")
 */
class EtatEmploye
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @ORM\ManyToOne(targetEntity="Etat")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return EtatEmploye
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set etat
     *
     * @param \RhBundle\Entity\Etat $etat
     *
     * @return EtatEmploye
     */
    public function setEtat(\RhBundle\Entity\Etat $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \RhBundle\Entity\Etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set employe
     *
     * @param \RhBundle\Entity\Employe $employe
     *
     * @return EtatEmploye
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
