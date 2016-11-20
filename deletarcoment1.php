<?php
    $identificar = $_POST["deletar1"];
    include "conecta.php";
    
    
    $deletando1 = "DELETE FROM postagem1 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando1) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>