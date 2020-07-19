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
    
    <link href="../icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <title>Ser Vereador</title>
    
  </head>
  
  <body>
    <header id="header">
      <div class="container d-flex">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a href="index.php">Ser Vereador</a>
          </h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="nav-item active">
              <a href="index.php ">Início</a>
            </li>
            <li class="nav-item">
              <a href="compra.php">Compre Agora</a>
            </li>
            <li class="nav-item">
              <a href="login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a href="cadastro.php">Cadastrar-se</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

  <section id="hero">
    <div class="hero-container">
      <h1>Ser Vereador</h1>
      <h2>Seja bem-vindo ao melhor curso online para você que é um pré-candidato a vereador. Aqui serão ensinadas todas as competências e habilidades para que você obtenha sucesso nesta campanha.</h2>
      <a href="compra.php" class="btn-get-started scrollto"><i class="icofont-whatsapp">Comprar por R$99,00</i></a>
    </div>
  </section>

    <section id="services" class="services">
      <div class="container">
        <div class="col-sm-12">

          <div class="row justify-content-center my-5">
            <p>Vídeo explicativo e introdutório sobre o programa <span>Ser Vereador</span>.</p>
            <video width="720" height="480" controls="controls" poster="../img/video_index_fundo.jpg" id="video">
              <source src="../videos/CHAMADA.mp4" type="video/mp4">
            </video>
          </div>

         <div class="row justify-content-center">
             <div class="col-sm-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <img src="../img/cadeado.png" width="64px" height="64px">
                  <h4>Acesso imediato</h4>
                  <p>Compre o curso agora por R$ 00,00 e você vai possuir acesso liberado imediatamente a todas as aulas do programa "Ser Vereador".</p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <img src="../img/brasil.png" width="64px" height="64px">
                  <h4>Acesso ao Brasil inteiro</h4>
                  <p>O curso é totalmente online e garantimos acesso em todo o Brasil, sendo necessário uma conexão com a internet.</p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <img src="../img/livro.png" width="64px" height="64px">
                  <h4>O melhor conteúdo</h4>
                  <p>Garantimos que todos que comprarem vão obter todas as informações, de forma clara e objetiva, necessárias para um pré-candidato à vereador.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

<hr/>

  <section id="aux" class="aux">
    <div class="container">
      <div class="col-sm-12 my-5">  
        <div class="row justify-content-center">
          <h3>O que é ser um <strong>vereador</strong>?</h3>
          <p>O curso Ser Vereador possui x horas de conteúdo dividido em 5 aulas, com módulos que você pode ver e rever a qualquer momento.</p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="box">
              <span>Introdução.</span>
              <li>Mensagens aos candidatos e apresentação do trabalho</li>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>Aula 01.</span>
              <li>Questionamentos que orientam o comportamento do candidato</li>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>Aula 02.</span>
              <li>Diretrizes para a realização de uma boa campanha</li>
            </div>
          </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>Aula 03.</span>
                <li>Dicas motivacionais para o desenvolvimento do trabalho</li>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>Aula 04.</span>
                <li>Noções de oratória para melhorar a comunicação do candidato</li>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>Aula 05.</span>
                <li>Orientações finais ao candidato</li>
                <br>
              </div>
            </div>

        </div>
      </div>
    </div>
  </section>
<hr/>
        <section id="contact" class="contact">
          <div class="container">
            <div class="col-sm-12">
              <div class="row justify-content-center mt-5">
                <div class="col-4">                  
                  <h3><strong><center>Localização & Contatos</center></strong></h3>   
                  <p><center>Para qualquer dúvida, entre em contato:</center></p>           
                    <div class="info" id="contatoPosition">
                      <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Localização:</h4>
                        <p align="justify">Quedas do Iguaçu - Paraná - Brasil</p>
                      </div>

                      <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>*************</p>
                      </div>

                      <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Contato</h4>
                        <p>(45) 999812-9576</p>
                      </div>
                    </div>
                  </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <input type="hidden" name="comunicacao" value="<?php echo $_GET['comunicacao']; ?>">
                    <div class="container">
                        <h3><strong><center>Seja um Colaborador</center></strong></h3>
                        <p><center>Deixe sua mensagem abaixo:</center></p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="nome">Nome:</label>
                              <input type="text" class="form-control" id="nome" maxlength="80" name="nome" placeholder="Seu nome" required>
                              <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="contato">Contato:</label>
                              <input type="text" class="form-control" id="contato" maxlength="80" placeholder="Seu contato" name="contato" required>
                              <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="assunto">Assunto:</label>
                          <input type="text" class="form-control" id="assunto" maxlength="50" name="assunto" placeholder="Informe o Assunto" required>
                          <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                        </div>
                        
                        <div class="form-group">
                          <label for="mensagem">Mensagem:</label>
                          <textarea type="text" class="form-control" id="mensagem" maxlength="500" name="mensagem" placeholder="Informe a Mensagem" required></textarea>
                          <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                        </div>

                        <div class="text-center">
                          <button name="btnSubmit" id="btnSubmit" type="submit" class="btn-contact scrollto"  onclick="msg()">&nbsp;&nbsp;Enviar mensagem</button>
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