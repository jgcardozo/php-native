<?php



setcookie( $_POST['nombre_galleta'],  $_POST['valor_galleta'] , time() + 60 * 60 * 24  );

echo "cookie set";

//$base_url = 'http://' . dirname($_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
//header("Location: {$base_url}/index.php", true, 303);



