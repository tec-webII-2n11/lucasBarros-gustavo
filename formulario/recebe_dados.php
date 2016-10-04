<?php
 $nome=$_POST["nome"];
 $cpf=$_POST["cpf"];
 $email=$_POST["email"];
 $confemail=$_POST["confemail"];
 $username=$_POST["username"];
 $sexo=$_POST["sexo"];
 $datanasci =$_POST["datanasci"];
 $estado=$_POST["estado"];
 $cidade=$_POST["cidade"];
 $username=$_POST["username"];
 $senha=$_POST["senha"];
 $confisenha=$_POST["confisenha"];

//validação
 $erro = 0;
 

 
 if(empty($senha)){
		echo "Voce deve preencher a senha.<br>";
		$erro = 1;
	} 
 
 if($senha != $confisenha){
		echo "Voce deve preencher com a mesma senha.<br>";
		$erro = 1;
	} 
 
 
 
 
 
   if($erro == 0){
		 	echo "nome: ".$nome."<br />";
			 echo "cpf: ".$cpf."<br />";
			 echo "email: ".$email."<br />";
			 echo "confemail: ".$confemail."<br />";
			 echo "username: ".$username."<br />";
			 echo "sexo: ".$sexo."<br />";
			 echo "datanasci: ".$datanasci."<br />";
 			echo "estado: ".$estado."<br />";
 			echo "cidade: ".$cidade."<br />";
			 echo "senha: ".$senha."<br />";
			 echo "confisenha: ".$confisenha."<br />";
}
			
 ?>
 
 <!doctype html>
<html>
   <body>
    <h1>Dados Cadastrados</h1>
    
   </body>
</html> 
 