<?php

namespace IglesiaBundle\Entity;

/**
 * PiePagina
 */
class PiePagina
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \IglesiaBundle\Entity\Pagina
     */
    private $pagina;


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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return PiePagina
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set pagina
     *
     * @param \IglesiaBundle\Entity\Pagina $pagina
     *
     * @return PiePagina
     */
    public function setPagina(\IglesiaBundle\Entity\Pagina $pagina = null)
    {
        $this->pagina = $pagina;

        return $this;
    }

    /**
     * Get pagina
     *
     * @return \IglesiaBundle\Entity\Pagina
     */
    public function getPagina()
    {
        return $this->pagina;
    }
}

