<?php

namespace RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conjoint
 *
 * @ORM\Table(name="conjoint")
 * @ORM\Entity(repositoryClass="RhBundle\Repository\ConjointRepository")
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    /**
     * @ORM\ManyToOne(targetEntity="Employe")
     */
    private $employe;
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
     * @var bool
     *
     * @ORM\Column(name="marier", type="boolean")
     */
    private $marier;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonInactif", type="string", length=255)
     */
    private $raisonInactif;

    /**
     * @var string
     *
     * @ORM\Column(name="SituationProfessionnelle", type="string", length=255)
     */
    private $situationProfessionnelle;


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
     * @return Conjoint
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
     * @return Conjoint
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
     * Set marier
     *
     * @param boolean $marier
     *
     * @return Conjoint
     */
    public function setMarier($marier)
    {
        $this->marier = $marier;

        return $this;
    }

    /**
     * Get marier
     *
     * @return bool
     */
    public function getMarier()
    {
        return $this->marier;
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
     * Set employe
     *
     * @param \RhBundle\Entity\Employe $employe
     *
     * @return Conjoint
     */
    public function setEmploye(\RhBundle\Entity\Employe $employe = null)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \RhBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
