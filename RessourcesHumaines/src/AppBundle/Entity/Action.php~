<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 *
 * @ORM\Table(name="action")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActionRepository")
 */
class Action
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
     * @ORM\Column(name="nomAction", type="string", length=255)
     */
    private $nomAction;

    /**
     * @var float
     *
     * @ORM\Column(name="coutAction", type="float")
     */
    private $coutAction;
    /**
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formation;

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
     * Set nomAction
     *
     * @param string $nomAction
     *
     * @return Action
     */
    public function setNomAction($nomAction)
    {
        $this->nomAction = $nomAction;

        return $this;
    }

    /**
     * Get nomAction
     *
     * @return string
     */
    public function getNomAction()
    {
        return $this->nomAction;
    }

    /**
     * Set coutAction
     *
     * @param float $coutAction
     *
     * @return Action
     */
    public function setCoutAction($coutAction)
    {
        $this->coutAction = $coutAction;

        return $this;
    }

    /**
     * Get coutAction
     *
     * @return float
     */
    public function getCoutAction()
    {
        return $this->coutAction;
    }

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     *
     * @return Action
     */
    public function setFormation(\AppBundle\Entity\Formation $formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \AppBundle\Entity\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
