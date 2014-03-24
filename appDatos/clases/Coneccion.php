<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coneccion
 *
 * @author alphyon
 */
class Coneccion {
    private $usuario = 'root';
    private $clave = 'prueba';
    private $host = 'localhost';
    
    public function conectar(){
        error_reporting(0);
        $coneccion = mysql_connect($this->host, $this->usuario, $this->clave);
        
        if($coneccion){
            return '1';
        }else{
            return "Error al Conectar # de Error: ".\mysql_errno();
        }
    }
}
