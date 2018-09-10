<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="nomcontact", type="string", length=255)
     */
    private $nomcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomcontact", type="string", length=255)
     */
    private $prenomcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="sexecontact", type="string", length=10)
     */
    private $sexecontact;

    /**
     * @var string
     *
     * @ORM\Column(name="emailcontact", type="string", length=255)
     */
    private $emailcontact;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", unique=true)
     */
    private $telephone;
    /**
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;


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
     * Set nomcontact
     *
     * @param string $nomcontact
     *
     * @return Contact
     */
    public function setNomcontact($nomcontact)
    {
        $this->nomcontact = $nomcontact;

        return $this;
    }

    /**
     * Get nomcontact
     *
     * @return string
     */
    public function getNomcontact()
    {
        return $this->nomcontact;
    }

    /**
     * Set prenomcontact
     *
     * @param string $prenomcontact
     *
     * @return Contact
     */
    public function setPrenomcontact($prenomcontact)
    {
        $this->prenomcontact = $prenomcontact;

        return $this;
    }

    /**
     * Get prenomcontact
     *
     * @return string
     */
    public function getPrenomcontact()
    {
        return $this->prenomcontact;
    }

    /**
     * Set sexecontact
     *
     * @param string $sexecontact
     *
     * @return Contact
     */
    public function setSexecontact($sexecontact)
    {
        $this->sexecontact = $sexecontact;

        return $this;
    }

    /**
     * Get sexecontact
     *
     * @return string
     */
    public function getSexecontact()
    {
        return $this->sexecontact;
    }

    /**
     * Set emailcontact
     *
     * @param string $emailcontact
     *
     * @return Contact
     */
    public function setEmailcontact($emailcontact)
    {
        $this->emailcontact = $emailcontact;

        return $this;
    }

    /**
     * Get emailcontact
     *
     * @return string
     */
    public function getEmailcontact()
    {
        return $this->emailcontact;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Contact
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
     * Set employe
     *
     * @param \AppBundle\Entity\Employe $employe
     *
     * @return Contact
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
