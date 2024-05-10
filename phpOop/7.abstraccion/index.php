<?php
require_once("Employee.php");

$emp = new Employee(1144,"juancho",31);  //,"php developer globant"


//echo Empleado::$strEstado;

echo $emp->showInfo();




?>