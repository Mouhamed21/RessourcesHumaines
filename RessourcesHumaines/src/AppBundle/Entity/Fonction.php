<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FonctionRepository")
 */
class Fonction
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
     * @ORM\Column(name="nomfonction", type="string", length=255)
     */
    private $nomfonction;
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
     * Set nomfonction
     *
     * @param string $nomfonction
     *
     * @return Fonction
     */
    public function setNomfonction($nomfonction)
    {
        $this->nomfonction = $nomfonction;

        return $this;
    }

    /**
     * Get nomfonction
     *
     * @return string
     */
    public function getNomfonction()
    {
        return $this->nomfonction;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Fonction
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
