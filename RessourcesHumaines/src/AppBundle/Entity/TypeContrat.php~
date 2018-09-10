<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeContrat
 *
 * @ORM\Table(name="type_contrat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeContratRepository")
 */
class TypeContrat
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
     * @ORM\Column(name="nomtypecontrat", type="string", length=255)
     */
    private $nomtypecontrat;
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
     * Set nomtypecontrat
     *
     * @param string $nomtypecontrat
     *
     * @return TypeContrat
     */
    public function setNomtypecontrat($nomtypecontrat)
    {
        $this->nomtypecontrat = $nomtypecontrat;

        return $this;
    }

    /**
     * Get nomtypecontrat
     *
     * @return string
     */
    public function getNomtypecontrat()
    {
        return $this->nomtypecontrat;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return TypeContrat
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
