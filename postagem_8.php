<?php
if(isset($_COOKIE['username']) and isset($_COOKIE['senha'])){
include "conecta.php";

$comentario =$_POST["comentario8"];

include "conecta.php";


$teste = "INSERT INTO postagem8(comentario) VALUES ('".$comentario."')";
$resultado = mysqli_query($conexao,$teste) or die("Não foi possível executar a SQL");



header ('Location:post8.php');



mysqli_close($conexao);}


else{
    echo("Você não está logado volte a pagina anterior e faça login");
    
}
?>










