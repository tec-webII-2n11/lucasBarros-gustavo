<?php
    $identificar = $_POST["deletar3"];
    include "conecta.php";
    
    
    $deletando3 = "DELETE FROM postagem3 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando3) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>