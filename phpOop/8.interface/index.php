<?php

require_once("Calcular.php");


$calc =  new Calcular();

echo $calc->raizCuadrada(9);
echo "<br>";

echo $calc->potencia(3,3);
echo "<br>";
echo $calc->operacion(50,2,"==");

?>