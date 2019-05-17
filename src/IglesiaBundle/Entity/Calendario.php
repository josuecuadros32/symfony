<?php

namespace IglesiaBundle\Entity;

/**
 * Calendario
 */
class Calendario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $mes;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Calendario
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set mes
     *
     * @param string $mes
     *
     * @return Calendario
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set pagina
     *
     * @param \IglesiaBundle\Entity\Pagina $pagina
     *
     * @return Calendario
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

