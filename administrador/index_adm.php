<?php
  session_start();
  if(!isset($_SESSION['id']))
  {
    header('location: login_adm.php');
    exit;
  }
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
              <a href="verificar_reembolso.php">Reembolso</a>
            </li>
            <li class="nav-item">
              <a href="controle_cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
              <a href="verificar_certificado.php">Certificado</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

  <section class="indexAdm">  
    <div class="container">  
      <div clas="col-sm-12">
        <div class="row my-3"> 
          <div class="col-sm-3">  
            <a href="verificar_contato.php" class="btn btn-primary"><p>VERIFICAR CONTATOS</p></a>
          </div>
          <div class="col-sm-3">  
            <a href="verificar_reembolso.php" class="btn btn-primary"><p>VERIFICAR REEMBOLSO</p></a>
          </div>
          <div class="col-sm-3">  
            <a href="controle_cadastro.php" class="btn btn-primary"><p>CONTROLE CADASTRO</p></a>
          </div>
          <div class="col-sm-3">  
            <a href="verificar_certificado.php" class="btn btn-primary"><p>CONTROLE CERTIFICADO</p></a>
          </div>
        </div>
      </div>
    </div>
  </section>

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