<?php
    session_start();
    $_SESSION['user'] = $_POST['user'];
    
    $base_url = 'http://' . dirname($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
    header("Location: {$base_url}/index.php", true, 303); // "Location: http://www.example.com/"
?>