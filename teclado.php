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
    <link rel="stylesheet" href="iconic/font/css/open-iconic-bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="Dashboard/bibliotecas/font-awesome/css/font-awesome.min.css">
</head>
<body>
      <?php include "navbar.php";?>
<center> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-12">
					<div class="card-deck text-center ">
						<div class="card mb-5">
							<div class="card-header text-center"><strong><h4>AULAS DE TECLADO</h4></strong></div>
								<div class="card-body">
										<h5 class="card-subtitle mb-2 text-justify">Quer aprender a tocar teclado?<br/>
										Mesmo que você não tenha a minima noção de teclado ou de musica isso não sera problema, se você deseja aprender não tenha medo que com pratica você podera aprender e com dedicação pode ser um bom tecladista e se realizar tocando em eventos,bares, reunião de familia, entre amigos ou ate mesmo para hoby.<br/>
										Caso você saiba ja tocar venha aperfeiçoar suas abilidades de tecladista<br/> 
										você chegou no lugar certo, aqui fornecemos cursos te teclado tanto a domicilio quanto o local de aula.<br/>
										Você encontra aulas na sua cidade mesmo para facilitar a vida do aluno.<br/>
										Caso queira contratar um professor ou achar um local para praticar preenche o formulario ao lado e entraremos em contato o mais rapido possivel.<br/> 
										</h5>				
								</div>
									<div class="card-footer text-center">
									<img class="card-img" src="img/tecladoo.png" alt="musica">
									</div>
						</div>
			<div class="col-12 col-md-8 col-lg-6" >
			<div class="card" id="CURRICULUM">
				<div class="card-header text-center"><h4>Preenche e entraremos em contato</h4></div>
				<center><span class="oi oi-document"></span></center>
				<div class="card-body">
					<form method="post" action="cadastro_profissional.php">
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-7">
									<label for="nome">Nome</label>
									<input type="text" class="form-control" required id="nome" name="nome" placeholder="Digite seu nome">
								</div>	
																<div class="col-md-3">
										<label for="data_nascimento">Data de Nacimento</label>
										<input type="date" class="form-control" id="data_nacimento" required name="data_nacimento">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row"> 
								<div class="col-md-4">
										<label for="aula">Qual tipo de aula?</label>
									<select  name="aula" class="form-control text-dark" style="height: 60%;" >
										<option selected disabled hidden>Selecione</option>
										<option value="domicilio">A domicilio</option>
										<option value="local">Local para ter aula</option>
									</select>
							</div>

								<div class="col-md-4">
									<label for="cidade">Cidade</label>
									<input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required name="cidade">
								</div>
								<div class="col-md-4">
									<label for="estado">Oque você quer?</label>
									<select class="form-control text-dark" name="estado" style="height: 60%;">
										<option value="" selected disabled hidden>Selecione</option>
										<option value="aprender">Aprender do zero</option>
										<option value="continuar">Continuar</option>
										<option value="aperfeicoar">Aperfeiçoar</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<label for="telefone">Telefone</label>
									<input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone" required name="telefone">
								</div>
								<div class="col-md-6">
								<label for="whtasapp">Whatsapp</label>
								<input type="text" class="form-control" id="whtasapp" placeholder="Digite seu Whatsapp" required name="whtasapp">
							</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-12">
									<label for="descricao">Descrição</label>
									<textarea class="form-control" id="descricao" placeholder="Descrição adicionais" required name="descricao"></textarea>
								</div>		
							</div>
						</div>
						<input type="submit" class="button_login btn-block"></button>
					</form>
				</div>
			</div>
		</div>
					</div>
				</div>
			</div>
		</div>			
</center>
	   <div class="text-white bg-dark p-2 W-100 footer-bottom text-center">
			<small>&copy; CenterServiçes - 2018</small>
		</div>
	  	  <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>