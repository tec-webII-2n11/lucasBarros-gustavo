

<html>
    <head>
      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <meta charset='utf-8'>
        <meta name='author' content='Gustavo Brito'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title>Login</title> 
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>

    <body style="background-image:url(imagens/50.png)">
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

    
        <?php
            include  "include/banner.php";
            include  "include/menu.php";
        ?>
        
      
        
    <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text"><div class="row">
    
     
     <div id="margen">
      <div class="row">
          <div class="col s3 offset-s5" class="card-panel">
              <span class="#000000" > <h5>Cadastre-se </h5></span> <br><br>
          </div>
          
          <div class=" col s6 offset-s3">
              <form method="POST" action="etapa1.php">
            
            <div class="input-field col s12">
                <label for="nome">Nome Completo:</label>
                <input type="text" name="nome" id="nome">
            </div>
                <br>
            <div class="input-field col s12">   
                <label for="email">Email:</label>
                <input type="email" name="email" id="email"> 
            </div>
                <br>
            <div class="input-field col s12">
                <label for="confemail">Confirma seu email:</label>
                <input type="email" name="confemail" id="confemail">
            </div>
                <br>
            <div class="input-field col s12">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
                <br>
            <div class="input-field col s12">
                <label for="senha">Digite sua senha:</label>
                <input type="password" name="senha" id="senha">
            </div>
                <br>
            <div class="input-field col s12">
                <label for="confesenha">Confirma sua senha:</label>
                <input type="password" name="confesenha" id="confesenha">
            </div>
            
            
              <input type="checkbox" id="test5" />
              <label for="test5">Li e concordo com o regulamento</label>
            
               
				<br>
                <br>
                
                 <button class="btn waves-effect waves-light" type="submit" name="Prosseguir" value="Prosseguir">Cadastrar</button>
                
                 
                
        </form>
        </div>
        </div>
        </div>
  
     
          </span>
        </div>
      </div>
    </div>
    </div>
        
        <?php
            include "include/footer.php";
        ?>

</body>

</html>

        
		
		
			
  

