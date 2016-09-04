<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrepot
 *
 * @ORM\Table(name="entrepot")
 * @ORM\Entity
 */
class Entrepot {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entrepot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEntrepot;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=250, nullable=false)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity="svplocation\AdminBundle\Entity\Materiel", mappedBy="entrepot",cascade={"remove", "persist"})
     */
    protected $materiels;

    public function __construct() {
        $this->materiels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Override toString() method to return the name of the group
     * @return string name
     */
    public function __toString() {
        return $this->adresse;
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
     * Set adresse
     *
     * @param string $adresse
     * @return Entrepot
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Add materiels
     *
     * @param \svplocation\AdminBundle\Entity\Materiel $materiels
     * @return Entrepot
     */
    public function addMateriel(\svplocation\AdminBundle\Entity\Materiel $materiels) {
        $this->materiels[] = $materiels;

        return $this;
    }

    /**
     * Remove materiels
     *
     * @param \svplocation\AdminBundle\Entity\Materiel $materiels
     */
    public function removeMateriel(\svplocation\AdminBundle\Entity\Materiel $materiels) {
        $this->materiels->removeElement($materiels);
    }

    /**
     * Get materiels
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMateriels() {
        return $this->materiels;
    }

    public function setMateriels(\Doctrine\Common\Collections\Collection $materiels) {

        $this->materiels = $materiels;
    }

}
