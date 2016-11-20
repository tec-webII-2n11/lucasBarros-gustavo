<html>
    <head>
      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <meta charset='utf-8'>
        <meta name='author' content='Gustavo Brito'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title>Painel de controle comentarios</title> 
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
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 1 - "Quanto ganha"</h5>
           
        <div>
          <?php
             //comentarios 1
              
              include "conecta.php";
              
              $teste1 = "SELECT * from postagem1";
              $resultado = mysqli_query($conexao,$teste1) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment1.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar1">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar1" id="deletar1">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague1">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>
   
   
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 2 - "União de google e Facebook"</h5>
           
        <div>
          <?php
             //comentarios 2
              
              include "conecta.php";
              
              $teste2 = "SELECT * from postagem2";
              $resultado = mysqli_query($conexao,$teste2) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment2.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar2">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar2" id="deletar2">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague2">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>
  
  
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 3 - "Google Pixel"</h5>
           
        <div>
          <?php
             //comentarios 2
              
              include "conecta.php";
              
              $teste3 = "SELECT * from postagem3";
              $resultado = mysqli_query($conexao,$teste3) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment3.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar3">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar3" id="deletar3">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague3">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>  
  
  
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 4 - "Novo PlaySation 4 Pro"</h5>
           
        <div>
          <?php
             //comentarios 2
              
              include "conecta.php";
              
              $teste4 = "SELECT * from postagem4";
              $resultado = mysqli_query($conexao,$teste4) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment4.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar4">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar4" id="deletar4">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague4">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>
   
   
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 5 - "Blasting News"</h5>
           
        <div>
          <?php
             //comentarios 2
              
              include "conecta.php";
              
              $teste5 = "SELECT * from postagem5";
              $resultado = mysqli_query($conexao,$teste5) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment5.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar5">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar5" id="deletar5">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague5">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>
   
   
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 6 - "SOBRE GAMES"</h5>
           
        <div>
          <?php
             //comentarios 2
              
              include "conecta.php";
              
              $teste6 = "SELECT * from postagem6";
              $resultado = mysqli_query($conexao,$teste6) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment6.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar2">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar6" id="deletar6">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague6">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>
    
   
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 7 - "Antonov AN-225 Mriya"</h5>
           
        <div>
          <?php
             //comentarios 7
              
              include "conecta.php";
              
              $teste7 = "SELECT * from postagem7";
              $resultado = mysqli_query($conexao,$teste7) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment7.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar7">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar7" id="deletar7">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague7">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div> 
    
  
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 8 - "Vida fora da terra"</h5>
           
        <div>
          <?php
             //comentarios 2
              
              include "conecta.php";
              
              $teste8 = "SELECT * from postagem8";
              $resultado = mysqli_query($conexao,$teste8) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment8.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar2">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar8" id="deletar8">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague8">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>
  
  
   <div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text">
            <div class="row">
          <h5 style="text-align: center">Comentarios postagem 9 - "USB capaz de fazer testes de HIV"</h5>
           
        <div>
          <?php
             //comentarios 2
              
              include "conecta.php";
              
              $teste9 = "SELECT * from postagem9";
              $resultado = mysqli_query($conexao,$teste9) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Comentario: ".$row["comentario"]."<br/>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarcoment9.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="deletar9">Digite o id do comentario a ser apagado:</label>
              <input type="text" name="deletar9" id="deletar9">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apague9">Deletar</button>
          </form>
          </div>
        </div>
          
          </span>
        </div>
      </div>
    </div>
  
        <?php
            include "include/footer.php";
        ?>

</body>

</html>
