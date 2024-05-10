<?php
require_once("Persona.php");

class Empleado extends Persona{


    protected $strPuesto;

    function __construct(int $dpi, string $nombre, int $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setPuesto(string $puesto){
        $this->strPuesto = $puesto;
    }

    public function getPuesto():string{
        return $this->strPuesto;
    }


}// class


?>