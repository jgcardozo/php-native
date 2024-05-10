<?php

require_once("Mesa.php");

$obj = new Producto("Cama", 12500);
$info = $obj->getInfoProducto();
print_r("<pre>");
print_r($info);
print_r("</pre>");

$objM = new Mueble("silla",8250,"rimax","cafe","Plastico");
$infoM = $objM->getInfoProducto();
print_r("<pre>");
print_r($infoM);
print_r("</pre>");


$mesa =  new Mesa("mesa dragon ball",9233,"barthon","azul y rojo","madera","3mts *pi");
$mesa->setForma("rectangular");
$infomesa = $mesa->getInfoProducto();
print_r("<pre>");
print_r($infomesa);
print_r("</pre>");



?>