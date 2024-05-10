<?php

abstract class Person
{

    public $intId, $strNombre, $intEdad, $strMensaje;

    function __construct(int $id, string $nombre, int $edad)
    {
        $this->intId     = $id;        
        $this->strNombre = $nombre;
        $this->intEdad   = $edad;
    }//construct


    abstract public function showInfo();
    abstract public function setMensaje(string $strMensaje);
    abstract public function getMensaje():string;


}// class


?>