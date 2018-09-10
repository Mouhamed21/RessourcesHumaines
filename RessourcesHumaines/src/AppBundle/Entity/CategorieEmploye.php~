<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieEmploye
 *
 * @ORM\Table(name="categorie_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieEmployeRepository")
 */
class CategorieEmploye
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
     * @ORM\Column(name="nomcategorieemploye", type="string", length=255)
     */
    private $nomcategorieemploye;
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
     * @ORM\ManyToOne(targetEntity="StatutEmploye")
     */
    private $statutemploye;


    /**
     * Set statutemploye
     *
     * @param \AppBundle\Entity\StatutEmploye $statutemploye
     *
     * @return CategorieEmploye
     */
    public function setStatutemploye(\AppBundle\Entity\StatutEmploye $statutemploye = null)
    {
        $this->statutemploye = $statutemploye;

        return $this;
    }

    /**
     * Get statutemploye
     *
     * @return \AppBundle\Entity\StatutEmploye
     */
    public function getStatutemploye()
    {
        return $this->statutemploye;
    }

    /**
     * Set nomcategorieemploye
     *
     * @param string $nomcategorieemploye
     *
     * @return CategorieEmploye
     */
    public function setNomcategorieemploye($nomcategorieemploye)
    {
        $this->nomcategorieemploye = $nomcategorieemploye;

        return $this;
    }

    /**
     * Get nomcategorieemploye
     *
     * @return string
     */
    public function getNomcategorieemploye()
    {
        return $this->nomcategorieemploye;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return CategorieEmploye
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
