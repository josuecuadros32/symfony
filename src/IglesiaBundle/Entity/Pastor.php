<?php

namespace IglesiaBundle\Entity;

/**
 * Pastor
 */
class Pastor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $contrasena;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \IglesiaBundle\Entity\Iglesia
     */
    private $iglesia;

    /**
     * @var \IglesiaBundle\Entity\Rol
     */
    private $rol;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Pastor
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Pastor
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pastor
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
     * Set correo
     *
     * @param string $correo
     *
     * @return Pastor
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Pastor
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Pastor
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
     * Set estado
     *
     * @param string $estado
     *
     * @return Pastor
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set iglesia
     *
     * @param \IglesiaBundle\Entity\Iglesia $iglesia
     *
     * @return Pastor
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
     * Set rol
     *
     * @param \IglesiaBundle\Entity\Rol $rol
     *
     * @return Pastor
     */
    public function setRol(\IglesiaBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \IglesiaBundle\Entity\Rol
     */
    public function getRol()
    {
        return $this->rol;
    }
}

