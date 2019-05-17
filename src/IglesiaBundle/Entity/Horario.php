<?php

namespace IglesiaBundle\Entity;

/**
 * Horario
 */
class Horario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $horarios;

    /**
     * @var \IglesiaBundle\Entity\Iglesia
     */
    private $iglesia;


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
     * Set horarios
     *
     * @param string $horarios
     *
     * @return Horario
     */
    public function setHorarios($horarios)
    {
        $this->horarios = $horarios;

        return $this;
    }

    /**
     * Get horarios
     *
     * @return string
     */
    public function getHorarios()
    {
        return $this->horarios;
    }

    /**
     * Set iglesia
     *
     * @param \IglesiaBundle\Entity\Iglesia $iglesia
     *
     * @return Horario
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

