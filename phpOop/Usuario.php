<?php

class Usuario{

    private $name;
    private $email;
    private $tipo;
    //
    private $clave;
    protected $fechaRegistro;
    static $estado = "Activo";


    function __construct(string $p_name, string $p_email, string $p_tipo){
        $this->name  = $p_name;
        $this->email = $p_email;
        $this->tipo  = $p_tipo;
   

    }

    public function getNombre():string
    {
        return $this->name;
    }


    public function getEmail(){
        return $this->email;
    }

    public function getDatos(){
        echo 'estado: '.self::$estado;

    }


} //class

?>