<?php


class Alumno {
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNac;
    private $carnet;
    private $dir;
    private $seccion;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }

    public function getCarnet() {
        return $this->carnet;
    }

    public function getDir() {
        return $this->dir;
    }

    public function getSeccion() {
        return $this->seccion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function setCarnet($carnet) {
        $this->carnet = $carnet;
    }

    public function setDir($dir) {
        $this->dir = $dir;
    }

    public function setSeccion($seccion) {
        $this->seccion = $seccion;
    }


}
