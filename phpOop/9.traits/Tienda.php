<?php

require_once("Producto.php");
require_once("Carrito.php");

class Tienda{

    use Producto, Carrito; 
    public $fltTotal;

    public function getCarrito()
    {
      

        $this->fltTotal = $this->intCantidad * $this->fltPrecio;
        $data = "<h1>CARRITO VA:</h1><BR>
                    <hr>
                 PRODUCTO: {$this->strProducto}<br>
                 CANTIDAD: {$this->intCantidad}<br>
                 PRECIO: {$this->fltPrecio}<br>
                 TOTAL: {$this->fltTotal}<br><br>";

        return $data;
    }








} //class

?>