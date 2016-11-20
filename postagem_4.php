<?php

if(isset($_COOKIE['username']) and isset($_COOKIE['senha'])){


include "conecta.php";

$comentario =$_POST["comentario4"];

include "conecta.php";


$teste = "INSERT INTO postagem4(comentario) VALUES ('".$comentario."')";
$resultado = mysqli_query($conexao,$teste) or die("Não foi possível executar a SQL");



header ('Location:post4.php');



mysqli_close($conexao);}

else{
    
    
    echo("você está deslogado volte a página anterior e faça login");
    
    
}

?>










