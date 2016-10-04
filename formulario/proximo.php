<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <meta name='author' content='Gustavo Brito'>
        <title>Formulario2</title> 
    </head>
    

	
	<body>
        <h1>Cadastre-se</h1>
        <form method="POST" action="recebe_dados.php">
            <input type="hidden" name="confemail" value="<?php echo $confemail; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
            <input type="hidden" name="cpf" value="<?php echo $cpf; ?>"> 
            <input type="hidden" name="username" value="<?php echo $username; ?>"> 
            <input type="hidden" name="sexo" value="<?php echo $sexo; ?>">
            <input type="hidden" name="datanasci" value="<?php echo $datanasci; ?>">
            <input type="hidden" name="estado" value="<?php echo $estado; ?>">
            <input type="hidden" name="cidade" value="<?php echo $cidade; ?>">
            
            
         
         
            <label for="username">Username:</label>
                <input type="text" name="username"  id="username"><br>
                <br>
             <label for="senha">Senha:</label>
                
                <input type="password" name="senha"  id="senha"><br>
                <br>   
             <label for="confisenha">Confirmar Senha:</label>
                <input type="password" name="confisenha" id="confisenha"><br>
                  
                
                
                <input type="submit" value="Enviar">
              
				
        </form>   
		
		
			
    </body>
</html>        
        