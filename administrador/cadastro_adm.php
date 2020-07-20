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

    <link href="../img/TMTV.jpg" rel="icon">

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
            <li class="nav-item">
              <a href="login_adm.php ">Login</a>
            </li>
            <li class="nav-item active">
              <a href="cadastro_adm.php">Cadastre-se</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>


    <div class="container" id="bordaCadastro">
      <div class="row">
        <div class="col-sm-12 text-center my-3">
          <h1>Cadastro</h1>
        </div>

        <div class="row justify-content-center mb-3">
          <div class="col-sm-2">
            <svg class="bi bi-person-plus-fill" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="bordaIconCadastro">
              <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7.5-3a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-sm-8">
          <form method="POST">
            <div class="form-row">
              <div class="form-group col-sm-12">
                <label for="inputNome">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputNome" maxlength="30" placeholder="Nome..." required>
              </div>

              <div class="form-group col-sm-12">
                <label for="inputEmail">E-mail</label>
                <input type="email" name="email" class="form-control" id="inputEmail" maxlength="40" placeholder="exemplo@gmail.com" required>
              </div>

              <div class="form-group col-sm-12">
                <label for="inputPassword">Senha</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" maxlength="15" placeholder="Senha..." required>
              </div>

              <div class="form-group col-sm-12">
                <label for="inputPassword">Confirmar Senha</label>
                <input type="password" name="confSenha" id="inputPassword" class="form-control" maxlength="15" placeholder="Confirmar Senha..." required>
              </div>

              <div class="form-group col-sm-12">
                <a href="login_adm.php" class="btn btn-primary">Cancelar </a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="login_adm.php" class="btn btn-primary">Entrar </a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <?php
        if(isset($_POST['nome']))
        {
         $nome = addslashes($_POST['nome']);
         $email = addslashes($_POST['email']);
         $senha = addslashes($_POST['senha']);
         $confirmarSenha = addslashes($_POST['confSenha']);

         if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
         {
            $u->conectar("vereador", "localhost", "root", "");
            if($u->msgErro == "")
            {
              if($senha == $confirmarSenha)
              {
                if($u->cadastrar($nome, $email, $senha))
                {
                  ?>
                    <div id="msg-sucesso">
                      Cadastrado com sucesso! Acesse para entrar!
                    </div>
                  <?php
                }
                else
                {
                  ?>
                    <div id="msg-erro">
                      Email já cadastrado;
                    </div>
                  <?php
                }
              }
              else
              {
                ?>
                  <div id="msg-erro">
                    Senha e Confirmação não correspondem!
                  </div>
                <?php
              }
            }
            else
            {
              ?>
                <div id="msg-erro">
                  <?php echo "Erro: ".$u->msgErro ?>
                </div> 
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