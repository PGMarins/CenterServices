<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
session_start();//carrega as sessoes de usuarios
if(isset($_SESSION['usuario'])) header("location: index.php");//caso o usuario logado tente ir a tela de login ele sera redirecionado a tela inicial novamente.
?>
  <title>Login</title>
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
</style>
<?php
if(isset($_GET['msg'])) $modal = $_GET['msg'];//verifica se existe alguma menssagem no login
else $modal = 0;
if($modal == 1){//essa função chama o modal caso o usuario nao esteja cadastrado.
$pagina = <<<EOPAGE
<script language="javascript">
	window.onload = function(){// carrega o modal ao carregar a pagina 
		$('.bd-example-modal-sm').modal('show');// exibe o modal 
		setTimeout(function(){//conta tempo de 3 segundo para fechar o modal
			$('.bd-example-modal-sm').modal('hide');}, 3000);
	}
</script>
EOPAGE;
echo $pagina;
}
?>
<body class="fundo">
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content text-light bg-danger">
	<div class="modal-body text-center">
      Usuario ou senha incorreto
	  </div>
    </div>
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 col-md-9 col-lg-6 offset-0">
			<div class="card">
				<div class="card-header text-center"><h4>LOGIN</h4></div>
				<center><span class="oi oi-person"></span></center>
				<div class="card-body">
					<form method="post" action="logar.php">
						<div class="form-group">
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
						<div class="card-footer text-center">
							<a href="recuperar.html" class="d-block small mt-3">Esqueceu a senha?</a>
							<a href="cria.html" class="d-block small">Criar uma conta</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

    </body>
</html>