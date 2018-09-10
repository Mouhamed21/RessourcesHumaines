<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table(name="metier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MetierRepository")
 */
class Metier
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
     * @ORM\Column(name="nommetier", type="string", length=255)
     */
    private $nommetier;
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
     * Set nommetier
     *
     * @param string $nommetier
     *
     * @return Metier
     */
    public function setNommetier($nommetier)
    {
        $this->nommetier = $nommetier;

        return $this;
    }

    /**
     * Get nommetier
     *
     * @return string
     */
    public function getNommetier()
    {
        return $this->nommetier;
    }








    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Metier
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
