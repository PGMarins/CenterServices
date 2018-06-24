<?php
	session_start(); //cria uma sessao de usuario
	include "conecta.php";//inclue o arquivo de conexao com banco de dados
	if(empty($_POST['email'])) header("location: login.php");//verifica se foram passados os dados de email ou senha
	if(empty($_POST['senha'])) header("location: login.php");
	
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);//variavel captura a senha e criptografa a mesma para postar no banco de dados
	
	$sql = "select * from usuarios where email like '$email' and senha like '$senha'";//selecionando todos os campos de usuarios
  	$consulta = mysqli_query($conexao,$sql);//executa a consulta no banco de dados
  	$registros = mysqli_num_rows($consulta); //retorna o numero de registro encontrados
	
	if($registros==0) header("location: login.php?msg=1");//verifica se foram encontrados usuarios, caso tenha sido encontrado o usuario sera redirecionado para pagina inicial com sucesso,  caso nao tenha sido encontrado registros o usuario sera redirecionado para pagina de login novamente
	else{
		while($exibe = mysqli_fetch_assoc($consulta)){
			$_SESSION['usuario'] = $exibe["nome"];//coloca o nome de usuario encontrado em uma sessao 
		}
		 header("location: index.php");
	}
?>