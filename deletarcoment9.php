<?php
    $identificar = $_POST["deletar9"];
    include "conecta.php";
    
    
    $deletando9 = "DELETE FROM postagem9 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando9) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>