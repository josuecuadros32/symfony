<?php

namespace IglesiaBundle\Entity;

/**
 * RedesSociales
 */
class RedesSociales
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \IglesiaBundle\Entity\Iglesia
     */
    private $iglesia;


    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return RedesSociales
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set iglesia
     *
     * @param \IglesiaBundle\Entity\Iglesia $iglesia
     *
     * @return RedesSociales
     */
    public function setIglesia(\IglesiaBundle\Entity\Iglesia $iglesia = null)
    {
        $this->iglesia = $iglesia;

        return $this;
    }

    /**
     * Get iglesia
     *
     * @return \IglesiaBundle\Entity\Iglesia
     */
    public function getIglesia()
    {
        return $this->iglesia;
    }
}

