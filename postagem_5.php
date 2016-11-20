<?php
if(isset($_COOKIE['username']) and isset($_COOKIE['senha'])){
include "conecta.php";

$comentario =$_POST["comentario5"];

include "conecta.php";


$teste = "INSERT INTO postagem5(comentario) VALUES ('".$comentario."')";
$resultado = mysqli_query($conexao,$teste) or die("Não foi possível executar a SQL");



header ('Location:post5.php');



mysqli_close($conexao);}

else{
    echo ("você não está logado volte a página anterior e faça login");
    
}

?>










