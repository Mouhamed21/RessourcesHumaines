<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatFormation
 *
 * @ORM\Table(name="etat_formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtatFormationRepository")
 */
class EtatFormation
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
     * @ORM\Column(name="nometatformation", type="string", length=255)
     */
    private $nometatformation;


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
     * Set nometatformation
     *
     * @param string $nometatformation
     *
     * @return EtatFormation
     */
    public function setNometatformation($nometatformation)
    {
        $this->nometatformation = $nometatformation;

        return $this;
    }

    /**
     * Get nometatformation
     *
     * @return string
     */
    public function getNometatformation()
    {
        return $this->nometatformation;
    }
}
