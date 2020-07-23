<?php
  require_once '../classes/administrador.php';
  $u = new administrador;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="../img/logo.jpg" rel="icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ser Vereador</title>
    <link rel="stylesheet" type="text/css" href="estilo_adm.css">
  </head>

  <body>
    
    <header id="header">
      <div class="container d-flex">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a href="login_adm.php">Ser Vereador</a>
          </h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="nav-item  active">
              <a href="login_adm.php ">Login</a>
            </li>
            <li class="nav-item">
              <a href="cadastro_adm.php">Cadastre-se</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="container" id="loginAdm">
      <div class="row">
        <div class="col-sm-12 text-center my-3">
          <h1>Login</h1>
        </div>

        <div class="row justify-content-center mb-5">
          <div class="col-sm-2">
            <svg class="bi bi-person-square" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-sm-4">
          <form method="POST">
            <div class="form-row">
              <div class="form-group col-sm-12">
                <label for="inputEmail">E-mail</label>
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="exemplo@gmail.com" required>
              </div>

              <div class="form-group col-sm-12">
                <label for="inputPassword">Senha</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha..." required>
              </div>

              <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a href="cadastro_adm.php" class="btn btn-primary">Cadastre-se </a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <?php
        if(isset($_POST['email']))
        {
          $email = addslashes($_POST['email']);
          $senha = addslashes($_POST['senha']);
        
          if(!empty($email) && !empty($senha))
          {
            $u->conectar("vereador", "localhost", "root", "");
            if($u->msgErro == "")
            {
              if ($u->logar($email, $senha)) 
              {
                header("location: index_adm.php");
              }
              else
              {
                ?>
                  <div id="msg-erro">
                    Email e/ou senha estão incorretos!
                  </div>
                <?php
              }
            }
            else
            {
              ?>
                <?php echo "Erro: ".$u->msgErro; ?>
              <?php
            }
          } 
          else
          {
            ?>
              <div id="msg-erro">
                Preencha todos os campos!
              </div>
            <?php
          }
        }
      ?>
    </div>

    <footer class="footer mt-auto py-4" id="rodape">
      <div class="col-sm-12">
        <span class="text-muted">&copy 2020</span>
      </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>