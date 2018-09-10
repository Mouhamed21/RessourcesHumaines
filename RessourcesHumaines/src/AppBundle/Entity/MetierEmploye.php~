<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetierEmploye
 *
 * @ORM\Table(name="metier_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MetierEmployeRepository")
 */
class MetierEmploye
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
     * @ORM\ManyToOne(targetEntity="Metier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $metier;
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
     * Set metier
     *
     * @param \AppBundle\Entity\Metier $metier
     *
     * @return MetierEmploye
     */
    public function setMetier(\AppBundle\Entity\Metier $metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return \AppBundle\Entity\Metier
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return MetierEmploye
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
     * Set tag
     *
     * @param boolean $tag
     *
     * @return MetierEmploye
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
