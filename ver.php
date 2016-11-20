<?php
include "conecta.php";

$sql ="SELECT  * from cadastro";

$resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a SQL: ".mysqli_error());
if ($resultado){
    while($row = mysqli_fetch_array($resultado)){
    echo "ID: ".$row['id']." - Nome ".$row['nome']."email: " .$row['email']."username: " .$row['username'];
    }
    }
mysqli_close($conexao)

?>