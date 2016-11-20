<?php

if(isset($_COOKIE['username']) and isset($_COOKIE['senha'])){

include "conecta.php";

include "conecta.php";

$comentario =$_POST["comentario2"];

include "conecta.php";


$teste = "INSERT INTO postagem2(comentario) VALUES ('".$comentario."')";
$resultado = mysqli_query($conexao,$teste) or die("Não foi possível executar a SQL");



header ('Location:post2.php');


mysqli_close($conexao);
}
else{
     echo("Você precisa logar para postar volte a pagina anterior");
    
}
?>










