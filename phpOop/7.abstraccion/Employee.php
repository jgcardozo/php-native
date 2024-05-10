<?php

require_once("Person.php");

class Employee extends Person
{
    public $strCargo;
    //static $strEstado;

    function __construct(int $id, string $nombre, int $edad) //, string $cargo
    {
        parent::__construct($id, $nombre, $edad);
        //$this->strCargo = $cargo;

    }//construct



    public function showInfo()
    {
        $datos = "ID: {$this->intId}
                NOMBRE: {$this->strNombre}
                EDAD: {$this->intEdad}";
        return $datos;

    }

    public function setMensaje(string $mensaje){
        $this->strMensaje = $mensaje;
    }
    
    public function getMensaje():string{
        return $this->strMensaje ." ". $this->strNombre ;
    }




}//class
?>