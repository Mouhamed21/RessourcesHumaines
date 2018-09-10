<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NationaliteEmploye
 *
 * @ORM\Table(name="nationalite_employe")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\NationaliteEmployeRepository")
 */
class NationaliteEmploye
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
     * @ORM\ManyToOne(targetEntity="Nationalite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nationalite;
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
     * Set nationalite
     *
     * @param \RhBundle\Entity\Nationalite $nationalite
     *
     * @return NationaliteEmploye
     */
    public function setNationalite(\RhBundle\Entity\Nationalite $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return \RhBundle\Entity\Nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set employe
     *
     * @param \RhBundle\Entity\Employe $employe
     *
     * @return NationaliteEmploye
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
