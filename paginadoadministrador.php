
<html>
    <head>
      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <meta charset='utf-8'>
        <meta name='author' content='Gustavo Brito'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title>Painel de controle</title> 
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>

    <body style="background-image:url(imagens/50.png)">
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

    
        <?php
            include  "include/banner.php";
            include  "include/menu.php";
        ?>
        
      
    
    <div class="margen1">
      <div class="row">
          
          <div class="col s3 push-s6">
    <h5 class="header"> Usuários </h5>
    <div class="card horizontal">
      <div class="card-image">
        <img src="imagens/usuarios.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p></p>
        </div>
        <div class="card-action">
          <a target="_blank" href="adminusers.php">Abrir lista de usuários</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col s3 pull-s0">
    <h5 class="header">Comentários</h5>
    <div class="card horizontal">
      <div class="card-image">
        <img src="imagens/comentarios.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p></p>
        </div>
        <div class="card-action">
          <a target="_blank" href="admincoments.php">Abrir os comentários</a>
        </div>
      </div>
    </div>
    
  </div>
  </div>
  </div>
  
   
      <div class="row">
  
  </div>
  
        <?php
            include "include/footer.php";
        ?>

</body>

</html>
