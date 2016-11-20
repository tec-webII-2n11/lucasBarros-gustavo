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
          <h5 style="text-align: center">Lista de usuarios cadastrados</h5>
           
        <div>
          <?php
             //comentarios 1
              
              include "conecta.php";
              
              $painel = "SELECT * from cadastro";
              $resultado = mysqli_query($conexao,$painel) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo "ID: "." ".$row["id"]. " - "." " . " Nome: ".$row["nome"]." Email: ".$row["email"]." Username: ".$row["username"]."<br>";
              }
              }
            ?>
          
           <br><br>
          
           <form class="col s12" method="POST" action="deletarusuario.php">
            <div class="row">
            <div class="input-field col s12">
              
              <label for="delusuario">Digite o id do usuario a ser apagado:</label>
              <input type="text" name="delusuario" id="delusuario">
              
            </div>
          </div>
      
          <button class="btn waves-effect waves-light" type="submit" name="apagar">Deletar</button>
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
