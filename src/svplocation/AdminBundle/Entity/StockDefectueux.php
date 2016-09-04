<?php

namespace svplocation\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockDefectueux
 *
 * @ORM\Table(name="stock_defectueux")
 * @ORM\Entity
 */
class StockDefectueux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_stock_df", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStockDf;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=250, nullable=false)
     */
    private $note;



    /**
     * Get idStockDf
     *
     * @return integer 
     */
    public function getIdStockDf()
    {
        return $this->idStockDf;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return StockDefectueux
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
