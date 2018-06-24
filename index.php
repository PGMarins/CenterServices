<!DOCTYPE html>
<?php session_start();
if(isset($_GET['sair'])) $sair = $_GET['sair'];
else $sair=0;

if($sair==1){
	session_destroy();
	header("location:index.php");
}
?>
<html lang="pt-br">
<head>
  <title>CenterServiçes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="Dashboard/bibliotecas/font-awesome/css/font-awesome.min.css">
</head>
<body>
      <nav class="navbar fixed-top navbar-expand-md bg-warning navbar-dark"><!--começo da navbar-->
           <img src="img/nome.png" alt="Logo" class="mr-lg-3" width="270" height="40"><!--logo-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><strong>Trabalhe conosco</strong></a>
                </li>
                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>
					  Serviços
					</strong></a>
					<div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#"><strong>Todas Areas</strong></a><!--dropdown com as areas de serviços-->
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Informatica</a>
					  <a class="dropdown-item" href="#">Musical</a>
					  <a class="dropdown-item" href="#">Artes</a>
					  <a class="dropdown-item" href="#">Construção</a>
					  <a class="dropdown-item" href="#">Cursos</a>
					  <a class="dropdown-item" href="#">Transportes</a>
					</div>
				 </li>
	  </ul>
	<form class="form-inline mr-2 ">
		<div class="input-group d-flex justify-content-end">
			<input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Pesquisar..." aria-describedby="pesquisar">
			<div class="input-group-append">
				<button class="button_busca" type="button">Buscar</button>
			</div>
		</div>
	</form>
	<?php
		if(isset($_SESSION['usuario'])){
			echo "<ul class='navbar-nav'><li class='nav-item dropdown'>";
				echo "<button class='button_busca nav-link dropdown-toggle' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' type='button' onclick='location.href=login.php'><span class='text-success'>
					<i class='fa fa-fw fa-circle'></i>
					</span><i>".$_SESSION['usuario']."</i></button>";
					echo "<div class='dropdown-menu bg-info' aria-labelledby='navbarDropdown'>";
					echo "<a class='dropdown-item' href='?sair=1'>Sair</a>";
					echo"</div>";
			 echo "</li></ul>";
		}
		else{
$pagina=<<<EOPAGE
<button class="button_busca" type="button" onclick="location.href='login.php'">Login</button>
EOPAGE;
echo $pagina;
		}
	?>

          </div>  
      </nav>
      <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicadores -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
        
            <!-- O carrossel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="img-fluid" src="img/logoo.png" alt="logo" width="1600" height="500">
                  <div class="carousel-caption">
                    <h3>CenterServiçes</h3>
                    <p>Prestamos serviços em todas as areas</p>
                  </div>  
              </div>
              <div class="carousel-item">
                  <img class="img-fluid" src="img/construcao.png" alt="construcao" width="1600" height="500">
                  <div class="carousel-caption">
                   <span class="d-md-none"> <h3>Area completa</h3>
                    <p>De reformas, consertos até construção</p></span>
                  </div>  
              </div>
              <div class="carousel-item">
                  <img class="img-fluid" src="img/cursos.png" alt="Cursos" width="1600" height="500">
                  <div class="carousel-caption">
                    <h3>Cursos</h3>
                   <span class="d-sm-none d-xs-none"> <p>Aprenda oque quiser temos muitas opções venha conhecer</p></span>
                  </div>   
              </div>
            </div>
        
            <!-- Controles esquerdo e direito -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
		<div class="card-header" id="ali"><!--divisão-->
					</div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-lg-9">
				<div class="card text-center">
					<div class="card-header bg-primary">
				Entre e encontre oque precisa 
					</div> 
						<div class="btn-wrap"><!--imagem de acesso ao menu-->
						<img class="card-img-top" src="img/menu2.png" alt="Card image cap" style="height: 350px">
						<button class="btn">Entrar aqui</button>
						</div>
				</div>
					<div class="card-footer bg-primary text-center">
					CenterServiçes esta aqui para facilitar a vida de todos
					</div>
			</div> 
            <div class="col-12 col-lg-3 border border-bottom-0">
          <img src="img/pro.jpg" class="img-fluid rounded float">
		   <center><img src="img/curso.png" class="img-fluid rounded float"></center>
            </div>
            <div class="col-12 col-lg-9 mt-5 mb-5"><!--começo dos cards-->
			<div class="card text-center">
                 <div class="card-deck">
				<div class="card">
					<img src="img/quemsomos.jpg" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Sobre nós</h4>
						<h6 class="card-subtitle mb-2 text-muted">Tudo sobre CenterServiçes</h6>
					</div>
					<div class="card-footer">
						<button class="button_busca">Entrar aqui</button>
					</div>
				</div>
				<div class="card">
					<img src="img/traba.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">Faça parte dessa empressa</h5>
						<h6 class="card-subtitle mb-2 text-muted">Saiba como</h6>
						
					</div>
					<div class="card-footer">
						<button class="button_busca">Entrar aqui</button>
					</div>
				</div>
				<div class="card">
					<img src="img/contato.jpeg" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">entre em contato</h4>
						<h6 class="card-subtitle mb-2 text-muted">Conecte a nós</h6>

					</div>
					<div class="card-footer">
						<button class="button_busca">Entrar aqui</button>
					</div>
				</div>
				</div>
            </div> 
            </div> 
            <div class="col-12 col-lg-3 border border-bottom-0 border-top-0">
             <img src="img/cep.png" class="img-fluid rounded float">
            </div>
            <div class="col-12 col-lg-9">
				<div class="card-header" id="aqui">
					</div>
	<div class="jumbotron">
  		<div class="container">
  <h2>Trabalhos já realizados</h2>
  <br>
  <!-- Menu do jumbotron -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">FOTOS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">VIDEOS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" aria-control="menu" href="#menu2">INDICAÇÕES DE CLIENTES</a>
    </li>
  </ul>

  <!--conteudos do menu -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Fotos</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Videos</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Comentarios</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
    </div>
  </div>
</div>

	</div>
					</div> 
            <div class="col-12 col-lg-3 border border-bottom-0 border-top-0">
             <center><img src="img/info.png" class="img-fluid rounded float"></center>
            </div> 
            <div class="col-12 col-lg-9 bg-danger">
              article 4
            </div> 
            <div class="col-12 col-lg-3 bg-info"><!--colocação dos conteudos do site usando as col-->
              aside 4
            </div>
			 <div class="col-12 col-lg-12">
				<div class="card-footer bg-secondary">
				</div>  
			</div>  
			 <div class="col-12">
				<div class="card-footer" id="footer">
					<div class="text-center bg-info">
				<small>CenterServiçes2018</small>
					</div>
				</div>  
            </div>  
          </div>
        </div>

	  <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>