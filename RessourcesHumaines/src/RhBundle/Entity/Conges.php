<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conges
 *
 * @ORM\Table(name="conges")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\CongesRepository")
 */
class Conges
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
     * @ORM\Column(name="DateDepart", type="datetime")
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRetour", type="datetime")
     */
    private $dateRetour;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="Employe")
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
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Conges
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     *
     * @return Conges
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Conges
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set employe
     *
     * @param \RhBundle\Entity\Employe $employe
     *
     * @return Conges
     */
    public function setEmploye(\RhBundle\Entity\Employe $employe = null)
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
