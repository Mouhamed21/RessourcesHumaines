<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtatRepository")
 */
class Etat
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
     * @ORM\Column(name="nometat", type="string", length=255)
     */
    private $nometat;
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
     * Set nometat
     *
     * @param string $nometat
     *
     * @return Etat
     */
    public function setNometat($nometat)
    {
        $this->nometat = $nometat;

        return $this;
    }

    /**
     * Get nometat
     *
     * @return string
     */
    public function getNometat()
    {
        return $this->nometat;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Etat
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
