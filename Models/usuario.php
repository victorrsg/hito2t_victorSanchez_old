<?php
abstract class usuario{
    private $id;
    private $nombre;
    private $contraseña;
    private $correo;
    private $foto;

    // Constructor

    public function __construct($id, $nombre, $contraseña, $correo, $foto)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->contraseña = $contraseña;
        $this->correo = $correo;
        $this->foto = $foto;
    }

    // GETTERS Y SETTERS
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }



}