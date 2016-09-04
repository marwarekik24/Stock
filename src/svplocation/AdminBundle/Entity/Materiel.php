<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Materiel
 *
 * @ORM\Table(name="materiel")
 * @ORM\Entity
 */
class Materiel {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_materiel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idMateriel;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="svplocation\AdminBundle\Entity\Entrepot")
     * @ORM\JoinColumn(name="id_entrepot",referencedColumnName="id_entrepot")
     */
    private $idEntrepot;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="svplocation\AdminBundle\Entity\Categorie")
     * @ORM\JoinColumn(name="id_cat",referencedColumnName="id")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_piece", type="string", length=250, nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir la reference piece")
     * @Assert\Regex("/[a-zA-Z]/")
     */
    private $refPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_barre", type="integer", nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir le code barre")
     */
    private $codeBarre;

    /**
     * @var integer
     *
     * @ORM\Column(name="valeur", type="integer", nullable=false)
     * @Assert\NotBlank(message="Vous devez saisir la valeur")
     */
    private $valeur;

    /**
     * Get idMateriel
     *
     * @return integer 
     */
    public function getIdMateriel() {
        return $this->idMateriel;
    }

    /**
     * Set refPiece
     *
     * @param string $refPiece
     * @return Materiel
     */
    public function setRefPiece($refPiece) {
        $this->refPiece = $refPiece;

        return $this;
    }

    /**
     * Get refPiece
     *
     * @return string 
     */
    public function getRefPiece() {
        return $this->refPiece;
    }

    /**
     * Set codeBarre
     *
     * @param integer $codeBarre
     * @return Materiel
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;

        return $this;
    }

    /**
     * Get codeBarre
     *
     * @return integer 
     */
    public function getCodeBarre() {
        return $this->codeBarre;
    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     * @return Materiel
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer 
     */
    public function getValeur() {
        return $this->valeur;
    }

    /**
     * Get idEntrepot
     *
     * @return integer
     */
    public function getIdEntrepot() {
        return $this->idEntrepot;
    }

    /**
     * Set integer
     *
     * @param integer
     * @return Entrepot
     */
    public function setIdEntrepot($idEntrepot) {
        $this->idEntrepot = $idEntrepot;

        return $this;
    }

    /**
     * Get getIdCategorie
     *
     * @return integer
     */
    public function getIdCategorie() {
        return $this->idCategorie;
    }

    /**
     * Set integer
     *
     * @param integer
     * @return Entrepot
     */
    public function setIdCategorie($idCategorie) {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Categorie
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Override toString() method to return the name of the group
     * @return string name
     */
    public function __toString() {
        return $this->nom;
    }

}
