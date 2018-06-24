<?php
	session_start();
	include "conecta.php";
	if(empty($_POST['email'])) header("location: login.php");
	if(empty($_POST['senha'])) header("location: login.php");
	
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	
	$sql = "select * from usuarios where email like '$email' and senha like '$senha'";//selecionando todos os campos de usuarios
  	$consulta = mysqli_query($conexao,$sql);
  	$registros = mysqli_num_rows($consulta);
	
	if($registros==0) header("location: login.php");
	else{
		while($exibe = mysqli_fetch_assoc($consulta)){
			$_SESSION['usuario'] = $exibe["nome"];
		}
		 header("location: index.php");
	}
?>