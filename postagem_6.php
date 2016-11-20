<?php
if(isset($_COOKIE['username']) and isset($_COOKIE['senha'])){
include "conecta.php";

$comentario =$_POST["comentario6"];

include "conecta.php";


$teste = "INSERT INTO postagem6(comentario) VALUES ('".$comentario."')";
$resultado = mysqli_query($conexao,$teste) or die("Não foi possível executar a SQL");



header ('Location:post6.php');



mysqli_close($conexao);}

else{
    echo ("você não está logado volte a a pagina anterior e faça login");
    
}

?>










