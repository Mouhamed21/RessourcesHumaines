<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="nomdepartement", type="string", length=255)
     */
    private $nomdepartement;
    /**
     * @ORM\ManyToOne(targetEntity="Direction")
     */
    private $direction;
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
     * Set direction
     *
     * @param \AppBundle\Entity\Direction $direction
     *
     * @return Departement
     */
    public function setDirection(\AppBundle\Entity\Direction $direction = null)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return \AppBundle\Entity\Direction
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set nomdepartement
     *
     * @param string $nomdepartement
     *
     * @return Departement
     */
    public function setNomdepartement($nomdepartement)
    {
        $this->nomdepartement = $nomdepartement;

        return $this;
    }

    /**
     * Get nomdepartement
     *
     * @return string
     */
    public function getNomdepartement()
    {
        return $this->nomdepartement;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Departement
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
