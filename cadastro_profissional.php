<?php

include_once("conecta.php");
	$nome=$_POST['nome']; //variaveis que pegam as informações da area de cadastro.
	$rg=$_POST['rg'];
	$email=$_POST['email'];
	$data_nascimento=$_POST['data_nascimento'];
	$profissao=$_POST['	profissao'];
	$cidade=$_POST['cidade'];
	$estado=$_POST['estado'];
	$telefone=$_POST['telefone'];
	$whtasapp=$_POST['whtasapp'];
	$bairro=$_POST['bairro'];
	$cep=$_POST['cep'];
	$nacionalidade=$_POST['nacionalidade'];
	$descricao=$_POST['descricao'];
	$endereco=$_POST['endereco'];
	$sql="insert into profissionais (nome,email,profissao,data_nascimento,rg,cidade,estado,descricao,telefone,whtasapp,bairro,cep,endereco,nacionalidade) values('$nome','$email','$profissao','$data_nascimento','$rg','$cidade','$estado','$descricao','$telefone','$whtasapp','$bairro','$cep','$endereco','$nacionalidade')"; //comando sql para consulta
	$salvar = mysqli_query($conexao,$sql); //função que realiza a execução da consulta
	if(mysqli_affected_rows($conexao)==1)header("location:index.php"); //verifica se a conexao obteve sucesso
	else header("location:criaprof.php");
?>
