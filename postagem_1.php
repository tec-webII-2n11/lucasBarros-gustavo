<?php
     
 if(isset($_COOKIE['username']) and isset($_COOKIE['senha'])){
   include "conecta.php";

    $comentario =$_POST["comentario1"];

    include "conecta.php";
    
    
    $teste = "INSERT INTO postagem1(comentario) VALUES ('".$comentario."')";
    $resultado = mysqli_query($conexao,$teste) or die("Não foi possível executar a SQL");
    
    
    
    header ('Location:post1.php');
    
    
    
    mysqli_close($conexao);
} 
else
{
    echo("Você precisa logar para postar volte a pagina anterior");
}
?>










