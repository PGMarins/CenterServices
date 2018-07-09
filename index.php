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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo1.css">

  <link rel="stylesheet" type="text/css" href="Dashboard/bibliotecas/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid p-0">
		
		<?php include "navbar.php"; ?>

		<div class="row no-gutters">
			<div id="demo" class="carousel slide carousel-fade mt-1 pb-4 bg-warning" data-ride="carousel">
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
							<div class="carousel-caption d-none d-md-block">
								<h3>CenterServiçes</h3>
								<p>Prestamos serviços em todas as areas</p>
							</div>  
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="img/construcao.png" alt="construcao" width="1600" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3>Area completa</h3>
							<p>De reformas, consertos até construção</p>
						</div>  
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="img/cursos.png" alt="Cursos" width="1600" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3>Cursos</h3>
							<p>Aprenda oque quiser temos muitas opções venha conhecer</p>
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
		</div>
	
		<div class="row no-gutters">
			<div class="col-12">
        		<div class="container-fluid">
					<div class="row">
		            	<div class="col-12 col-lg-9">
							<div class="card  m-0 text-white">
								<div class="card-header bg-primary m-0 text-center">
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
						</div> 

            			<div class="col-12 col-lg-3 border text-center border-bottom-0">
       						<img src="img/rede.png" class="img-fluid rounded">
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
										<button type="button" class="button_busca" data-toggle="modal" data-target="#sobre">
	  										Entrar aqui
										</button>

										<!-- Modal -->
										<div class="modal fade" id="sobre" tabindex="-1" role="dialog" aria-labelledby="sobre" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
											    <div class="modal-content">
												    <div class="modal-header">
													    <h5 class="modal-title" id="sobre">CenterServiçes</h5>
													    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
												        	<span aria-hidden="true">&times;</span>
												        </button>
												    </div>
												    <div class="modal-body text-justify">
												        O CenterServiçes proporciona vários tipos de serviços com vários profissionais.<br/>
Com a falta de tempo nos dias de hoje o usuário achara serviços com bastante facilidade e praticidade. Na contratação de um profissional freelance o cliente estará ganhando bastante tempo e economizando dinheiro.<br/> Ao contratar um freelance, o cliente não gasta com encargos, como impostos, transporte, plano de saúde, entre outros benefícios. O usuário paga apenas a taxa cobrada pelo serviço, minimizando o custo e garantindo mais economia. Este site foi Criado na Escola tecnica do curso de informatica em Brasópolis-MG pelos Alunos: Paulo gabriel e Ariel januario.

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
										<a href="criaprof.php" class="button_busca" >Entrar aqui</a>
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
											        <h5 class="modal-title" id="exampleModalLongTitle">LOGIN E REDE SOCIAL</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											        	<span aria-hidden="true">&times;</span>
											        </button>
										    	</div>
											    <div class="modal-body">
<div class="jumbotron">
		<div class="row no-gutters w-100">
			<div class="col-12">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12 col-md-4 col-lg-5">
											<i class='fa fa-fw fa-facebook-square'></i> FACEBOOK<br/>
											<i class='fa fa-fw fa-instagram'></i> INSTAGRAN<br/>
											<i class='fa fa-fw fa-youtube'></i> YOUTUBE<br/>
									<strong>criadores do site<br/></strong>
									Paulo<br/>
									ariel<br/>
									</p>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-7">
								<p>
											centercervises2018<br/>
											oficialcenterservices<br/>
											OFICIALCENTERCERVICES<br/><br/>
											<i class='fa fa-fw fa-facebook-square'></i>paulo C.Services<br/>
											<i class='fa fa-fw fa-facebook-square'></i>Ariel C.Services</p>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-12 bg-dark text-white">
								<form method="post" action="logar.php">
									<div class="form-group mt-3">
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
									<button class="button_busca btn-block mb-3">ENTRAR</button>
								</form>
							</div>
						</div>
					</div>
			</div>
		</div>
</div>
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
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
											Comentarios
										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
												<div class="row no-gutters">
			<div id="demo" class="carousel slide carousel-fade mt-1 pb-4 bg-warning" data-ride="carousel">
			 <!-- Indicadores -->
			    <ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
			    </ul>
				 <!-- O carrossel -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="img-fluid" src="img/1.jpg" alt="logo" width="1600" height="500">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="img/2.jpg" alt="construcao" width="1600" height="500">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="img/10.jpg" alt="Cursos" width="1600" height="500"> 
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
		</div>
			<div class="row no-gutters mt-3">
			<div id="demo" class="carousel slide carousel-fade mt-1 pb-4 bg-warning" data-ride="carousel">
			 <!-- Indicadores -->
			    <ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
			    </ul>
				 <!-- O carrossel -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="img-fluid" src="img/5.jpg" alt="logo" width="1600" height="500">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="img/6.png" alt="construcao" width="1600" height="500">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="img/cursos.png" alt="Cursos" width="1600" height="500">
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
		</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
						<div class="col-12 col-lg-3 border border-bottom-0 border-top-0 mb-5 text-center">
							<img src="img/info.png" class="img-fluid rounded">
						</div> 
					</div>
				</div>
			</div>	
		</div>
		<!-- Rodapé -->
		<div class="row no-gutters w-100">
			<div class="col-12">
				<div class="row no-gutters text-center text-white bg-dark p-1">
					<div class="col-md-2 m-0 ml-2 ">
						<small><strong>Conecte-Se conosco</strong></small>
					</div>
					<div class="col-md-2">
						<small><i class='fa fa-fw fa-facebook-square'></i> FACEBOOK</small>
					</div>
					<div class="col-md-2">
						<small><i class='fa fa-fw fa-instagram'></i> INSTAGRAN</small>
					</div>
				</div>
				<footer>
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12 col-md-4">
								<strong><p>Redes sociais.<br/></strong>
											Facebook<br/>
											Instagran<br/>
											Youtube<br/>
									<strong>criadores do site<br/></strong>
									Paulo<br/>
									ariel<br/>
									</p>
							</div>
							<div class="col-sm-12 col-md-4">
								<p><br/>
											centercervises2018<br/>
											oficialcenterservices<br/>
											OFICIALCENTERCERVICES<br/><br/>
											paulo C.Services<br/>
											Ariel C.Services</p>
							</div>
							<div class="col-sm-12 col-md-4">
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
									<button class="button_busca btn-block">ENTRAR</button>
								</form>
							</div>
						</div>
					</div>
				</footer>
				<div class="row no-gutters">
						<div class="col-12 text-center 	m-0 p-0 text-white bg-dark p-1 W-100">
							<small>&copy; CenterServiçes - 2018</small>
						</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>