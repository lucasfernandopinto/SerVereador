<?php
  require_once "../conexao/conexao.php";
 
  if(isset($_POST)) {
    if(isset($_POST["btnSubmit"])) {
      $comunicacao = $_POST["certificado"];
      $nome = $_POST["nome"];
      $contato = $_POST["contato"];

      $sql = "INSERT INTO certificado (nome, contato) VALUES ('$nome', '$contato')";

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

    <link href="../img/TMTV.jpg" rel="icon">
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
                      <input type="hidden" name="certificado" value="<?php echo $_GET['certificado']; ?>">
                
                      <div class="container">
                        <h3><strong><center>Peça seu certificado</center></strong></h3>
                        <p><center>Preencha os Campos abaixo e em até 24 horas terá seu certificado em mãos:</center></p>
                        
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="nome">Nome:</label>
                              <input type="text" class="form-control" id="nome" maxlength="80" name="nome" placeholder="Nome desejado para o certificado" required>
                              
                              <div class="invalid-feedback">
                                Este campo é de preenchimento obrigatório.
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="contato">Contato para Envio:</label>
                              <input type="text" class="form-control" id="contato" maxlength="80" placeholder="E-mail ou Whats" name="contato" required>
                              
                              <div class="invalid-feedback">
                                Este campo é de preenchimento obrigatório.
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="text-center">
                          <button name="btnSubmit" id="btnSubmit" type="submit" class="btn-contact scrollto"  onclick="msg()">&nbsp;&nbsp;Enviar Informações</button>
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
  </body>
</html>

<?php
  require_once "../conexao/fecharconexao.php";
?>