<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='author' content='Gustavo Brito'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title>Formulario</title> 
    </head>
    <body>
        <h1>Cadastre-se</h1>
        <form method="POST" action="etapa1.php">
            
            
            <label for="nome">Nome Completo:</label>
                <input type="text" name="nome" id="nome"><br>
                <br>
            <label for="cpf">CPF:</label>
                <input type="text" name="cpf"  id="cpf"><br>
                <br>
            <label for="email">Email:</label>
                <input type="email" name="email" id="email"> <br>
                <br>
            <label for="confemail">Confirme Email:</label>
                <input type="email" name="confemail" id="confemail">
            <br>
            <label for="username">Username:</label>
                <input type="username" name="username" id="username"><br>
            <br>
            
			<label for="sexo">Sexo:</label>
                <select name="sexo"><br>
                    <option name="masculino">Masculino</option>   
                    <option name="feminino">Feminino</option>
                </select><br>
            <br>
           
		   <label for="data">Date de nascimento:</label>
                <input type="date" name="data" id="data"><br>
            <br>
            <label for="estado">Estado:</label>   
                
				<select name="estado">
                    <option name="selecione" selected>Selecione seu estado</option>
					<option name="sao paulo">SP</option>
                    <option name="rio">RJ</option>
                    <option name="minas">MG</option>
                    <option name="outros">outros</option>
                </select>
				<br>
                <br>
               <label for ="regulamento"> Li e concordo com o regulamento </label>
               <input type="checkbox" name="regulamento"  id="regulamento"> <br> 
				<br>
                <br>
                 <input type="submit" value="Prosseguir" name="prosseguir">
                 
                
        </form>
        
    </body>
</html>    