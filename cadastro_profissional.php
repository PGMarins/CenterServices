<?php

include_once("conecta.php");
	$nome=$_POST['nome']; //variaveis que pegam as informações da area de cadastro.
	$rg=$_POST['rg'];
	$email=$_POST['email'];
	$data_nascimento=$_POST['data_nascimento'];
	$profissao=$_POST['profissao'];
	$cidade=$_POST['cidade'];
	$estado=$_POST['estado'];
	$telefone=$_POST['telefone'];
	$whats=$_POST['whats'];
	$descricao=$_POST['descricao'];

	$sql="insert into profissionais (nome,rg,email,data_nascimento,profissao,cidade,estado,telefone,whtasapp,descricao) values('$nome','$rg','$email','$data_nascimento','$profissao','$cidade','$estado','$telefone','$whats','$descricao')"; //comando sql para consulta
	$salvar=mysqli_query($conexao,$sql); //função que realiza a execução da consulta
	if(mysqli_affected_rows($conexao)==1)header("location:index.php"); //verifica se a conexao obteve sucesso
	else header("location:criaprof.html");
?>