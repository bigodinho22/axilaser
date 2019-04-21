<?php
	session_start();

	$nomeUsuario=$_POST["nomeUsuario"];
	$idadeUsuario=$_POST["idadeUsuario"];
	$emailUsuario=$_POST["emailUsuario"];
	$telefoneUsuario=$_POST["telefoneUsuario"];
	$laser = $_POST["laser"];

	include_once "conexao.php";

	$queryVerificaEmail = "SELECT email FROM cliente WHERE email = '$emailUsuario'";  

	$resultado8 = $conexao->query($queryVerificaEmail);

	if($resultado8->num_rows>0){

		echo "<script language='javascript' type='text/javascript'> alert('Esse e-mail já está cadastrado'); window.location.href='../cadastro.php';</script>";

	}else{	

		if($laser=="Sim"){

			echo "<script language='javascript' type='text/javascript'> window.location.href='../erroForm?laser=1'; </script>";

		}else{
			$_SESSION["nomeUsuario"] = $nomeUsuario;
			$_SESSION["idadeUsuario"] = $idadeUsuario;
			$_SESSION["emailUsuario"] = $emailUsuario;
			$_SESSION["telefoneUsuario"] = $telefoneUsuario;

			echo "<script language='javascript' type='text/javascript'> alert('Cadastro realizado com sucesso!'); window.location.href='../cadastroUsuario.php';</script>";
			}
		}
?>