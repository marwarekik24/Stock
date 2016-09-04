<?php

namespace svplocation\AdminBundle\Entity;


class Location
{
    private $idLocation;
    private $json;



    /**
     * Get $idLocation
     *
     * @return integer 
     */
    public function getIdLocation()
    {
        return $this->idLocation;
    }

    /**
     * Set json
     *
     * @param string $json
     * @return Json
     */
    public function setJson($json)
    {
        $this->json = $json;

        return $this;
    }

    /**
     * Get json
     *
     * @return string 
     */
    public function getJson()
    {
        return $this->json;
    }
}
