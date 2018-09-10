<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conjoint
 *
 * @ORM\Table(name="conjoint")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConjointRepository")
 */
class Conjoint
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
     * @ORM\Column(name="nomConjoint", type="string", length=255)
     */
    private $nomConjoint;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomConjoint", type="string", length=255)
     */
    private $prenomConjoint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="SituationMatrimoniale", type="string")
     */
    private $SituationMatrimoniale;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonInactif", type="string", length=255)
     */
    private $raisonInactif;

    /**
     * @var string
     *
     * @ORM\Column(name="situationProfessionnelle", type="string", length=255)
     */
    private $situationProfessionnelle;

    /**
     * @var bool
     *
     * @ORM\Column(name="tag", type="boolean")
     */
    private $tag;
    /**
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;
    /**

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
     * Set nomconjoint
     *
     * @param string $nomconjoint
     *
     * @return Conjoint
     */
    public function setNomconjoint($nomConjoint)
    {
        $this->nomConjoint= $nomConjoint;

        return $this;
    }

    /**
     * Get nomconjoint
     *
     * @return string
     */
    public function getNomconjoint()
    {
        return $this->nomConjoint;
    }

    /**
     * Set prenomConjoint
     *
     * @param string $prenomConjoint
     *
     * @return Conjoint
     */
    public function setPrenomConjoint($prenomConjoint)
    {
        $this->prenomConjoint = $prenomConjoint;

        return $this;
    }

    /**
     * Get prenomConjoint
     *
     * @return string
     */
    public function getPrenomConjoint()
    {
        return $this->prenomConjoint;
    }






    

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Conjoint
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }



    /**
     * Set raisonInactif
     *
     * @param string $raisonInactif
     *
     * @return Conjoint
     */
    public function setRaisonInactif($raisonInactif)
    {
        $this->raisonInactif = $raisonInactif;

        return $this;
    }

    /**
     * Get raisonInactif
     *
     * @return string
     */
    public function getRaisonInactif()
    {
        return $this->raisonInactif;
    }

    /**
     * Set situationProfessionnelle
     *
     * @param string $situationProfessionnelle
     *
     * @return Conjoint
     */
    public function setSituationProfessionnelle($situationProfessionnelle)
    {
        $this->situationProfessionnelle = $situationProfessionnelle;

        return $this;
    }

    /**
     * Get situationProfessionnelle
     *
     * @return string
     */
    public function getSituationProfessionnelle()
    {
        return $this->situationProfessionnelle;
    }



   

    /**
     * Set situationMatrimoniale
     *
     * @param string $situationMatrimoniale
     *
     * @return Conjoint
     */
    public function setSituationMatrimoniale($situationMatrimoniale)
    {
        $this->SituationMatrimoniale = $situationMatrimoniale;

        return $this;
    }

    /**
     * Get situationMatrimoniale
     *
     * @return string
     */
    public function getSituationMatrimoniale()
    {
        return $this->SituationMatrimoniale;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Conjoint
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

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return Conjoint
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
}
