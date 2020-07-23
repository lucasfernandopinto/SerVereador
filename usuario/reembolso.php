<?php
  require_once "../conexao/conexao.php";
 
  if(isset($_POST)) {
    if(isset($_POST["btnSubmit"])) {
      $reembolso = $_POST["reembolso"];
      $nome = $_POST["nome"];
      $contato = $_POST["contato"];
      $motivo = $_POST["motivo"];

      $sql = "INSERT INTO reembolso (nome, contato, motivo) VALUES ('$nome', '$contato',  '$motivo')";

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

    <link href="../img/logo.jpg" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ser Vereador</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body>
    <header id="header">
      <div class="container d-flex">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a>Ser Vereador</a>
          </h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="nav-item">
              <a href="aulas.php">Aulas</a>
            </li>
            <li class="nav-item">
              <a href="certificado.php">Peça seu Certificado</a>
            </li>
            <li class="nav-item active">
              <a href="reembolso.php">Peça seu Reembolso</a>
            </li>
            <li class="nav-item">
              <a href="index.php">Sair</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="container" id="bordaLogin">
      <div class="row">
        <div class="col-sm-12 text-center my-3">
          <section id="contact" class="contact">
            <div class="container">
              <div class="col-sm-12">
                <div class="row justify-content-center mt-5">
                  <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input type="hidden" name="reembolso" value="<?php echo $_GET['reembolso']; ?>">
                      <div class="container">
                        <h3><strong><center>Peça o Reembolso do Valor Investido em até <b>7</b> dias</center></strong></h3>
                        <p><center>Preencha os campos abaixo para pedir seu reembolso:</center></p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="nome"><b>Nome:</b></label>
                              <input type="text" class="form-control" id="nome" maxlength="80" name="nome" placeholder="Seu nome" required>
                              <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="contato"><b>Contato:</b></label>
                              <input type="text" class="form-control" id="contato" maxlength="80" placeholder="Seu contato" name="contato" required>
                              <div class="invalid-feedback">
                                Este campo é de preenchimento obrigatório.
                              </div>
                            </div>
                          </div>
                        </div>
                          
                         <div class="form-group">
                          <label for="mensagem"><b>Motivo:</b></label>
                          <textarea type="text" class="form-control" id="motivo" maxlength="500" name="motivo" placeholder="Informe o Motivo da Solicitação" required></textarea>
                          <div class="invalid-feedback">
                            Este campo é de preenchimento obrigatório.
                          </div>                    
                        </div>

                        <div class="text-center">
                          <button name="btnSubmit" id="btnSubmit" type="submit" class="btn-contact scrollto"  onclick="msg()">&nbsp;&nbsp;Pedir Reembolso</button>
                        </div>
                      </div>
                      <br><br>
                    </form>
                          
                    <!-- Page Content --> 
                    <?php
                      if (isset($_POST["acao"])){
                        echo "<script> alert('Formulário Foi enviado pelo método POST') </script>";
                      }
                    ?>
                    <script>  
                      (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                          var forms = document.getElementsByClassName('needs-validation');
                          var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                              if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                              }
                              form.classList.add('was-validated');
                            }, false);
                          });
                        }, false);
                      })();
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
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


    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>
</html>

<?php
  require_once "../conexao/fecharconexao.php";
?>