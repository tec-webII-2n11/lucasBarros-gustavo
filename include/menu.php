    
   <div class="row">
   
   <nav>
    <div class="nav-wrapper blue-grey darken-2">
      
      <ul >
        <li><a href="index.php">Inicio</a></li>
        <li><a href="index.php">Tecnologia</a></li>
        <li><a href="pagina2.php">Games</a></li>
        <li><a href="pagina3.php">Ciência</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="iform.php">Cadastro</a></li>
        
        <li style="padding-right: 10px"> <?php 
                if(isset($_COOKIE['username']) and isset($_COOKIE['senha'])){
                    echo "Bem Vindo, ".$_COOKIE['username']; 
                } 
                else
                {
                    echo "Você não está logado";
                    
                }
                ?> 
        </li>
        
        <li>
            <button class="btn waves-effect waves-light" style='padding-top:8px'>
            <form method='POST' action='verificaLogin.php'>
                <input type="submit" name="sair" value='Sair'/>
            </form>
            </button>
        </li>
        
      </ul>
      </div>
        
  </nav>
  </div>

 
