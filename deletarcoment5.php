<?php
    $identificar = $_POST["deletar5"];
    include "conecta.php";
    
    
    $deletando5 = "DELETE FROM postagem5 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando5) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>