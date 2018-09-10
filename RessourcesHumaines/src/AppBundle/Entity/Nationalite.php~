<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nationalite
 *
 * @ORM\Table(name="nationnalite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NationaliteRepository")
 */
class Nationalite
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
     * @ORM\Column(name="nomNationalite", type="string", length=255)
     */
    private $nomNationalite;
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
     * Set nomNationalite
     *
     * @param string $nomNationalite
     *
     * @return Nationalite
     */
    public function setNomNationalite($nomNationalite)
    {
        $this->nomNationalite = $nomNationalite;

        return $this;
    }

    /**
     * Get nomNationalite
     *
     * @return string
     */
    public function getNomNationalite()
    {
        return $this->nomNationalite;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Nationalite
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
