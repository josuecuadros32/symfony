<?php

namespace IglesiaBundle\Entity;

/**
 * Subscriptor
 */
class Subscriptor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $suscrito;

    /**
     * @var \IglesiaBundle\Entity\Iglesia
     */
    private $iglesia;

    /**
     * @var \IglesiaBundle\Entity\Usuario
     */
    private $usurio;


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
     * Set suscrito
     *
     * @param boolean $suscrito
     *
     * @return Subscriptor
     */
    public function setSuscrito($suscrito)
    {
        $this->suscrito = $suscrito;

        return $this;
    }

    /**
     * Get suscrito
     *
     * @return boolean
     */
    public function getSuscrito()
    {
        return $this->suscrito;
    }

    /**
     * Set iglesia
     *
     * @param \IglesiaBundle\Entity\Iglesia $iglesia
     *
     * @return Subscriptor
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

    /**
     * Set usurio
     *
     * @param \IglesiaBundle\Entity\Usuario $usurio
     *
     * @return Subscriptor
     */
    public function setUsurio(\IglesiaBundle\Entity\Usuario $usurio = null)
    {
        $this->usurio = $usurio;

        return $this;
    }

    /**
     * Get usurio
     *
     * @return \IglesiaBundle\Entity\Usuario
     */
    public function getUsurio()
    {
        return $this->usurio;
    }
}

