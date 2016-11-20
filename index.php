
<html>
    <head>
      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <meta charset='utf-8'>
        <meta name='author' content='Gustavo Brito'>
        <meta name='author' content='Lucas Barros Bezerra'>
        <title>Index</title> 
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>

    <body style="background-image:url(imagens/50.png)">
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

    
        <?php
            include  "include/banner.php";
            include  "include/menu.php";
        ?>
        
      
        
    <div id="margen">
      <div class="row">
        <div class="col s6 offset-s3">
          <div class="card">
            <div class="card-image">
              <img id="efeito1" src="imagens/segurando.jpg">
              <span class="card-title">QUANTO GANHA ?</span>
            </div>
            <div class="card-content">
              <p>Confira os salários de grandes carreiras de TI no Brasil</p>
            </div>
            <div class="card-action">
              <a href="post1.php"> Leia Mais </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="margen1">
      <div class="row">
          
          <div class="col s3 push-s6">
    <h5 class="header"> Google Pixel </h5>
    <div class="card horizontal">
      <div class="card-image">
        <img src="imagens/google_pixel.jpeg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Em evento hacker, segurança do Google Pixel é ultrapassada em 60 segundos</p>
        </div>
        <div class="card-action">
          <a href="post3.php">Leia mais</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col s3 pull-s0">
    <h5 class="header">União de google e Facebook</h5>
    <div class="card horizontal">
      <div class="card-image">
        <img src="imagens/gf.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Facebook e Google se unem e prometem guerra contra sites de notícias falsas</p>
        </div>
        <div class="card-action">
          <a href="post2.php">Leia mais</a>
        </div>
      </div>
    </div>
    
  </div>
  </div>
  </div>
  
   
      <div class="row">
  
  </div>
  
        
         <div class="container">
          <div class="row">
          <div class ="col s4 offset-s5">
          <ul class="pagination" >
    
            <li class="grey darken-2"><a href="index.php">1</a></li>
            <li class="waves-effect"><a href="pagina2.php">2</a></li>
            <li class="waves-effect"><a href="pagina3.php">3</a></li>
          </ul>
        </div>
        </div>
        </div>
        
        <?php
            include "include/footer.php";
        ?>

</body>

</html>
