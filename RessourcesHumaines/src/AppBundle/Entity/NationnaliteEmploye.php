<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NationnaliteEmploye
 *
 * @ORM\Table(name="nationnalite_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NationnaliteEmployeRepository")
 */
class NationnaliteEmploye
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
     * @ORM\ManyToOne(targetEntity="Nationalite",cascade = {"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $nationalite;


    /**
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;
    /**
     * @var bool
     *
     * @ORM\Column(name="tag", type="boolean")
     */
    private $tag;

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
     * @param \AppBundle\Entity\Nationalite $nationalite
     *
     * @return NationnaliteEmploye
     */
    public function setNationalite(\AppBundle\Entity\Nationalite $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return \AppBundle\Entity\Nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return NationnaliteEmploye
     */
    public function setEmploye(\AppBundle\Entity\Employe $employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \AppBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return NationnaliteEmploye
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return boolean
     */
    public function getTag()
    {
        return $this->tag;
    }
}
