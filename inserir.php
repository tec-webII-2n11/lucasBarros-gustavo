<?php

include "conecta.php";

$nome =$_POST["nome"];
$email = $_POST["email"];
$username = $_POST["username"];
$senha = sha1($_POST["senha"]);

include "conecta.php";


$sql = "INSERT INTO cadastro(nome, email, username, senha) VALUES ('".$nome."', '".$email."', '".$username."', '".$senha."')";
$resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a SQL");

header ('Location:https://projetoblog-gustavobrtos.c9users.io/login.php');

mysqli_close($conexao);

?>

