<?php
    $identificar = $_POST["delusuario"];
    include "conecta.php";
    
    
    $dele = "DELETE FROM cadastro WHERE id='".$identificar."'";
    $resultado = mysqli_query($conexao,$dele) or die("Não foi possível executar a SQL" .mysqli_error());
    
    header("Location: adminusers.php");

    mysqli_close($conexao);


?>