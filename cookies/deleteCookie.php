<?php

$galleta = 'user';//$_POST['nombre_galleta'];


setcookie($galleta, "", time() - 3600);


echo "cookie deleted";
