<?php
	$hostname="localhost";
	$user="root";
	$password="";
	$database="cadastrosite";
	$conexao=mysqli_connect($hostname,$user,$password,$database);//realiza a conexao com banco de dados
	if(!$conexao){
		print"falha na conex�o com banco de dados";
	}
?>