<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEvaluation
 *
 * @ORM\Table(name="type_evaluation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeEvaluationRepository")
 */
class TypeEvaluation
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
     * @ORM\Column(name="nomTypeEvaluation", type="string", length=255)
     */
    private $nomTypeEvaluation;


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
     * Set nomTypeEvaluation
     *
     * @param string $nomTypeEvaluation
     *
     * @return TypeEvaluation
     */
    public function setNomTypeEvaluation($nomTypeEvaluation)
    {
        $this->nomTypeEvaluation = $nomTypeEvaluation;

        return $this;
    }

    /**
     * Get nomTypeEvaluation
     *
     * @return string
     */
    public function getNomTypeEvaluation()
    {
        return $this->nomTypeEvaluation;
    }
}
