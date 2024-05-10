<?php

require_once("Mueble.php");

class Mesa extends Mueble{

    private $strForma = "";
    protected $strTamanio;
    
    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio){
        parent::__construct($descripcion, $precio, $marca, $color, $material);
        //
        $this->strTamanio = $tamanio;

    }// const

    public function setForma(string $forma){
        $this->strForma = $forma;
    }


    public function getInfoProducto(){
        $arrProducto = array(
                        'producto' => $this->strDescripcion,
                        'precio'   => $this->fltPrecio,
                        'minimo'   => $this->intStockMinimo,
                        'estado'   => $this->strStatus,
                        'color'    => $this->strColor,
                        'material' => $this->strMaterial,
                        'tamanio'  => $this->strTamanio,
                        'forma'    => $this->strForma,
        );
        return $arrProducto;
    }


}//class

?>