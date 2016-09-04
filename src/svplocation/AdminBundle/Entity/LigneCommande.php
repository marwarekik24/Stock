<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="ligne_commande")
 * @ORM\Entity
 */
class LigneCommande {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ligne_cmd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigneCmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cmd", type="integer", nullable=false)
     */
    private $idCmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_materiel", type="integer", nullable=false)
     */
    private $idMateriel;

    /**
     * @var integer
     *
     * @ORM\Column(name="qt_demande", type="integer", nullable=false)
     */
    private $qtDemande;

    public function __construct($idCmd,$idMateriel,$qtDemande) {
        // $this->date = new \Datetime();
        $this->idCmd = $idCmd;
        $this->idMateriel =  $idMateriel;
        $this->qtDemande = $qtDemande;
        
    }

    /**
     * Get idLigneCmd
     *
     * @return integer 
     */
    public function getIdLigneCmd() {
        return $this->idLigneCmd;
    }

    /**
     * Set idCmd
     *
     * @param integer $idCmd
     * @return LigneCommande
     */
    public function setIdCmd($idCmd) {
        $this->idCmd = $idCmd;

        return $this;
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
     * Set idMateriel
     *
     * @param integer $idMateriel
     * @return LigneCommande
     */
    public function setIdMateriel($idMateriel) {
        $this->idMateriel = $idMateriel;

        return $this;
    }

    /**
     * Get idMateriel
     *
     * @return integer 
     */
    public function getIdMateriel() {
        return $this->idMateriel;
    }

    /**
     * Set qtDemande
     *
     * @param integer $qtDemande
     * @return LigneCommande
     */
    public function setQtDemande($qtDemande) {
        $this->qtDemande = $qtDemande;

        return $this;
    }

    /**
     * Get qtDemande
     *
     * @return integer 
     */
    public function getQtDemande() {
        return $this->qtDemande;
    }

}
