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
		<span class=" d-xs-none"> <p>Aprenda oque quiser temos muitas opções venha conhecer</p></span>
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
<div class="card-header" id="ali"><!--divisão--></div>
        <div class="container-fluid">
			<div class="row">
            <div class="col-12 col-lg-9">
			
					<div class="card-header bg-primary text-center">
				Entre e encontre oque precisa 
					</div> 
						<div class="btn-wrap"><!--imagem de acesso ao menu-->
						<img class="card-img-top" src="img/menu2.png" alt="Card image cap" style="height: 350px">
						<button class="button_busca offset-6" id="menu1" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
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
		
                 <div class="card-deck text-center">
				<div class="card">
					<img src="img/quemsomos.jpg" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Sobre nós</h4>
						<h6 class="card-subtitle mb-2 text-muted">Tudo sobre CenterServiçes</h6>
					</div>
					<div class="card-footer">
						<button type="button" class="button_busca" data-toggle="modal" data-target="#exampleModalCenter">
  Entrar aqui
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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
					<button type="button" class="button_busca" data-toggle="modal" data-target="#exampleModalCenter">
  Entrar aqui
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
					
					</div>
				</div>
				</div>
           
            </div> 
            <div class="col-12 col-lg-3 border border-bottom-0 border-top-0">
             <img src="img/cep.png" class="img-fluid rounded float">
            </div>
            <div class="col-12 col-lg-9">
				
<div class="jumbotron">
  	<div class="container">
		<h2>Trabalhos já realizados</h2>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Comentarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Fotos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Videos</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Comentarios</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Fotos</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Videos</div>
</div>
	</div>
</div>
			</div> 
<div class="col-12 col-lg-3 border border-bottom-0 border-top-0 mb-5">
	<center><img src="img/info.png" class="img-fluid rounded float"></center>
</div> 
			</div>
		</div>	
		<div class="footer" id="footer">
	<div class="bg-info">
	<div class="row">
		<small><strong>Conecte-Se conosco</strong></small><small><i class='fa fa-fw fa-facebook-square'>FACEBOOK</i></small><small><i class='fa fa-fw fa-instagram'>INSTAGRAN</i></small>
	</div>
	</div>
</div> 
		<footer id="img">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<p>A Empressa que veio para facilidar a vida de toda população.<br/>
									Vasta Areas de Serviços<br/>
									Vasta Areas de Cursos<br/>
									Vasta Areas de Transportes<br/>
									E muito mais...</p>
					</div>
					<div class="col-12 col-md-4">
						<p>A Empressa que veio para facilidar a vida de toda população.<br/>
									Vasta Areas de Serviços<br/>
									Vasta Areas de Cursos<br/>
									Vasta Areas de Transportes<br/>
									E muito mais...</p>
					</div>
					<div class="col-12 col-md-4">
						<form method="post" action="logar.php">
							<div class="form-group">
							<h2>Faça Login</h2>
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" required placeholder="Digite seu email">
								<p class="font-weight-light text-secondary">@seudominio.com</p>
							</div>
							<div class="form-group">
								<label for="senha">Senha</label>
								<input type="password" class="form-control" id="senha" required name="senha" placeholder="Digite sua senha">
							</div>
							<div class="form-group">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox">
												Manter conectado.
										</label>
									</div>
							</div>
							<button class="button_login btn-block">ENTRAR</button>
						</form>
					</div>
				</div>
			</div>
		</footer>
<div class="footer" id="footer">
	<div class="text-center bg-info">
		<small>CenterServiçes2018</small>
	</div>
</div> 
	  <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>