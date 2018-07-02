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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="iconic/font/css/open-iconic-bootstrap.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body class="fundo">
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-4 col-lg-5 mt-5">
			<p>A Empressa que veio para facilidar a vida de toda população.<br/>
									Vasta Areas de Serviços<br/>
									Vasta Areas de Cursos<br/>
									Vasta Areas de Transportes<br/>
									E muito mais...</p>
		</div>
		<div class="col-12 col-md-8 col-lg-7 offset-md-0 offset-lg-5">
			<div class="card" style="margin-top:1;">
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
									<input type="text" class="form-control" required id="endereco" name="nome" placeholder="Digite seu Endereço">
								</div>
								<div class="col-md-2">
									<label for="bairro">Bairro</label>
									<input type="text" class="form-control" required id="bairro" name="nome" placeholder="Digite seu Bairro">
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
									<input type="text" class="form-control" id="cep" placeholder="Digite seu Cep" required name="rg">
								</div>
								<div class="col-md-3">
										<label for="data_nascimento">Data de Nacimento</label>
										<input type="date" class="form-control" id="data_nascimento" required name="data_nascimento">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row"> <!--classe linha bootstrap -->
								<div class="col-md-3">
										<label for="profissao">Area de Profissao</label>
									<select class="form-control text-dark" style="height: 60%;">
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
									<input type="text" class="form-control" id="nacionalidade" placeholder="Digite sua nacionalidade" required name="rg">
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
								<input type="text" class="form-control" id="whtasapp" placeholder="Digite seu Whatsapp" required name="whats">
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
						<button class="button_login btn-block">Registrar-se</button>
					</form>
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