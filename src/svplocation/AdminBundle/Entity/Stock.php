<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_stock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStock;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entrepot", type="integer", nullable=false)
     */
    private $idEntrepot;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_globale", type="string", length=250, nullable=false)
     */
    private $refGlobale;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_pience", type="string", length=250, nullable=false)
     */
    private $refPience;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;



    /**
     * Get idStock
     *
     * @return integer 
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * Set idEntrepot
     *
     * @param integer $idEntrepot
     * @return Stock
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
     * Set refGlobale
     *
     * @param string $refGlobale
     * @return Stock
     */
    public function setRefGlobale($refGlobale)
    {
        $this->refGlobale = $refGlobale;

        return $this;
    }

    /**
     * Get refGlobale
     *
     * @return string 
     */
    public function getRefGlobale()
    {
        return $this->refGlobale;
    }

    /**
     * Set refPience
     *
     * @param string $refPience
     * @return Stock
     */
    public function setRefPience($refPience)
    {
        $this->refPience = $refPience;

        return $this;
    }

    /**
     * Get refPience
     *
     * @return string 
     */
    public function getRefPience()
    {
        return $this->refPience;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Stock
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
