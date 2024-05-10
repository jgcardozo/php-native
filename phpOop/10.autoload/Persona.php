<?php

class Persona{
    public $intDpi;
    public $strNombre;
    public $intEdad;


    function __construct(int $dpi, string $nombre, int $edad){
        $this->intDpi = $dpi;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
    }// cons



    public function getDatosPersonales(){

        $datos = "<h2>DATOS PERSONALES<h2>
                    DPI: {$this->intDpi}<BR>
                    NOMBRE: {$this->strNombre}<BR>
                    EDAD: {$this->intEdad}";

        return $datos;           

    }



}//class

?>