<?php
session_start();
//Conecta com db
include_once('conexao.php');

//Recupera usuário e senha do login por POST
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Verifica se campos vazios
if (!$usuario || !$senha){
    header("Location:logout.php");
}

//SQL
$sql = "Select * from tb_prepedido_usuarios where usuario = '$usuario' and senha='$senha' ";

$resultado = mysqli_query($conn, $sql) or die("bad connection");
$total = mysqli_num_rows($resultado);
    if($total === 1){

        $_SESSION['usuario']=$usuario;

        $row = mysqli_fetch_assoc($resultado);
        $perfil = $row['perfil'];
        $_SESSION['perfil'] = $perfil;
        
        header("Location:index.php");
    }else{
            $_SESSION['msg']="usuário ou senha inválido!";
            header("Location:login.php");
        }



?>