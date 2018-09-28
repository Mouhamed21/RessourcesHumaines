<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormateurRepository")
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
     * @ORM\Column(name="nomformateur", type="string", length=255)
     */
    private $nomformateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomformateur", type="string", length=255)
     */
    private $prenomformateur;

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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="boitepostale", type="string", length=255)
     */
    private $boitepostale;

    /**
     * @var int
     *
     * @ORM\Column(name="codereference", type="integer")
     */
    private $codereference;

    /**
     * @var string
     *
     * @ORM\Column(name="themeseminaire", type="string", length=255)
     */
    private $themeseminaire;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifsemaine", type="float")
     */
    private $tarifsemaine;


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
     * Set nomformateur
     *
     * @param string $nomformateur
     *
     * @return Formateur
     */
    public function setNomformateur($nomformateur)
    {
        $this->nomformateur = $nomformateur;

        return $this;
    }

    /**
     * Get nomformateur
     *
     * @return string
     */
    public function getNomformateur()
    {
        return $this->nomformateur;
    }

    /**
     * Set prenomformateur
     *
     * @param string $prenomformateur
     *
     * @return Formateur
     */
    public function setPrenomformateur($prenomformateur)
    {
        $this->prenomformateur = $prenomformateur;

        return $this;
    }

    /**
     * Get prenomformateur
     *
     * @return string
     */
    public function getPrenomformateur()
    {
        return $this->prenomformateur;
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
     * Set email
     *
     * @param string $email
     *
     * @return Formateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set boitepostale
     *
     * @param string $boitepostale
     *
     * @return Formateur
     */
    public function setBoitepostale($boitepostale)
    {
        $this->boitepostale = $boitepostale;

        return $this;
    }

    /**
     * Get boitepostale
     *
     * @return string
     */
    public function getBoitepostale()
    {
        return $this->boitepostale;
    }

    /**
     * Set codereference
     *
     * @param integer $codereference
     *
     * @return Formateur
     */
    public function setCodereference($codereference)
    {
        $this->codereference = $codereference;

        return $this;
    }

    /**
     * Get codereference
     *
     * @return int
     */
    public function getCodereference()
    {
        return $this->codereference;
    }

    /**
     * Set themeseminaire
     *
     * @param string $themeseminaire
     *
     * @return Formateur
     */
    public function setThemeseminaire($themeseminaire)
    {
        $this->themeseminaire = $themeseminaire;

        return $this;
    }

    /**
     * Get themeseminaire
     *
     * @return string
     */
    public function getThemeseminaire()
    {
        return $this->themeseminaire;
    }

    /**
     * Set tarifsemaine
     *
     * @param float $tarifsemaine
     *
     * @return Formateur
     */
    public function setTarifsemaine($tarifsemaine)
    {
        $this->tarifsemaine = $tarifsemaine;

        return $this;
    }

    /**
     * Get tarifsemaine
     *
     * @return float
     */
    public function getTarifsemaine()
    {
        return $this->tarifsemaine;
    }
}
