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

    
//validação
$erro = 0;

	if(empty($nome)){
    	echo "Voce deve preencher o nome corretamente.<br>";
		$erro = 1;
	} 
				
	if(empty($cpf)){
		echo "Voce deve preencher o cpf corretamente.<br>";
		$erro = 1;
	} 
				
	if(empty($email)){
		echo "Voce deve preencher o email corretamente.<br>";
		$erro = 1;
				} 
	if($email != $confemail){
		echo "Voce deve preencher o mesmo email.<br>";
		$erro = 1;
	} 
	if(empty($username)){
		echo "Voce deve preencher o username corretamente.<br>";
		$erro = 1;
	}
	
				
				
	if ($erro==0) {
		include 'proximo.php';
	}
?>