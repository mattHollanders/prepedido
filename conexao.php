<?php

$servername = "localhost";
$database = "test";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die('Conexão falhou: ' . mysqli_connect_error());
}

#echo "Conexão estabelecida com sucesso!";

#mysqli_close($conn);



?>