<?php
    $identificar = $_POST["deletar7"];
    include "conecta.php";
    
    
    $deletando7 = "DELETE FROM postagem7 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando7) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>