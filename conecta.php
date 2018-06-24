<?php
	$hostname="localhost";
	$user="root";
	$password="";
	$database="cadastrosite";
	$conexao=mysqli_connect($hostname,$user,$password,$database);
	if(!$conexao){
		print"falha na conexão com banco de dados";
	}
?>