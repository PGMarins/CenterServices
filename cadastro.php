<?php

include_once("conecta.php");
	$primeiroNome=$_POST['primeiroNome'];//variaveis 
	$sobrenome=$_POST['sobrenome'];
	$email=$_POST['email'];
	$senha=md5($_POST['senha']);

	$sql="insert into usuarios (nome,sobrenome,email,senha,id_grupo) values('$primeiroNome','$sobrenome','$email','$senha','2')";//comando sql
	$salvar=mysqli_query($conexao,$sql);//executa o comando sql
	if(mysqli_affected_rows($conexao)==1)header("location:login.php");//verifica se cadastrou ou nao
	else header("location:cria.html");
?>