<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatEmploye
 *
 * @ORM\Table(name="etat_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtatEmployeRepository")
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
     * @var bool
     *
     * @ORM\Column(name="tag", type="boolean")
     */
    private $tag;
    /**
 * @var \DateTime
 *
 * @ORM\Column(name="datedebutetat", type="datetime")
 */
    private $datedebutetat;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinetat", type="datetime", nullable=true)
     */
    private $datefinetat;

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
     * Set etat
     *
     * @param \AppBundle\Entity\Etat $etat
     *
     * @return EtatEmploye
     */
    public function setEtat(\AppBundle\Entity\Etat $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \AppBundle\Entity\Etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return EtatEmploye
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
     * @return EtatEmploye
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
     * Set datedebutetat
     *
     * @param \DateTime $datedebutetat
     *
     * @return EtatEmploye
     */
    public function setDatedebutetat($datedebutetat)
    {
        $this->datedebutetat = $datedebutetat;

        return $this;
    }

    /**
     * Get datedebutetat
     *
     * @return \DateTime
     */
    public function getDatedebutetat()
    {
        return $this->datedebutetat;
    }

    /**
     * Set datefinetat
     *
     * @param \DateTime $datefinetat
     *
     * @return EtatEmploye
     */
    public function setDatefinetat($datefinetat)
    {
        $this->datefinetat = $datefinetat;

        return $this;
    }

    /**
     * Get datefinetat
     *
     * @return \DateTime
     */
    public function getDatefinetat()
    {
        return $this->datefinetat;
    }
}
