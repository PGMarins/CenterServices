<?php

include_once("conecta.php");
	$primeiroNome=$_POST['primeiroNome'];
	$sobrenome=$_POST['sobrenome'];
	$email=$_POST['email'];
	$senha=md5($_POST['senha']);

	$sql="insert into usuarios (nome,sobrenome,email,senha) values('$primeiroNome','$sobrenome','$email','$senha')";
	$salvar=mysqli_query($conexao,$sql);
	if(mysqli_affected_rows($conexao)==1)header("location:login.php");
	else header("location:cria.html");
?>