<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity
 */
class Historique
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
     * @var integer
     *
     * @ORM\Column(name="id_materiel", type="integer", nullable=false)
     */
    private $idMateriel;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entrepot", type="integer", nullable=false)
     */
    private $idEntrepot;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cmd", type="integer", nullable=false)
     */
    private $idCmd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date", nullable=false)
     */
    private $dateSortie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=false)
     */
    private $note;



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
     * Set idMateriel
     *
     * @param integer $idMateriel
     * @return Historique
     */
    public function setIdMateriel($idMateriel)
    {
        $this->idMateriel = $idMateriel;

        return $this;
    }

    /**
     * Get idMateriel
     *
     * @return integer 
     */
    public function getIdMateriel()
    {
        return $this->idMateriel;
    }

    /**
     * Set idEntrepot
     *
     * @param integer $idEntrepot
     * @return Historique
     */
    public function setIdEntrepot($idEntrepot)
    {
        $this->idEntrepot = $idEntrepot;

        return $this;
    }

    /**
     * Get idEntrepot
     *
     * @return integer 
     */
    public function getIdEntrepot()
    {
        return $this->idEntrepot;
    }

    /**
     * Set idCmd
     *
     * @param integer $idCmd
     * @return Historique
     */
    public function setIdCmd($idCmd)
    {
        $this->idCmd = $idCmd;

        return $this;
    }

    /**
     * Get idCmd
     *
     * @return integer 
     */
    public function getIdCmd()
    {
        return $this->idCmd;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     * @return Historique
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime 
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     * @return Historique
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime 
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Historique
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }
}
