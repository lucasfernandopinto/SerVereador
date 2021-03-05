<?php
  require_once "../conexao/conexao.php";
 
  if(isset($_POST)) {
    if(isset($_POST["btnSubmit"])) {
      $comunicacao = $_POST["comunicacao"];
      $nome = $_POST["nome"];
      $telefone = $_POST["telefone"];
      $email = $_POST["email"];
      $assunto = $_POST["assunto"];
      $mensagem = $_POST["mensagem"];

      $sql = "INSERT INTO mensagem (nome, telefone, email, assunto, mensagem) VALUES ('$nome', '$telefone', '$email', '$assunto', '$mensagem')";

      $res = mysqli_query($con, $sql) or die("Erro: ".  mysqli_error($con));

      $id = mysqli_insert_id($con);
      
      header("location: index.php");
      exit;
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
      <h2>Seja bem-vindo ao melhor curso online para você que é pré-candidato ao cargo de vereador. Aqui você será orientado sobre todas as competências e habilidades necessárias para obter sucesso nesta campanha.</h2>
      <a href="compra.php" class="btn-get-started scrollto"><i>Comprar por R$ 55,00</i></a>
    </div>
  </section>

    <section id="services" class="services">
      <div class="container">
        <div class="col-sm-12">

          <div class="row justify-content-center my-5">
            <p>Vídeo explicativo sobre o Programa <span>Ser Vereador</span>.</p>
            <video width="720" height="480" controls="controls" poster="../img/fundo_abertura.jpg" id="video">
              <source src="../videos/INICIAL.mp4" type="video/mp4">
            </video>
          </div>

         <div class="row justify-content-center">
             <div class="col-sm-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <img src="../img/cadeado.png" width="64px" height="64px">
                  <h4>Acesso imediato</h4>
                  <p>Adquira o curso agora por apenas <span>R$ 55,00 (cinquenta e cinco reais)</span> e você terá acesso a todas as aulas do Programa Ser Vereador.</p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <img src="../img/brasil.png" width="64px" height="64px">
                  <h4>Acesso ao Brasil inteiro</h4>
                  <p>Curso totalmente online e com acesso garantido em todo o Brasil, sendo necessário uma conexão com a internet.</p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <img src="../img/livro.png" width="64px" height="64px">
                  <h4>O melhor conteúdo</h4>
                  <p>O Programa Ser Vereador oferece todas as informações necessárias para uma pré-candidatura de sucesso ao cargo de vereador.</p>
                </div>
              </div>
          </div>
        </div>
      </section>
<br><br>
<hr/>

  <section id="aux" class="aux">
    <div class="container">
      <div class="col-sm-12 my-5">  
        <div class="row justify-content-center">
          <h3>O que o <strong>Programa Ser Vereador</strong> oferece?</h3>
          <p><center>O Programa Ser Vereador é composto por 1 hora e 30 minutos de conteúdo dividido em 6 aulas, com orientações importantíssimas sobre o desenvolvimento da sua campanha, em módulos que você pode ver e rever a qualquer momento.</center></p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="box">
              <span>INTRODUÇÃO</span>
              <li style="text-align: justify;">Mensagens aos pré-candidatos e apresentação do trabalho</li>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>AULA 01</span>
              <li>Questionamentos que orientam o comportamento do candidato</li>
            </div>
          </div>
          
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>AULA 02</span>
              <li>Diretrizes para a realização de uma boa campanha</li>
            </div>
          </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>AULA 03</span>
                <li>Dicas motivacionais para o desenvolvimento do trabalho</li>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>AULA 04</span>
                <li>Noções de Oratória para melhorar a comunicação do candidato</li>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
<br><br>
              <div class="box">
                <span>AULA 05</span>
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
                  <p><center>Em caso de dúvidas, entre em contato:</center></p>           
                    <div class="info" id="contatoPosition">
                      <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Localização:</h4>
                        <p align="justify" id="aux" class="aux"><strong>Cascavel - Paraná - Brasil</strong></p>
                      </div>

                      <div class="email" class="aux">
                        <i class="icofont-envelope" ></i>
                        <h4>Email:</h4>
                        <p id="aux" target="_blank" class="aux"><a style="color: #ff0000" href="mailto:contato@cursoservereador.com.br"><strong>contato@cursoservereador.com.br</strong></a></p>
                      </div>

                      <div class="phone">
                        <i class="icofont-whatsapp"></i>
                        <h4>WhatsApp</h4>
                        <p id="aux" class="aux"><a style="color: #ff0000" href="http://api.whatsapp.com/send?1=pt_BR&phone=5545998129576."><strong>+55 (45) 99812-9576</strong></a></p>
                      </div>
                    </div>
                  </div>          

                <div class="col-lg-8 mt-5 mt-lg-0">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <input type="hidden" name="comunicacao" value="<?php echo $_GET['comunicacao']; ?>">
                    <div class="container">
                        <h3><strong><center>Entre em Contato</center></strong></h3>
                        <p><center>Deixe sua mensagem abaixo:</center></p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="nome"><b>Nome:</b></label>
                              <input type="text" class="form-control" id="nome" maxlength="80" name="nome" placeholder="Informe seu nome" required>
                              <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="telefone"><b>WhatsApp:</b></label>
                              <input type="text" class="form-control" id="telefone" maxlength="80" placeholder="Informe seu WhatsApp" name="telefone" required>
                              <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="email"><b>E-mail:</b></label>
                          <input type="email" class="form-control" id="email" maxlength="50" name="email" placeholder="Informe seu E-mail" required>
                          <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                        </div>

                        <div class="form-group">
                          <label for="assunto"><b>Assunto:</b></label>
                          <input type="text" class="form-control" id="assunto" maxlength="50" name="assunto" placeholder="Informe o Assunto" required>
                          <div class="invalid-feedback">Este campo é de preenchimento obrigatório.</div>
                        </div>
                        
                        <div class="form-group">
                          <label for="mensagem"><b>Mensagem:</b></label>
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

                    <script type="text/javascript" language="javascript">
                      function msg (){
                        if(document.getElementById("nome").value != ""){
                          if(document.getElementById("telefone").value != ""){
                            if(document.getElementById("email").value != ""){
                              if(document.getElementById("assunto").value != ""){
                                if(document.getElementById("mensagem").value != ""){
                                  alert('Enviado com Sucesso!');
                                }
                              }
                            }
                          }
                        }
                      }
                    </script>

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
          <span>&copy 2020</span>
          <a href="reembolso.php" id="reembolso">Direito a Reembolso</a>
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