<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>
    <h1>PHP Cookies</h1>
    <form action="server.php" method="POST">
        Cookie name<input type="text" name="nombre_galleta" required>
        Cookie value<input type="text" name="valor_galleta">
        <input type="submit" value="set Cookie">
        <a href="deleteCookie.php">Delete Cookie</a>
    </form>

    <?php  print_r("<pre>");
           print_r($_COOKIE); 
           print_r("</pre>");
    ?>
    
</body>
</html>