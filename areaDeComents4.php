<div class="row">
      <div class="col s6 offset-s3">
        <div class="card-panel nav-wrapper blue-grey darken-2">
          <span class="white-text"><div class="row">
          <h5>Comentarios</h5>
           
           
          <?php
             
              include "conecta.php";
              
              $teste2 = "SELECT * from postagem4";
              $resultado = mysqli_query($conexao,$teste2) or die("Não foi possível executar a SQL" .mysqli_error($conexao));
             
              if($resultado){
              while ($row = mysqli_fetch_array($resultado)){
              echo " ".$row["comentario"]."<br/>";
              }
              }
              
              mysqli_close($conexao);
              
              
            ?>
     
          </span>
        </div>
      </div>
    </div>
    </div>
    
  