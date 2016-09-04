<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Clients
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir votre nom")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir votre prenom")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nomsociete", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir le nom de societe")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $nomsociete;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculefiscale", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir votre matricule")
     * @Assert\Regex("/[a-zA-Z0-9_]/")
     */
    private $matriculefiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="nomprojet", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir votre nom de projet")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $nomprojet;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", length=8, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir votre telephone")
     * @@Assert\Regex("/[0-9]/")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir votre email")
     * @Assert\Email()
     */
    private $email;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Clients
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
     * @return Clients
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
     * Set nomsociete
     *
     * @param string $nomsociete
     * @return Clients
     */
    public function setNomsociete($nomsociete)
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    /**
     * Get nomsociete
     *
     * @return string 
     */
    public function getNomsociete()
    {
        return $this->nomsociete;
    }

    /**
     * Set matriculefiscale
     *
     * @param string $matriculefiscale
     * @return Clients
     */
    public function setMatriculefiscale($matriculefiscale)
    {
        $this->matriculefiscale = $matriculefiscale;

        return $this;
    }

    /**
     * Get matriculefiscale
     *
     * @return string 
     */
    public function getMatriculefiscale()
    {
        return $this->matriculefiscale;
    }

    /**
     * Set nomprojet
     *
     * @param string $nomprojet
     * @return Clients
     */
    public function setNomprojet($nomprojet)
    {
        $this->nomprojet = $nomprojet;

        return $this;
    }

    /**
     * Get nomprojet
     *
     * @return string 
     */
    public function getNomprojet()
    {
        return $this->nomprojet;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Clients
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Clients
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
}
