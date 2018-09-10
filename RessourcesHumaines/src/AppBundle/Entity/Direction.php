<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direction
 *
 * @ORM\Table(name="direction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DirectionRepository")
 */
class Direction
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
     * @ORM\Column(name="nomdirection", type="string", length=255)
     */
    private $nomdirection;
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
     * Set nomdirection
     *
     * @param string $nomdirection
     *
     * @return Direction
     */
    public function setNomdirection($nomdirection)
    {
        $this->nomdirection = $nomdirection;

        return $this;
    }

    /**
     * Get nomdirection
     *
     * @return string
     */
    public function getNomdirection()
    {
        return $this->nomdirection;
    }




    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Direction
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
