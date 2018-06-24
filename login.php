<?php
	include "conecta.php";
	if(empty($_POST['email'])) header("location: login.html");
	if(empty($_POST['senha'])) header("location: senha.html");
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$sql = "select * from usuarios where email like '$email' and senha like '$senha'";//selecionando todos os campos de usuarios
  	$consulta = mysqli_query($conexao,$sql);
  	$registros = mysqli_num_rows($consulta);
	
	if($registros==0) header("location: login.html");
	else header("location: index.html");

?>