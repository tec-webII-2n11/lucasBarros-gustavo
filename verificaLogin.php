<?php
    if(isset($_POST['sair'])){
    	setcookie('username',"",-30000000);
    	setcookie('senha','',-9875974239529345);
    	header('Location: index.php');
    }else{
		$usuario = strip_tags($_POST['username']);
		$senha = sha1(strip_tags($_POST['senha']));
		//echo $senha."<br>";
	   // $senha = sha1(strip_tags($_POST['password']));
		//echo $senha."<br>";
	    // conctando ao BD
	    include "conecta.php";
		$query="SELECT * from cadastro WHERE  username=? AND senha=?";
		if($stmt = mysqli_prepare($conexao, $query)) {
			mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $id, $nome, $email,$username, $senha);
			mysqli_stmt_fetch($stmt);
		  
			if ($usuario == $username && $senha == sha1(strip_tags($_POST['senha']))) {
					
					
					if($usuario=='administrador' && $senha==sha1('admin123')){
			        setcookie('username',$username);
			        setcookie('senha',$senha);
			        header("Location:paginadoadministrador.php");}
				
					if($usuario!='administrador' && $senha!=sha1('admin123')){
					setcookie('username',$username );
					setcookie('senha', $senha );
					header("Location: index.php");}
			}	  
			else {
				echo "Usuario ou senha incorretos";
			}
			mysqli_stmt_close($stmt);
		} else {
			echo "Falha no statment";
		}
		mysqli_close($conexao);	
    }
?>