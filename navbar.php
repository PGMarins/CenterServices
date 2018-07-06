
<nav class="navbar fixed-top navbar-expand-lg bg-warning navbar-light nav-shadow"><!--começo da navbar-->
	<img src="img/nome.png" alt="Logo" class="img-fluid mr-2" width="270" height="40"><!--logo-->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link active" href="index.php"><strong>Home</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./criaprof.php"><strong>Trabalhe conosco</strong></a>
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
				if($_SESSION['grupo']==1){
					echo "<a class='dropdown-item' href='./Dashboard'>Admin</a>";
				}
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
