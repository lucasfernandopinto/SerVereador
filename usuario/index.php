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

    <title>Ser Vereador</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
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
            <li class="nav-item">
              <a href="contato.php">Entre em contato</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

  <section id="hero">
    <div class="hero-container">
      <h1>Ser Vereador</h1>
      <h2>Seja bem-vindo ao melhor curso online para você que é um pré-candidato a vereador. Aqui serão ensinadas todas as competências e habilidades para que você obtenha sucesso nesta campanha.</h2>
      <a href="compra.php" class="btn-get-started scrollto">Comprar por R$00,00</a>
    </div>
  </section>

      <section id="services" class="services">
      <div class="container">
        <div class="row justify-content-center my-5">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <img src="../img/cadeado.png" width="64px" height="64px">
              <h4>Acesso imediato</h4>
              <p>Compre o curso agora por R$ 00,00 e você vai possuir acesso liberado imediatamente a todas as aulas do programa "Ser Vereador"</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <img src="../img/brasil.png" width="64px" height="64px">
              <h4>Acesso ao Brasil inteiro</h4>
              <p>O curso é totalmente online e garantimos acesso em todo o Brasil, sendo necessário uma conexão com a internet.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <img src="../img/livro.png" width="64px" height="64px">
              <h4>O melhor conteúdo</h4>
              <p>Garantimos que todos que comprarem vão obter todas as informações, de forma clara e objetiva, necessárias para um pré-candidato à vereador.</p>
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
          <h3>O que é ser um vereador?</h3>
          <p>O curso Ser Vereador possui x horas de conteúdo dividido em 5 aulas, com módulos que você pode ver e rever a qualquer momento.</p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>04</span>
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>05</span>
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>06</span>
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
              </div>
            </div>

        </div>
      </div>
    </div>
  </section>
<hr/>
   <section id="team" class="team">
      <div class="container">
        <div class="row justify-content-center">
            <h2>Equipe</h2>
        </div>
        <div class="row justify-content-center">
          <p>Os seres responsáveis por toda a dinâmica do curso são:</p>
        </div>

          <div class="row justify-content-center my-3">  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <div class="member-img">
                  <img src="../img/pessoa.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Renato</h4>
                  <span>Chief Executive Officer</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <div class="member-img">
                  <img src="../img/pessoa.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Chico</h4>
                  <span>Product Manager</span>
                </div>
              </div>
            </div>
          </div>
        </div>
       </section>
<hr/>
    <section id="faq" class="faq">
      <div class="container">
          <div class="row justify-content-center my-5">
            <div class="section-title">
              <h3>Algumas questões frequentes sobre ser vereador</h3>
            </div>
            <div class="row justify-content-center my-3">
              <div class="faq-list">
                <ul>
                  <li>
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis?</a>
                    <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                      <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                      </p>
                    </div>
                  </li>

                  <li>
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?</a>
                    <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>

                  <li>
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?</a>
                    <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                      <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                      </p>
                    </div>
                  </li>

                  <li>
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? </a>
                    <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                      <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                      </p>
                    </div>
                  </li>

                  <li>
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</a>
                    <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                      <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                      </p>
                    </div>
                  </li>

                </ul>
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
                  <h3><strong><center>Localização e Contatos</center></strong></h3>   
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
                        <h4>Contatos:</h4>
                        <p>Renato: (47) 99784-1826</p>
                        <p>Chico: (46) 9998-1226</p>
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
                          <textarea type="text" class="form-control" id="mensagem" maxlength="200" name="mensagem" placeholder="Informe a Mensagem" required></textarea>
                          <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                        </div>

                        <div class="text-center">
                          <button name="btnSubmit" id="btnSubmit" type="submit" class="btn btn-primary" onclick="msg()">&nbsp;&nbsp;Enviar mensagem</button>
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