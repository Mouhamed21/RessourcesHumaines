<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutEmploye
 *
 * @ORM\Table(name="statut_employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatutEmployeRepository")
 */
class StatutEmploye
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
     * @ORM\Column(name="nomstatutemploye", type="string", length=255)
     */
    private $nomstatutemploye;
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
     * Set nomstatutemploye
     *
     * @param string $nomstatutemploye
     *
     * @return StatutEmploye
     */
    public function setNomstatutemploye($nomstatutemploye)
    {
        $this->nomstatutemploye = $nomstatutemploye;

        return $this;
    }

    /**
     * Get nomstatutemploye
     *
     * @return string
     */
    public function getNomstatutemploye()
    {
        return $this->nomstatutemploye;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return StatutEmploye
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
