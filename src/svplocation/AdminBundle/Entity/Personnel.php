<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Personnel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Personnel
{
    /**
     * @var integer
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
     * @Assert\NotBlank(message="Vous devez saisir votre nom")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\NotBlank(message="Vous devez saisir votre prenom")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $prenom;

     /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir votre email")
     * @Assert\Email()
     */
    private $email;

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
     * @ORM\Column(name="fonction", type="string", length=255)
     * @Assert\NotBlank(message="Vous devez saisir votre fonction")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255)
     * @Assert\NotBlank(message="Vous devez saisir votre matricule")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $matricule;


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
     * @return Personnel
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
     * @return Personnel
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
     * Set email
     *
     * @param string $email
     * @return Personnel
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
     * Set telephone
     *
     * @param integer $telephone
     * @return Personnel
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Personnel
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
     * Set matricule
     *
     * @param string $matricule
     * @return Personnel
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
}
