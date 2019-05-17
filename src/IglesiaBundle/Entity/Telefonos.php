<?php

namespace IglesiaBundle\Entity;

/**
 * Telefonos
 */
class Telefonos
{
    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var \IglesiaBundle\Entity\Iglesia
     */
    private $iglesia;


    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Telefonos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set iglesia
     *
     * @param \IglesiaBundle\Entity\Iglesia $iglesia
     *
     * @return Telefonos
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

