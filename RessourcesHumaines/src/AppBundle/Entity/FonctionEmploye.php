<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FonctionEmploye
 *
 * @ORM\Table(name="fonction_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FonctionEmployeRepository")
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
     * @var bool
     *
     * @ORM\Column(name="tag", type="boolean")
     */
    private $tag;
    /**
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutfonction", type="datetime")
     */
    private $datedebutfonction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime", nullable=true)
     */
    private $datefin;


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
     * @param \AppBundle\Entity\Fonction $fonction
     *
     * @return FonctionEmploye
     */
    public function setFonction(\AppBundle\Entity\Fonction $fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \AppBundle\Entity\Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return FonctionEmploye
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
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return FonctionEmploye
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return FonctionEmploye
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

    /**
     * Set datedebutfonction
     *
     * @param \DateTime $datedebutfonction
     *
     * @return FonctionEmploye
     */
    public function setDatedebutfonction($datedebutfonction)
    {
        $this->datedebutfonction = $datedebutfonction;

        return $this;
    }

    /**
     * Get datedebutfonction
     *
     * @return \DateTime
     */
    public function getDatedebutfonction()
    {
        return $this->datedebutfonction;
    }
}
