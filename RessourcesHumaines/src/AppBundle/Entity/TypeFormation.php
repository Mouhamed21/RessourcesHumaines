<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeFormation
 *
 * @ORM\Table(name="type_formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeFormationRepository")
 */
class TypeFormation
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
     * @ORM\Column(name="nomtypeformation", type="string", length=255)
     */
    private $nomtypeformation;


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
     * Set nomtypeformation
     *
     * @param string $nomtypeformation
     *
     * @return TypeFormation
     */
    public function setNomtypeformation($nomtypeformation)
    {
        $this->nomtypeformation = $nomtypeformation;

        return $this;
    }

    /**
     * Get nomtypeformation
     *
     * @return string
     */
    public function getNomtypeformation()
    {
        return $this->nomtypeformation;
    }
}
