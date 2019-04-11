<?php
	session_start();

	$nomeUsuario=$_POST["nomeUsuario"];
	$emailUsuario=$_POST["emailUsuario"];
	$telefoneUsuario=$_POST["telefoneUsuario"];
	$laser = $_POST["laser"];

	include_once "conexao.php";

	$queryVerificaEmail = "SELECT email FROM cliente WHERE email = '$emailUsuario'";  

	$resultado8 = $conexao->query($queryVerificaEmail);

	if($resultado8->num_rows>0){

		echo "<script language='javascript' type='text/javascript'> alert('Esse e-mail já está cadastrado'); window.location.href='../cadastro.php';</script>";

	}else{
			$queryInserirUsuario ="INSERT INTO cliente VALUES (NULL, '$nomeUsuario', '$emailUsuario', '$telefoneUsuario', NULL);";

			$resultado9=$conexao->query($queryInserirUsuario);

			$querySelectIdUsuario = "SELECT id_cliente FROM cliente WHERE email = '$emailUsuario'";

			$resultado10=$conexao->query($querySelectIdUsuario);

			while($registro = $resultado10->fetch_assoc()){
				$idUsuario = $registro["id_cliente"];
			}

			if($laser=="Sim"){

				echo "<script language='javascript' type='text/javascript'> alert('Desculpe! Só realizamos o laser grátis para aqueles que nunca fizeram!'); window.location.href='../index.php'; </script>";

			}else{
				$_SESSION["nomeUsuario"] = $nomeUsuario;
				$_SESSION["emailUsuario"] = $emailUsuario;
				$_SESSION["telefoneUsuario"] = $telefoneUsuario;

				echo "<script language='javascript' type='text/javascript'> alert('Cadastro realizado com sucesso!'); window.location.href='../cadastroUsuario.php?idUsuario=$idUsuario';</script>";
			}
		}
?>