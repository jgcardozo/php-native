<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php session demo</title>
</head>
<body>
    <h1>Php Session Demo</h1>

    <form action="server.php" method="post" >
        <input type="text" name="user" required/>
        <input type="submit" value="Send">
    </form>
    

    <?php if (isset($_SESSION['user'])) {?>
        <p>Welcome back <?= $_SESSION['user'];?></p>
    <?php }else{ ?> 
         <p>Welcome stranger</p>
    <?php } ?> 
    
    <p>Php session id: <?= session_id();?></p> 
    <a href="destroy.php">Destroy session</a>
</body>
</html>