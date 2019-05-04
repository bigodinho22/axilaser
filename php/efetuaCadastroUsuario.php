<?php
	session_start();

	$nomeUsuario=$_POST["nomeUsuario"];
	$idadeUsuario=$_POST["idadeUsuario"];
	$emailUsuario=$_POST["emailUsuario"];
	$telefoneUsuario=$_POST["telefoneUsuario"];
	$laser = $_POST["laser"];
	$id_horario = $_POST["horario"];
	$regiao = $_POST["regiao"];

	include_once "conexao.php";

	$queryVerificaEmail = "SELECT email FROM cliente WHERE email = '$emailUsuario'";  

	$resultado8 = $conexao->query($queryVerificaEmail);

	if($resultado8->num_rows>0){

		echo "<script language='javascript' type='text/javascript'> alert('Esse e-mail já está cadastrado'); window.location.href='../laserGratis';</script>";

	}else{	
		if($id_horario=="invalido"){
			echo "<script language='javascript' type='text/javascript'> alert('Insira um horário válido'); window.location.href='../laserGratis';</script>";
		}
		if($laser=="Sim"){
			$queryInserirUsuario ="INSERT INTO cliente VALUES (NULL, '$nomeUsuario', $idadeUsuario, '$emailUsuario', '$telefoneUsuario', NULL);";
			$resultado9=$conexao->query($queryInserirUsuario);
			echo "<script language='javascript' type='text/javascript'> window.location.href='../jaFezLaser.php'; </script>";

		}else{
			$queryInserirUsuario ="INSERT INTO cliente VALUES (NULL, '$nomeUsuario', $idadeUsuario, '$emailUsuario', '$telefoneUsuario', null);";

			$resultado9=$conexao->query($queryInserirUsuario);	

			$querySelectID="select id_cliente from cliente where email='".$emailUsuario."'";
			$resultadoSelectID=$conexao->query($querySelectID);
			while($rowId=$resultadoSelectID->fetch_assoc()){	 
				$idUsuario=$rowId["id_cliente"];
			}
			$queryAgenda = "INSERT INTO agenda VALUES (NULL,'".$idUsuario."', NULL,'".$id_horario."', '".$regiao."', NULL, 0)";

			$queryDataHora="UPDATE datahora SET agendada=1 WHERE id_horario_data=$id_horario;";

		    $resultado = $conexao->query($queryAgenda);

		    $resultado3 = $conexao->query($queryDataHora);
		    
		    if(!(($resultado)&($resultado9)&($resultado3))){
		    	echo "<script language='javascript' type='text/javascript'>alert('Ocorreu um erro durante seu agendamento'); window.location.href='../laserGratis';</script>";

	   		}
	   	}
	}
?>

<a href="../index">clique aqui para retornar, nessa tela vai ficar a arte! </a>