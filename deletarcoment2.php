<?php
    $identificar = $_POST["deletar2"];
    include "conecta.php";
    
    
    $deletando2 = "DELETE FROM postagem2 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando2) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>