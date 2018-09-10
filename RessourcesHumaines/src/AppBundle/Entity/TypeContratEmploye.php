<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeContratEmploye
 *
 * @ORM\Table(name="type_contrat_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeContratEmployeRepository")
 */
class TypeContratEmploye
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
     * @ORM\Column(name="datedebutcontrat", type="datetime")
     */
    private $datedebutcontrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefincontrat", type="datetime", nullable=true)
     */
    private $datefincontrat;
    /**
     * @ORM\ManyToOne(targetEntity="TypeContrat")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typecontrat;
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
     * Set datedebutcontrat
     *
     * @param \DateTime $datedebutcontrat
     *
     * @return TypeContratEmploye
     */
    public function setDatedebutcontrat($datedebutcontrat)
    {
        $this->datedebutcontrat = $datedebutcontrat;

        return $this;
    }

    /**
     * Get datedebutcontrat
     *
     * @return \DateTime
     */
    public function getDatedebutcontrat()
    {
        return $this->datedebutcontrat;
    }

    /**
     * Set datefincontrat
     *
     * @param \DateTime $datefincontrat
     *
     * @return TypeContratEmploye
     */
    public function setDatefincontrat($datefincontrat)
    {
        $this->datefincontrat = $datefincontrat;

        return $this;
    }

    /**
     * Get datefincontrat
     *
     * @return \DateTime
     */
    public function getDatefincontrat()
    {
        return $this->datefincontrat;
    }


    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return TypeContratEmploye
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
     * Set typecontrat
     *
     * @param \AppBundle\Entity\TypeContrat $typecontrat
     *
     * @return TypeContratEmploye
     */
    public function setTypecontrat(\AppBundle\Entity\TypeContrat $typecontrat)
    {
        $this->typecontrat = $typecontrat;

        return $this;
    }

    /**
     * Get typecontrat
     *
     * @return \AppBundle\Entity\TypeContrat
     */
    public function getTypecontrat()
    {
        return $this->typecontrat;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return TypeContratEmploye
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
