<?php
  session_start();
  if(!isset($_SESSION['id']))
  {
    header('location: login.php');
    exit;
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
    
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center my-3">
          <h1>Aulas</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-center mb-5">
        <div class="col-sm-10">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Abertura
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div class="jumbotron jumbotron-fluid">
                    <div class="row justify-content-center mb-5">
                      <div class="col-sm-11">
                        <div class="embed-responsive embed-responsive-16by9">
                          <video controls="controls" poster="../img/fundo_abertura.jpg">
                            <source src="../videos/1 - ABERTURA.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Introdução - Mensagens aos candidatos e apresentação do trabalho
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <div class="jumbotron jumbotron-fluid">
                    <div class="row justify-content-center mb-5">
                      <div class="col-sm-11">
                        <div class="embed-responsive embed-responsive-16by9">
                          <video controls="controls" poster="../img/fundo_introducao.jpg">
                            <source src="../videos/INTRODUCAO.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Aula 01 - Questionamentos que Orientam o Comportamento do Candidato
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <div class="jumbotron jumbotron-fluid">
                    <div class="row justify-content-center mb-5">
                      <div class="col-sm-11">
                        <div class="embed-responsive embed-responsive-16by9">
                          <video controls="controls" poster="../img/fundo_aula01.jpg">
                            <source src="../videos/AULA 01.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Aula 02 - Diretrizes para a Realização de uma Boa Campanha
                  </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                  <div class="jumbotron jumbotron-fluid">
                    <div class="row justify-content-center mb-5">
                      <div class="col-sm-11">
                        <div class="embed-responsive embed-responsive-16by9">
                          <video controls="controls" poster="../img/fundo_aula02.jpg">
                            <source src="../videos/AULA 02.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Aula 03 - Dicas Motivacionais para o Desenvolvimento do Trabalho
                  </button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                  <div class="jumbotron jumbotron-fluid">
                    <div class="row justify-content-center mb-5">
                      <div class="col-sm-11">
                        <div class="embed-responsive embed-responsive-16by9">
                          <video controls="controls" poster="../img/fundo_aula03.jpg">
                            <source src="../videos/AULA 03.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Aula 04- Noções de Oratória para Melhorar a Comunicação do Candidato
                  </button>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                  <div class="jumbotron jumbotron-fluid">
                    <div class="row justify-content-center mb-5">
                      <div class="col-sm-11">
                        <div class="embed-responsive embed-responsive-16by9">
                          <video controls="controls" poster="../img/fundo_aula04.jpg">
                            <source src="../videos/AULA 04.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Aula 05 - Orientações Finais ao Candidato
                  </button>
                </h5>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                  <div class="jumbotron jumbotron-fluid">
                    <div class="row justify-content-center mb-5">
                      <div class="col-sm-11">
                        <div class="embed-responsive embed-responsive-16by9">
                          <video controls="controls" poster="../img/fundo_aula05.jpg">
                            <source src="../videos/AULA 05.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-center mb-5">
        <div class="col-sm-2">
          <a href="certificado.php" class="btn btn-primary" role="button" aria-pressed="true" id="botaoCertificado">Clique aqui para receber seu certificado</a>
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