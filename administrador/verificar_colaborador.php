<?php
  require_once "../administrador/conexao.php";
  
  $con = mysqli_connect("localhost", "root", "", "site") or die("Erro: ". mysqli_connect_error());
    mysqli_query($con, "SET NAMES 'utf8'");
    mysqli_query($con, "SET character_set_connection=utf8");
    mysqli_query($con, "SET character_set_client=utf8");
    mysqli_query($con, "SET character_set_results=utf8");

    $sql = "SELECT * FROM colaborador";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($colaborador, $nome, $interesse, $empresa, $contato);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Verificar Colaboradores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Verificar Colaboradores</h1><br>

      <div class="table-responsive">
      <table class="table table-striped">
      <thead class="thead-light">
        <tr>
          <th>Nome</th>
          <th>Interesse</th>
          <th>Empresa</th>
          <th>Contato</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($stmt->fetch()) {
            echo "<tr>\n";
            echo "<td>".$nome."</td>\n";
            echo "<td>".$interesse."</td>\n";
            echo "<td>".$empresa."</td>\n";
            echo "<td>".$contato."</td>\n";
            echo "</tr>\n";
          }
        ?>  
      </tbody>
    </table>
    </div>
    </div>
    <br><br><br>
  </body>
</html>

<?php
  require_once "../administrador/fecharconexao.php";
?>