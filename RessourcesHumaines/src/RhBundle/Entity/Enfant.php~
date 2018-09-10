<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\EnfantRepository")
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
     * @ORM\ManyToOne(targetEntity="Conjoint")
     */
    private $conjoint;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

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
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicap", type="boolean")
     */
    private $handicap;

    /**
     * @var bool
     *
     * @ORM\Column(name="scolariser", type="boolean")
     */
    private $scolariser;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroIdentification", type="integer")
     */
    private $numeroIdentification;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Enfant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Enfant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
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
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return Enfant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return bool
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set handicap
     *
     * @param boolean $handicap
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
     * @return bool
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set scolariser
     *
     * @param boolean $scolariser
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
     * @return bool
     */
    public function getScolariser()
    {
        return $this->scolariser;
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
     * Set conjoint
     *
     * @param \RhBundle\Entity\Conjoint $conjoint
     *
     * @return Enfant
     */
    public function setConjoint(\RhBundle\Entity\Conjoint $conjoint = null)
    {
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * Get conjoint
     *
     * @return \RhBundle\Entity\Conjoint
     */
    public function getConjoint()
    {
        return $this->conjoint;
    }
}
