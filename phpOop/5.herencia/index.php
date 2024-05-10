<?php

require_once("Empleado.php");



$emp =  new Empleado(1130,"andres perez",25);
$emp->setPuesto("Administrador");

echo $emp->getDatosPersonales();
echo $emp->getPuesto();

?>