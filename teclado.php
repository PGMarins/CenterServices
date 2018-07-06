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
										<h4 class="card-title mt-5">texto</h4>
										<h6 class="card-subtitle mb-2 text-white">.</h6>				
								</div>
									<div class="card-footer text-center">
									<img class="card-img" src="img/tecladoo.png" alt="musica">
									</div>
						</div>
				<div class="card mb-5">
					<img src="img/.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">formulario </h5>
						<h6 class="card-subtitle mb-2 text-muted">para enviar a mensagem decontratação...</h6>				
					</div>
				<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
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