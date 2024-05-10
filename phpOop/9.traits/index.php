<?php

require_once("Tienda.php");

$compra = new Tienda();


$compra->setProducto("Medias negras", 10 , 3.5); 
echo $compra->getProducto(); 

$compra->setCarrito("Medias negras", 2);
echo $compra->getCarrito();

$compra->descontarInv(2);
echo $compra->getProducto(); 

?>