<?php
 include "conecta.php";
 
 $nome= strip_tags($_POST["nome"]);
 $email= strip_tags($_POST["email"]);
 $senha= sha1(strip_tags($_POST["senha"]));
 $confesenha = sha1(strip_tags($_POST["confesenha"]));
 $confemail = strip_tags($_POST["confemail"]);
 $username= strip_tags($_POST["username"]);
 





	
//validação
$erro = 0;
//verificar se o email já ta cadastrado 
		$verificando = "SELECT * FROM cadastro WHERE email = '$email'";
		$selecionar = mysqli_query($conexao,$verificando);
		$array = mysqli_fetch_array($selecionar);
		$teste1 = $array['email'];
		if($teste1 == $email){
    		echo  "Esse email já existe volte para a pagina anterior.<br>";
    		$erro=1;
		}
			
// verificar se o username já ta cadastrado			
		$conferindo = "SELECT * FROM cadastro WHERE username = '$username'";
		$selecionando = mysqli_query($conexao,$conferindo);
		$array = mysqli_fetch_array($selecionando);
		$teste2 = $array['username'];

		if($teste2 == $username){
    		echo  "Esse username já existe volte para a pagina anterior.<br>";
    		$erro=1;
			}
//verificar se senha já está cadastrada		
		$confer = "SELECT * FROM cadastro WHERE senha = '$senha'";
		$selec = mysqli_query($conexao,$confer);
		$array = mysqli_fetch_array($selec);
		$teste3 = $array['senha'];

		if($teste3 == $senha){
    		echo  "Essa senha já existe volte para a pagina anterior.<br>";
    		$erro=1;
			}
		
		
	if(empty($nome)){
    	echo "Voce deve preencher o nome corretamente, volte a pagina anterior.<br>";
		$erro = 1;
	} 
				

	if(empty($email)){
		echo "Voce deve preencher o email corretamente, volte a pagina anterior.<br>";
		$erro = 1;
				} 
	if($email != $confemail){
		echo "Voce deve preencher o mesmo email, volte a pagina anterior.<br>";
		$erro = 1;
	} 
	
	
	
	if(empty($username)){
		echo "Voce deve preencher o username corretamente, volte a apgina anterior.<br>";
		$erro = 1;
	}
	
	if(empty($senha)){
		echo "Voce deve preencher o a senha corretamente, volte a apgina anterior.<br>";
		$erro = 1;
		
	}
	
	if($confesenha != $senha){
		echo "Voce deve preencher a mesma senha, volte a pagina anterior.<br>";
		$erro = 1;
		
	}
				
	if ($erro==0) {
		include "inserir.php";
	}
?>


