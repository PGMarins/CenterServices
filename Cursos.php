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
						<h4 class="card-title">Teclados</h4>
						<h6 class="card-subtitle mb-2 text-muted">Faça aula na sua casa ou em um local de aulas mesmo</h6>
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='teclado.php'">Entre Aqui</button>
				</div>
				<div class="card mb-5">
					<img src="img/bat.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">Curte bateria?</h5>
						<h6 class="card-subtitle mb-2 text-muted">Faça aulas tanto para aprender quanto para aperfeiçoar</h6>
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
				<div class="card mb-5">
					<img src="img/cant.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Cantar é muito bom </h4>
						<h6 class="card-subtitle mb-2 text-muted">Aprenda tecnicas de canto e solte a sua voz</h6>				
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/vi.png" class="card-img-top img-fluid">
					<h4 class="card-title">Aulas de violão</h4>
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">Um dos instrumentos mais popular venha e faça aulas </h6>
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
						<h4 class="card-title">Aprenda a programar PHP</h4>
						<h6 class="card-subtitle mb-2 text-muted">Aprenda do basico ao avançado</h6>				
					</div>
						<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/site.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">Criação de sites</h5>
						<h6 class="card-subtitle mb-2 text-muted">Aprenda a criar sua proprio site ou trabalhar na area</h6>				
					</div>
				<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/and.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Aulas de programação android</h4>
						<h6 class="card-subtitle mb-2 text-muted">Crie aplicativos, jogos...</h6>				
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/pot.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Aprenda a montar e editar as suas fotos do seu gosto</h4>
						<h6 class="card-subtitle mb-2 text-muted">Do basico ao avançado se surpreenda </h6>				
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
						<h4 class="card-title">Linguagem mais procuradas</h4>
						<h6 class="card-subtitle mb-2 text-muted">Aprenda outras linguas para enriquecer seu curriculum</h6>
					</div>
					<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/dan.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h5 class="card-title">Aulas de dança</h5>
						<h6 class="card-subtitle mb-2 text-muted">Todos os tipos de dança, aprenda e encontre o seu balanço</h6>
					</div>
						<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/ard.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Aulas de arduino</h4>
						<h6 class="card-subtitle mb-2 text-muted">Criar projetos e mais....</h6>
					</div>
						<button class="button_busca card-footer" type="button" onclick="location.href='servicos.php'">Entre Aqui</button>
				</div>
			<div class="card mb-5">
					<img src="img/cort.png" class="card-img-top img-fluid">
					<div class="card-body">
						<h4 class="card-title">Aulas de Corte e costura</h4>
						<h6 class="card-subtitle mb-2 text-muted">tecnicas incriveis e novidades..</h6>
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