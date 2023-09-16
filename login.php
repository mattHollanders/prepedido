<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrePedido Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>PrePedido</h1>
    <form method="POST" action="verificalogin.php">
        <label class="label-login" name="label-usuario">Usuário:</label>
        <input class="input-login" type="text" name="usuario" placeholder="Escreva seu usuário" required />

        <label class="label-login" name="label-senha">Senha:</label>
        <input class="input-login" type="password" name="senha" placeholder="Escreva sua senha" required />

        <input class="botao-entrar" type="submit" value="Entrar"/>
        <?php 
        if(isset($_SESSION['msg'])){
            echo "<p>".$_SESSION['msg']."<p>" ; 
        }

        ?>

    </form>
</body>
</html>