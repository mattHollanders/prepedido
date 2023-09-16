<?php
session_start();
include_once('verificaperfil.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrePedido</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php 
    if($_SESSION['perfil'] !== '3') {
        include('nav.php');
        }
     ?>
</body>
</html>