<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
session_start();//carrega as sessoes de usuarios
if(isset($_SESSION['profissionais'])) header("location: index.php");//caso o usuario logado tente ir a tela de login ele sera redirecionado a tela inicial novamente.
?>
  <title>Cradastro de Profissionais</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="iconic/font/css/open-iconic-bootstrap.css">
  <link rel="stylesheet" href="css/login.css">

</head>
<body class="fundo">
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-4 col-lg-6"><br/><br/><br/><br/>
			<div class="card-header">
				<p>A Empressa que veio para facilidar a vida de toda população.<br/>
										Vasta Areas de Serviços<br/>
										Vasta Areas de Cursos<br/>
										Vasta Areas de Transportes<br/>
										E muito mais...</p>
			</div>
		</div>
		
		<div class="col-12 col-md-8 col-lg-6" >
			<div class="card" id="CURRICULUM">
				<div class="card-header text-center"><h4>CRIAR UM CURRICULUM</h4></div>
				<center><span class="oi oi-document"></span></center>
				<div class="card-body">
					<form method="post" action="cadastro_profissional.php">
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-3">
									<label for="nome">Nome</label>
									<input type="text" class="form-control" required id="nome" name="nome" placeholder="Digite seu nome">
								</div>
								<div class="col-md-4">
									<label for="endereco">Endereço</label>
									<input type="text" class="form-control" required id="endereco" name="endereco" placeholder="Digite seu Endereço">
								</div>
								<div class="col-md-2">
									<label for="bairro">Bairro</label>
									<input type="text" class="form-control" required id="bairro" name="bairro" placeholder="Digite seu Bairro">
								</div>
								<div class="col-md-3">
									<label for="rg">RG</label>
									<input type="text" class="form-control" placeholder="Digite seu RG" id="rg" required name="rg">
								</div>
								
							</div>
						</div>
						<div class="form-group">
							<div  class="form-row">
								<div class="col-md-6">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Digite seu Email" required name="email" placeholder="Digite seu email">
								</div>
								<div class="col-md-3">
									<label for="cep">CEP</label>
									<input type="text" class="form-control" id="cep" placeholder="Digite seu Cep" required name="cep">
								</div>
								<div class="col-md-3">
										<label for="data_nascimento">Data de Nacimento</label>
										<input type="date" class="form-control" id="data_nacimento" required name="data_nacimento">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row"> 
								<div class="col-md-3">
										<label for="profissao">Area de Profissao</label>
									<select class="form-control text-dark" style="height: 60%;" name="profissao">
										<option value="" selected disabled hidden>Selecione</option>
										<option value="cursos">Cursos</option>
										<option value="reformas_e_construcao">Reformas e construção</option>
										<option value="transportes">Transportes</option>
										<option value="programacao">Programação</option>
										<option value="manutenção_em_geral">Manutenção em geral</option>
										<option value="eletricista">Eletricista</option>
										<option value="organizador_de_evento">Organizador de evento</option>
										<option value="pintor">Pintor</option>
										<option value="musical">Musical</option>
										<option value="artes">Artes</option>
										<option value="informatica">Informatica</option>
										<option value="limpeza_e_Cozinha">Limpeza e Cozinha</option>
									</select>
							</div>
							
								<div class="col-md-3">
									<label for="cidade">Cidade</label>
									<input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required name="cidade">
								</div>
								<div class="col-md-2">
									<label for="estado">Estado</label>
									<select class="form-control text-dark" name="estado" style="height: 60%;">
										<option value="" selected disabled hidden>Selecione</option>
										<option value="mg">MG</option>
									</select>
								</div>
								<div class="col-md-4">
									<label for="nacionalidade">Nacionalidade</label>
									<input type="text" class="form-control" id="nacionalidade" placeholder="Digite sua nacionalidade" required name="nacionalidade">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-4">
									<label for="telefone">Telefone</label>
									<input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone" required name="telefone">
								</div>
								<div class="col-md-4">
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
						<input type="submit" class="button_login btn-block">Registrar-se</button>
					</form>
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