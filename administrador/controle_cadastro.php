<?php
  require_once "../conexao/conexao.php";

  $msg_sucesso = "";
  $msg_erro = "";

  if(isset($_GET["modo"])) {
    if($_GET["modo"] == "excluir") {
      $usuario = $_GET["id"];
      $sql = "DELETE FROM usuarios WHERE id = $usuario;";
      if(mysqli_query($con, $sql)) {
        $msg_sucesso = "Dados do usuário excluídos com sucesso.";
      } else {
        $msg_erro = "Ocorreu um erro ao excluir os dados do usuário.";
      }
    }
  }

  $sql = "SELECT id, nome, telefone, email FROM usuarios ORDER BY nome";
  $stmt = $con->prepare($sql);
  $stmt->execute();
  $stmt->bind_result($usuario, $nome, $telefone, $email);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Controle de Cadastros</title>
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
            <li class="nav-item">
              <a href="verificar_certificado.php">Certificado</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="container">
      <h1>Controle de Cadastros</h1><br>

      <?php if(!empty($msg_sucesso)) { ?>
        <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $msg_sucesso; ?>
        </div>
      <?php } ?>
      <?php if(!empty($msg_erro)) { ?>
        <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $msg_erro; ?>
        </div>
      <?php } ?>

      <div class="table-responsive">
      <table class="table table-striped">
      <thead class="thead-light">
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
        <?php
          while($stmt->fetch()) {
            echo "<tr>\n";
            echo "<td>".$usuario."</td>\n";
            echo "<td>".$nome."</td>\n";
            echo "<td>".$telefone."</td>\n";
            echo "<td>".$email."</td>\n";
            echo "<td><a class='btn btn-secondary' role='button' href='../usuario/cadastro.php?modo=excluir&id=".$usuario."'><i class='fas fa-trash'></i></a>&nbsp;&nbsp;<a class='btn btn-secondary' role='button' href='alterar_cadastro.php?categoria=".$usuario."'><i class='fas fa-edit'></i></a></td>\n";
            echo "</tr>\n";
          }
        ?>  
      </tbody>

    </table>
    </div>
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