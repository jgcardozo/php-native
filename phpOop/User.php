<?php

    require_once("Usuario.php");

    $objUser = new Usuario("Andres Cardona", "andres.cardona@empresa.com", "Admin");

    //echo Usuario::$estado;

    echo "nombre:". $objUser->getNombre() . "<br>";
    echo "email:". $objUser->getEmail() . "<br>";

    echo  $objUser->getDatos();

 

?>