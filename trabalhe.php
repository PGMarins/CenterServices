<!DOCTYPE html>
<?php session_start();//carrega as sessoes
if(isset($_GET['sair'])) $sair = $_GET['sair'];//verifica se existe algo no metodo get sair, se existir a variavel recebe o valor indicado
else $sair=0;//caso nao exista a variavel sair recebe zero

if($sair==1){//se sair for igual a 1 destroi a sessao apagando os dados da mesma e redireciona para pagina de inicial
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
  <link rel="stylesheet" type="text/css" href="css/estilo1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="Dashboard/bibliotecas/font-awesome/css/font-awesome.min.css">
</head>
<body class="fundoinicial">
      <nav class="navbar fixed-top navbar-expand-lg bg-warning navbar-dark"><!--começo da navbar-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
	<ul class="navbar-nav mr-auto">
			<li class="nav-item">
	           <img src="img/nome.png" alt="Logo" class="img-fluid" width="270" height="40"><!--logo-->
			</li>
		
			<a class="nav-link active" href="index.php"><strong>Home</strong></a>
		
        <li class="nav-item">
            <a class="nav-link" href="#"><strong>Trabalhe conosco</strong></a>
        </li>
        <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>
				 Serviços
			</strong></a>
			<div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="servicos.php"><strong>Todas Areas</strong></a><!--dropdown com as areas de serviços-->
					<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="Cursos.php">Cursos</a>
			<a class="dropdown-item" href="#">Artes</a>
			<a class="dropdown-item" href="#">Pintor</a>
			<a class="dropdown-item" href="#">Musical</a>
			<a class="dropdown-item" href="#">Construção</a>
			<a class="dropdown-item" href="#">Eletricista</a>
			<a class="dropdown-item" href="transportes.php">Transportes</a>
			<a class="dropdown-item" href="programadores.php">Programadores</a>
			<a class="dropdown-item" href="#">Organizadores</a>
			<a class="dropdown-item" href="#">Limpeza e cozinha</a>
			<a class="dropdown-item" href="#">Manutenção em geral</a>
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
		if(isset($_SESSION['usuario'])){// verifica se existe usuario conectado, caso exista ela muda o botao de login para o nome do usuario
			echo "<ul class='navbar-nav'><li class='nav-item dropdown'>";
				echo "<button class='button_busca nav-link dropdown-toggle' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' type='button' onclick='location.href=login.php'><span class='text-success'>
					<i class='fa fa-fw fa-circle'></i>
					</span><i>".$_SESSION['usuario']."</i></button>";//exibe o nome do usuario logado
					echo "<div class='dropdown-menu bg-info' aria-labelledby='navbarDropdown'>";
					echo "<a class='dropdown-item' href='?sair=1'>Sair</a>";
					echo"</div>";
			 echo "</li></ul>";
		}
		else{
			//EOPAGE pega todo o conteudo html dentro dele e  arquiva em uma variavel.
$pagina=<<<EOPAGE
<button class="button_busca" type="button" onclick="location.href='login.php'">Login</button>
EOPAGE;

echo $pagina;
		}
	?>
 </div>  
      </nav>
	  <div class="card-header">
	 <center><img src="img/teclado.png" class="img-fluid"></center></div>
	   <center> 
			  <div class="col-12 col-lg-6 offset-6">
                 <div class="card-deck text-center">
				<div class="card mb-5">
					<img src="img/.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">texto</h4>
						<h6 class="card-subtitle mb-2 text-muted">sobre como contratar...</h6>				
					</div>
				</div>
	  </center>
	    <div class="card-footer bg-primary text-center mt-5">
		CenterServiçes2018
		</div>
	  	  <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>