<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employe
 *
 * @ORM\Table(name="employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeRepository")
 */
class Employe
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
     * @var bool
     *
     * @ORM\Column(name="sexe", type="string")
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255, unique=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", unique=true)
     */
    private $telephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var bool
     *
     * @ORM\Column(name="situationMatri", type="string")
     */
    private $situationMatri;
   
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmbauche", type="datetime")
     */
    private $dateEmbauche;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNaissance", type="string", length=255)
     */
    private $lieuNaissance;
    /**
     * @var string
     *
     * @ORM\Column(name="lieuTravail", type="string", length=255)
     */
    private $lieuTravail;
    /**
     * @ORM\ManyToOne(targetEntity="CategorieEmploye")
     */
    private $categorieemploye;
    /**
     * @ORM\ManyToOne(targetEntity="Service")
     */
    private $service;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Employe
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
     * @return Employe
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
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return Employe
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
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Employe
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Employe
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
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Employe
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Employe
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
     * Set marier
     *
     * @param boolean $marier
     *
     * @return Employe
     */



    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     *
     * @return Employe
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return \DateTime
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     *
     * @return Employe
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set categorieemploye
     *
     * @param \AppBundle\Entity\CategorieEmploye $categorieemploye
     *
     * @return Employe
     */
    public function setCategorieemploye(\AppBundle\Entity\CategorieEmploye $categorieemploye = null)
    {
        $this->categorieemploye = $categorieemploye;

        return $this;
    }

    /**
     * Get categorieemploye
     *
     * @return \AppBundle\Entity\CategorieEmploye
     */
    public function getCategorieemploye()
    {
        return $this->categorieemploye;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return Employe
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set situationMatri
     *
     * @param string $situationMatri
     *
     * @return Employe
     */
    public function setSituationMatri($situationMatri)
    {
        $this->situationMatri = $situationMatri;
        return $this;
    }

    /**
     * Get situationMatri
     *
     * @return string
     */
    public function getSituationMatri()
    {
        return $this->situationMatri;
    }


    /**
     * Set tag
     *
     * @param boolean $tag
     *
     * @return Employe
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
     * Get the value of lieuTravail
     *
     * @return  string
     */ 
    public function getLieuTravail()
    {
        return $this->lieuTravail;
    }

    /**
     * Set the value of lieuTravail
     *
     * @param  string  $lieuTravail
     *
     * @return  self
     */ 
    public function setLieuTravail(string $lieuTravail)
    {
        $this->lieuTravail = $lieuTravail;

        return $this;
    }

    
}
