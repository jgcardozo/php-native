<?php
require_once("Producto.php");

class Mueble extends Producto{

    public $strColor;
    public $strMaterial;
    public $strStatus = "Agotado";

    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material){
        parent::__construct($descripcion, $precio);
        //
        $this->strColor = $color;
        $this->strMaterial = $material;
    }// const


    public function getInfoProducto(){
        $arrProducto = array(
                        'producto' => $this->strDescripcion,
                        'precio' => $this->fltPrecio,
                        'minimo' => $this->intStockMinimo,
                        'estado' => $this->strStatus,
                        'color'  => $this->strColor,
                        'material' => $this->strMaterial,
        );
        return $arrProducto;
    }



}//class

?>