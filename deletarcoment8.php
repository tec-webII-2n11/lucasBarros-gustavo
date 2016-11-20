<?php
    $identificar = $_POST["deletar8"];
    include "conecta.php";
    
    
    $deletando8 = "DELETE FROM postagem8 WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$deletando8) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: admincoments.php");

    mysqli_close($conexao);


?>