<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width, initial-scale = 1, shrink-to-fit=no">
	<title>Area de gerencia</title>
	<link rel="stylesheet" type="text/css" href="bibliotecas/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bibliotecas/font-awesome/css/font-awesome.min.css"><!--fonte de icones-->
	<link rel="stylesheet" type="text/css" href="bibliotecas/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/sb-admin.min.css">
</head>
<body class="bg-dark fixed-nav sticky-footer" id="page-top">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav"><!--navbarlateral-->
		<a class="navbar-brand" href="index.php">Admin CenterServices</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCurso" aria-control="navbarCurso" aria-expaned="false" aria-label="Navegação Toggle">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarCurso" class="collapse navbar-collapse">
			<ul class="navbar-nav navbar-sidenav">
					<li class="nav-item" data-toggle="tooltip" data-placement="right">
						<a class="nav-link" href="#">
							<i class="fa fa-fw fa-address-card"></i>
							<span class="nav-link-text">Profissionais</span>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right">
						<a class="nav-link" href="usuarios.php">
							<i class="fa fa-fw fa-table"></i>
							<span class="nav-link-text">Tabelas de usuarios</span>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right">
						<a class="nav-link" href="profissionais.php">
							<i class="fa fa-fw fa-clipboard"></i>
							<span class="nav-link-text">Curriculum</span>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right">
						<a class="nav-link nav-link-collapse collapse" href="#linkspagina" 
												data-toggle="collapse">
							
							<i class="fa fa-fw fa-file"></i>
							<span class="nav-link-text">Paginas</span>
						</a>
						<ul class="sidenav-second-level collapse" id="linkspagina">
							<li>
								<a href="cad.html">pagina de login</a>
							</li>
							<li>
								<a href="recuperar.html">pagina de recuperar senha</a>
							</li>
							<li>
								<a href="registro.html">pagina de cadastro</a>
							</li>
						</ul>
					</li>	
					
			</ul>
			<ul class="navbar-nav ml-auto"><!--area de mensagens-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-envelope"></i>
						<span class="d-lg-none">mensagens
						<span class="badge badge-pill badge-primary">12 Novas</span></span><!--esta mensagem só nao aparece em tela grande-->
					<span class="indicator text-primary d-none d-lg-block">
					<i class="fa fa-fw fa-circle"></i><!--icone de circulo azul-->
					</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="messagesDropdown">
						<h6 class="dropdown-header">Novas mensagens</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<strong>Benedito Dias</strong>
								<span class="small float-right text-muted">14:30</span>
							<div class="dropdown-message small">
							mes que vem estarei ai em brasopolis
							para podermos conversar sobre o trabalho.
							</div>
					<div class="dropdown-divider"></div>
						</a>
						<a class="dropdown-item" href="#">
							<strong>Carolina</strong>
								<span class="small float-right text-muted">14:30</span>
							<div class="dropdown-message small">
							Esta pronto o seu pedido.
							</div>
					<div class="dropdown-divider"></div>
						</a>
						<a class="dropdown-item" href="#">
							<strong>Pedro</strong>
								<span class="small float-right text-muted">14:30</span>
							<div class="dropdown-message small">
							Agora podemos ir para Sao Paulo.
							</div>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item samll">Ver todas mensagens</a>
						</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-bell"></i>
						<span class="d-lg-none">Alertas
						<span class="badge badge-pill badge-warning">5 novos</span></span><!--esta mensagem só nao aparece em tela grande-->
					<span class="indicator text-warning d-none d-lg-block">
					<i class="fa fa-fw fa-circle"></i><!--icone de circulo azul-->
					</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="alertsDropdown">
					<h6 class="dropdown-header">Novos Alertas</h6>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">
						<span class="text-success">
						<strong>
							<i class="fa fa-fw fa-long-arrow-up"></i>
								Atualização de Estado
						</strong>
						</span>
							<span class="small float-right text-muted">14:30</span>
							<div class="dropdown-message small">
							mes que vem estarei ai em brasopolis
							para podermos conversar sobre o trabalho.
							</div>
						<div class="dropdown-divider"></div>
					</a>
						<a class="dropdown-item" href="#">
						<span class="text-danger">
						<strong>
						<i class="fa fa-fw fa-long-arrow-down"></i>
								Atualização de Estado
						</strong>
						</span>
							<span class="small float-right text-muted">14:30</span>
							<div class="dropdown-message small">
							mes que vem estarei ai em brasopolis
							para podermos conversar sobre o trabalho.
							</div>
						<div class="dropdown-divider"></div>
					</a>
						<a class="dropdown-item" href="#">
						<span class="text-success">
						<strong><i class="fa fa-fw fa-long-arrow-up"></i>
								Atualização de Estado
						</strong>
						</span>
							<span class="small float-right text-muted">14:30</span>
							<div class="dropdown-message small">
							mes que vem estarei ai em brasopolis
							para podermos conversar sobre o trabalho.
							</div>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item samll">Ver todos alertas</a>
					</a>
					</div>
				<li class="nav-item"><!--area de pesquisa-->
					<form class="form-inline my-2 my-lg-0 mr-lg-2">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="pesquisar por...">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
				</li>
				<li class="nav-item"><!--saida da area adiministrativa-->
					<a class="nav-link" href="../index.php">
						<i class="fa fa-sign-out">Sair</i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a id="sidenavToggler" class="nav-link text-center">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
		<div class="content-wrapper"><!--aqui começa a pagina em branco-->
		<div class="container-fluid">
		<ol class="breadcrumb">
		<li class="breadcrumb-item">
		<a href="index.php">home</a>
		</li>
			<li class="breadcrumb-item">
			Tabela de usuarios
			</li>
		</ol>
		<div class="row usu">
			<div class="col-12">
				<h1>Usuarios Cadastrado</h1>
							<?php include "exibe2.php";?>
			</div>
		</div>
		</div>
		<footer class="sticky-footer"><!--rodapé-->
			<div class="container">
				<div class="text-center">
					<small>copyright CenterServices2018</small>
				</div>
			</div>
		</footer>
	</div>	
	<script src="bibliotecas/jquery/jquery.min.js"></script>
	<script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>
	<script src="bibliotecas/datatables/jquery.dataTables.js"></script>
	<script src="bibliotecas/datatables/dataTables.bootstrap4.js"></script>
	<script src="js/sb-admin.min.js" type="text/javascript"></script>
	<script src="js/sb-admin-datatables.min.js" type="text/javascript"></script>
</body>
</html>
	