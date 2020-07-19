<?php
  require_once "../conexao/conexao.php";
  
  $con = mysqli_connect("localhost", "root", "", "vereador") or die("Erro: ". mysqli_connect_error());
    mysqli_query($con, "SET NAMES 'utf8'");
    mysqli_query($con, "SET character_set_connection=utf8");
    mysqli_query($con, "SET character_set_client=utf8");
    mysqli_query($con, "SET character_set_results=utf8");

    $sql = "SELECT * FROM certificado";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($certificado, $nome, $contato);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Verificar Colaboradores</title>
  
    <link rel="stylesheet" type="text/css" href="estilo_adm.css">

    <meta charset="utf-8">
  
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
            <li class="nav-item">
              <a href="controle_cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item active">
              <a href="verificar_certificado.php">Certificado</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

  <section class="certificadoControle">
    <div class="container">
      <div class="col-sm-12">	
        <div class="row justify-content-center my-3">
          <h1>Controle de Certificados</h1><br>
        </div>

        <div class="table-responsive">

        	<table class="table table-bordered" id="tabelaCertificado">
        		<thead class="thead">
        			<tr>
  	        		<th>Id</th>
  	        		<th>Nome</th>
  	          	<th>Contato</th>
  			      </tr>
  	      	</thead>
  		    
  		    <tbody class="table-secondary" id="tabelaSecundariaCertificado">
  		    	<?php
  		        	while($stmt->fetch()) {
  		            	echo "<tr>\n";
  		            	echo "<td>".$certificado."</td>\n";
  		            	echo "<td>".$nome."</td>\n";
  		            	echo "<td>".$contato."</td>\n";
  		            	echo "</tr>\n";
  		          	}
  		        ?>  
  		    </tbody>
      	</table>
      	</div>
      </div>
    </div>
  </section>
    
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