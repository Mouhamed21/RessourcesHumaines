<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="nomservice", type="string", length=255)
     */
    private $nomservice;
    /**
     * @ORM\ManyToOne(targetEntity="Departement")
     */
    private $departement;
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
     * Set departement
     *
     * @param \AppBundle\Entity\Departement $departement
     *
     * @return Service
     */
    public function setDepartement(\AppBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \AppBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set nomservice
     *
     * @param string $nomservice
     *
     * @return Service
     */
    public function setNomservice($nomservice)
    {
        $this->nomservice = $nomservice;

        return $this;
    }

    /**
     * Get nomservice
     *
     * @return string
     */
    public function getNomservice()
    {
        return $this->nomservice;
    }



    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Service
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
