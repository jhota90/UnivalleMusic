<?php

class Nacionalidad
{
    
    Private $codigo;
    Private $nombre;
    function __construct() {}
    
      function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    
        function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    function getCodigo() {
        return $this->codigo;
    }
    
    function getNombre() {
        return $this->nombre;
    }
    
}



?>
