<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\FormateurRepository")
 */
class Formateur
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
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", unique=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="boitePostale", type="string", length=255)
     */
    private $boitePostale;

    /**
     * @var int
     *
     * @ORM\Column(name="codeReference", type="integer")
     */
    private $codeReference;

    /**
     * @var string
     *
     * @ORM\Column(name="themeSeminaire", type="string", length=255)
     */
    private $themeSeminaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TempsLibre", type="datetime")
     */
    private $tempsLibre;

    /**
     * @var float
     *
     * @ORM\Column(name="TarifSeminaire", type="float")
     */
    private $tarifSeminaire;


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
     * @return Formateur
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
     * @return Formateur
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
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Formateur
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Formateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Formateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set boitePostale
     *
     * @param string $boitePostale
     *
     * @return Formateur
     */
    public function setBoitePostale($boitePostale)
    {
        $this->boitePostale = $boitePostale;

        return $this;
    }

    /**
     * Get boitePostale
     *
     * @return string
     */
    public function getBoitePostale()
    {
        return $this->boitePostale;
    }

    /**
     * Set codeReference
     *
     * @param integer $codeReference
     *
     * @return Formateur
     */
    public function setCodeReference($codeReference)
    {
        $this->codeReference = $codeReference;

        return $this;
    }

    /**
     * Get codeReference
     *
     * @return int
     */
    public function getCodeReference()
    {
        return $this->codeReference;
    }

    /**
     * Set themeSeminaire
     *
     * @param string $themeSeminaire
     *
     * @return Formateur
     */
    public function setThemeSeminaire($themeSeminaire)
    {
        $this->themeSeminaire = $themeSeminaire;

        return $this;
    }

    /**
     * Get themeSeminaire
     *
     * @return string
     */
    public function getThemeSeminaire()
    {
        return $this->themeSeminaire;
    }

    /**
     * Set tempsLibre
     *
     * @param \DateTime $tempsLibre
     *
     * @return Formateur
     */
    public function setTempsLibre($tempsLibre)
    {
        $this->tempsLibre = $tempsLibre;

        return $this;
    }

    /**
     * Get tempsLibre
     *
     * @return \DateTime
     */
    public function getTempsLibre()
    {
        return $this->tempsLibre;
    }

    /**
     * Set tarifSeminaire
     *
     * @param float $tarifSeminaire
     *
     * @return Formateur
     */
    public function setTarifSeminaire($tarifSeminaire)
    {
        $this->tarifSeminaire = $tarifSeminaire;

        return $this;
    }

    /**
     * Get tarifSeminaire
     *
     * @return float
     */
    public function getTarifSeminaire()
    {
        return $this->tarifSeminaire;
    }
}
