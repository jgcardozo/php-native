<?php


trait Producto
{


    public $strDescripcion;
    public $intStock;
    public $fltPrecio;

    public function setProducto(string $descripcion, int $stock, float $precio)
    {
        $this->strDescripcion = $descripcion; 
        $this->intStock = $stock;
        $this->fltPrecio = $precio;
    }
    

    public function getProducto():string
    {

        $data = "DESCRIPCION: {$this->strDescripcion}<br>
                 STOCK: {$this->intStock}<BR>
                 PRECIO: {$this->fltPrecio}<br><br> ";

        return $data;
    }



    public function descontarInv(int $cantidad)
    {
        $this->intStock  = $this->intStock  -  $cantidad;       
    }




}// trait



?>