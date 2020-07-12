<?php
  require_once "../conexao/conexao.php";

  if(isset($_GET["id"])) {
    $usuario = $_GET["id"];
    $sql = "SELECT nome, telefone, email FROM usuarios WHERE id = $usuario";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($nome);
    $stmt->bind_result($telefone);
    $stmt->bind_result($email);
    $stmt->fetch();
  }

  if(isset($_POST["btnSubmit"])) {
    //print_r($_POST);
    $categoria = $_POST["id"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $sql = "UPDATE usuarios SET nome = '$nome',  telefone = '$telefone',  email = '$email' WHERE id = $usuario";
    if(mysqli_query($con, $sql)) {
      header('Location: ../usuario/cadastro.php');
    } else {
      echo "Erro ao registrar dados: ".mysqli_error($con);
    }
  }
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Alteração do Cadastro</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="estilo_adm.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header id="header">
      <div class="container d-flex">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a href="index_adm.php">Ser Vereador</a>
          </h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="nav-item">
              <a href="index_adm.php ">Início</a>
            </li>
            <li class="nav-item">
              <a href="verificar_contato.php">Contato</a>
            </li>
            <li class="nav-item active">
              <a href="controle_cadastro.php">Cadastro</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="container">
      <h1>Alterar os Dados do Cadastro</h1><br>
      
      <div class="row justify-content-center mb-5">
        <div class="col-sm-8">
          <form method="POST">
            <div class="form-row">
              <div class="form-group col-sm-12">
                <label for="inputNome">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputNome" maxlength="30" placeholder="Nome..." required>
              </div>

              <div class="form-group col-sm-12">
                <label for="inputEmail">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="inputEmail" maxlength="30" placeholder="Telefone..." required>
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
                <a href="index_adm.php" class="btn btn-primary">Cancelar </a>
                <button type="submit" class="btn btn-primary">Alterar</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <?php
        if(isset($_POST['nome']))
        {
         $nome = addslashes($_POST['nome']);
         $telefone = addslashes($_POST['telefone']);
         $email = addslashes($_POST['email']);
         $senha = addslashes($_POST['senha']);
         $confirmarSenha = addslashes($_POST['confSenha']);

         if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
         {
            $u->conectar("vereador", "localhost", "root", "");
            if($u->msgErro == "")
            {
              if($senha == $confirmarSenha)
              {
                if($u->cadastrar($nome, $telefone, $email, $senha))
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
  </body>
</html>

<?php 
  require_once "../conexao/fecharconexao.php";
?>