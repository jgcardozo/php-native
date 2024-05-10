<?php

trait carrito{

    public $strProducto;
    public $intCantidad;

    public function setCarrito($producto, $cantidad)
    {
        $this->strProducto = $producto;
        $this->intCantidad = $cantidad;
    }


    abstract function getCarrito(); 


} //trait

?>