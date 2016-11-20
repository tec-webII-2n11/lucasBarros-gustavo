<?php
    $identificar = $_POST["deletar6"];
    include "conecta.php";
    
    
    $deletando6 = "DELETE FROM postagem6 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando6) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>