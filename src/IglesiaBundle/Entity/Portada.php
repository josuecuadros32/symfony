<?php

namespace IglesiaBundle\Entity;

/**
 * Portada
 */
class Portada
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $imagen;

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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Portada
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Portada
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set pagina
     *
     * @param \IglesiaBundle\Entity\Pagina $pagina
     *
     * @return Portada
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

