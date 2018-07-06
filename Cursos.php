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
<body>
   	<?php include "navbar.php"; ?>
	  <div class="card-header">
	 <center><img src="img/.png" class="img-fluid"></center>
	   <center> <div class="col-12 col-lg-9">
				<div class="card-deck text-center mt-5">
				<div class="card mb-5">
					<img src="img/tec.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Cursos</h4>
						<h6 class="card-subtitle mb-2 text-muted">Encontre a sua area e aprenda</h6>
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='teclado.php'">Entre Aqui</button>
				</div>
				<div class="card mb-5">
					<img src="img/bat.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">Desde reformas a grandes contrução</h5>
						<h6 class="card-subtitle mb-2 text-muted">Profissionais capacitados perto de você, entre e encontre oque precisa</h6>
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
				<div class="card mb-5">
					<img src="img/cant.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Transpotes</h4>
						<h6 class="card-subtitle mb-2 text-muted">Marcar horario com taxi, Moto Taxi, Moto boy, Aluguel de veiculo entre outros...</h6>				
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/vi.png" class="card-img-top img-fluid">
					<h4 class="card-title">Programadores</h4>
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">PHP, Android,c++, josgos, app, entre outros... </h6>
					</div>
						<button class="button_busca card-footer" type="button" onclick="location.href='programadores.php'">Entre Aqui</button>
			</div>
				</div>
            </div> 
			  <div class="col-12 col-lg-9">
                 <div class="card-deck text-center">
				<div class="card mb-5">
					<img src="img/php.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Manutenção em Geral</h4>
						<h6 class="card-subtitle mb-2 text-muted">Pequenas reformas, consertos, e mais...</h6>				
					</div>
						<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/site.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">Eletricista</h5>
						<h6 class="card-subtitle mb-2 text-muted">Pequenas instalação, trocas de peças, grandes instalação e mais...</h6>				
					</div>
				<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/and.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Em todas areas</h4>
						<h6 class="card-subtitle mb-2 text-muted">Aniversarios, festas, Shows, entre outros...</h6>				
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/pot.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Pintor</h4>
						<h6 class="card-subtitle mb-2 text-muted">Desde pequenas a grandes pinturas</h6>				
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
				</div>
           
            </div>
  <div class="col-12 col-lg-9">
			
                 <div class="card-deck text-center">
			<div class="card mb-5">
					<img src="img/ing.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Tudos em musica</h4>
						<h6 class="card-subtitle mb-2 text-muted">Contrate bandas, musicos, produtor musical, aluguel de equipamentos e mais...</h6>
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/dan.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">Artes</h5>
						<h6 class="card-subtitle mb-2 text-muted">Desenhos, esculturas, pinturas e muito mais...</h6>
					</div>
						<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/ard.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Informatica em Geral</h4>
						<h6 class="card-subtitle mb-2 text-muted">Consertos, Formatação, assistencia tecnica, trocas de peças e muitos mais...</h6>
					</div>
						<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/cort.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Limpeza e Cozinha</h4>
						<h6 class="card-subtitle mb-2 text-muted">Faxineiras, cozinheiras, para eventos, festas, aniversarios e mais...</h6>
					</div>
				<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
				</div>
            
            </div>  			
	  </center>
	</div>
		<div class="card-footer  m-0 p-0 text-white bg-dark p-2 W-100 text-center">
			<small>&copy; CenterServiçes - 2018</small>
		</div>
	  	<script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>