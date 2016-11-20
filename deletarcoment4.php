<?php
    $identificar = $_POST["deletar4"];
    include "conecta.php";
    
    
    $deletando4 = "DELETE FROM postagem4 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando4) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>