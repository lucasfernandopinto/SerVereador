<?php
  require_once "../conexao/conexao.php";
 
  if(isset($_POST)) {
    if(isset($_POST["btnSubmit"])) {
      $comunicacao = $_POST["comunicacao"];
      $nome = $_POST["nome"];
      $contato = $_POST["contato"];
      $assunto = $_POST["assunto"];
      $mensagem = $_POST["mensagem"];

      $sql = "INSERT INTO mensagem (nome, contato, assunto, mensagem) VALUES ('$nome', '$contato',  '$assunto', '$mensagem')";

      $res = mysqli_query($con, $sql) or die("Erro: ".  mysqli_error($con));

      $id = mysqli_insert_id($con);
      }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="icofont/icofont.min.css" rel="stylesheet">

    <title>Ser Vereador</title>
    <link rel="stylesheet" type="text/css" href="estilo_adm.css">
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
            <li class="nav-item active">
              <a href="index_adm.php ">Início</a>
            </li>
            <li class="nav-item">
              <a href="verificar_contato.php">Contato</a>
            </li>
            <li class="nav-item">
              <a href="controle_cadastro.php">Cadastro</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <h1>ESTE É O MENU DE ADMINISTRAÇÃO DO SITE!</h1>
    <h1>COLOCAR UM BOTÃO NO CENTRO DA TELA PARA CADA AÇÃO</h1>
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

<?php
  require_once "../conexao/fecharconexao.php";
?>