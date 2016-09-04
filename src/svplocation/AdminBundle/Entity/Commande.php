<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity
 */
class Commande {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cmd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCmd;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="svplocation\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_beneficiaire",referencedColumnName="id")
     */
    private $idBeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="projet", type="string", length=250, nullable=false)
     */
    private $projet;

    /**
     * @var string
     *
     * @ORM\Column(name="type_cmd", type="string", length=250, nullable=false)
     */
    private $typeCmd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date", nullable=false)
     */
    private $dateReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=250, nullable=false)
     */
    private $statut;

    public function __construct($idBeneficiaire, $projet, $typeCmd, $dateReservation, $dateRetour, $description, $statut) {
        // $this->date = new \Datetime();
        $this->idBeneficiaire = $idBeneficiaire;
        $this->projet = $projet;
        $this->typeCmd = $typeCmd;
        $this->dateReservation = $dateReservation;
        $this->dateRetour = $dateRetour;
        $this->description = $description;
        $this->statut = $statut;
    }

    /**
     * Get idCmd
     *
     * @return integer 
     */
    public function getIdCmd() {
        return $this->idCmd;
    }

    /**
     * Set idBeneficiaire
     *
     * @param integer $idBeneficiaire
     * @return Commande
     */
    public function setIdBeneficiaire($idBeneficiaire) {
        $this->idBeneficiaire = $idBeneficiaire;

        return $this;
    }

    /**
     * Get idBeneficiaire
     *
     * @return integer 
     */
    public function getIdBeneficiaire() {
        return $this->idBeneficiaire;
    }

    /**
     * Set projet
     *
     * @param string $projet
     * @return Commande
     */
    public function setProjet($projet) {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return string 
     */
    public function getProjet() {
        return $this->projet;
    }

    /**
     * Set typeCmd
     *
     * @param string $typeCmd
     * @return Commande
     */
    public function setTypeCmd($typeCmd) {
        $this->typeCmd = $typeCmd;

        return $this;
    }

    /**
     * Get typeCmd
     *
     * @return string 
     */
    public function getTypeCmd() {
        return $this->typeCmd;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     * @return Commande
     */
    public function setDateReservation($dateReservation) {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime 
     */
    public function getDateReservation() {
        return $this->dateReservation;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     * @return Commande
     */
    public function setDateRetour($dateRetour) {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime 
     */
    public function getDateRetour() {
        return $this->dateRetour;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Commande
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
     * Set statut
     *
     * @param string $statut
     * @return Commande
     */
    public function setStatut($statut) {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut() {
        return $this->statut;
    }

}
