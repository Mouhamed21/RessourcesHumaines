<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnfantRepository")
 */
class Enfant
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
     * @ORM\Column(name="nomEnfant", type="string", length=255)
     */
    private $nomEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomEnfant", type="string", length=255)
     */
    private $prenomEnfant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var bool
     *
     * @ORM\Column(name="sexeenfant", type="string")
     */
    private $sexeenfant;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicap", type="string")
     */
    private $handicap;

    /**
     * @var bool
     *
     * @ORM\Column(name="scolariser", type="string")
     */
    private $scolariser;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroIdentification", type="integer", unique=true)
     */
    private $numeroIdentification;
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
     * /**
     * @ORM\ManyToOne(targetEntity="Conjoint")
     * @ORM\JoinColumn(nullable=true)
     */
    private $conjoint;
    /**
     */

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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Enfant
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Enfant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    
    /**
     * Set numeroIdentification
     *
     * @param integer $numeroIdentification
     *
     * @return Enfant
     */
    public function setNumeroIdentification($numeroIdentification)
    {
        $this->numeroIdentification = $numeroIdentification;

        return $this;
    }

    /**
     * Get numeroIdentification
     *
     * @return int
     */
    public function getNumeroIdentification()
    {
        return $this->numeroIdentification;
    }


    
    /**
     * Set prenomEnfant
     *
     * @param string $prenomEnfant
     *
     * @return Enfant
     */
    public function setPrenomEnfant($prenomEnfant)
    {
        $this->prenomEnfant = $prenomEnfant;

        return $this;
    }

    /**
     * Get prenomEnfant
     *
     * @return string
     */
    public function getPrenomEnfant()
    {
        return $this->prenomEnfant;
    }

    /**
     * Set nomEnfant
     *
     * @param string $nomEnfant
     *
     * @return Enfant
     */
    public function setNomEnfant($nomEnfant)
    {
        $this->nomEnfant = $nomEnfant;

        return $this;
    }

    /**
     * Get nomEnfant
     *
     * @return string
     */
    public function getNomEnfant()
    {
        return $this->nomEnfant;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Enfant
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
     * Set sexeenfant
     *
     * @param string $sexeenfant
     *
     * @return Enfant
     */
    public function setSexeenfant($sexeenfant)
    {
        $this->sexeenfant = $sexeenfant;

        return $this;
    }

    /**
     * Get sexeenfant
     *
     * @return string
     */
    public function getSexeenfant()
    {
        return $this->sexeenfant;
    }

    /**
     * Set handicap
     *
     * @param string $handicap
     *
     * @return Enfant
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Get handicap
     *
     * @return string
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set scolariser
     *
     * @param string $scolariser
     *
     * @return Enfant
     */
    public function setScolariser($scolariser)
    {
        $this->scolariser = $scolariser;

        return $this;
    }

    /**
     * Get scolariser
     *
     * @return string
     */
    public function getScolariser()
    {
        return $this->scolariser;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return Enfant
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
     * Set conjoint
     *
     * @param \AppBundle\Entity\Conjoint $conjoint
     *
     * @return Enfant
     */
    public function setConjoint(\AppBundle\Entity\Conjoint $conjoint = null)
    {
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * Get conjoint
     *
     * @return \AppBundle\Entity\Conjoint
     */
    public function getConjoint()
    {
        return $this->conjoint;
    }
}
