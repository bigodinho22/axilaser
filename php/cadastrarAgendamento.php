<?php
	session_start();

	$data = $_POST["data"];
	$id_horario = $_POST["horario"];
	$regiao = $_POST["regiao"];
	$senhaUsuario=md5($_POST["senhaUsuario"]);
	$verificaSenhaUsuario=md5($_POST["verificaSenhaUsuario"]);
	$idUsuario = $_POST["idUsuario"];

	include_once "conexao.php";
	if($senhaUsuario == $verificaSenhaUsuario){

		$query = "INSERT INTO agenda VALUES (NULL,'".$idUsuario."', NULL,'".$id_horario."', '".$regiao."', NULL, 0)";

		$querySenha ="UPDATE cliente SET senha='$senhaUsuario' WHERE id_cliente='$idUsuario';";

		$queryAgendamento="UPDATE datahora SET agendada=1 WHERE id_horario_data=$id_horario;";

	    $resultado = $conexao->query($query);

	    $resultado2 = $conexao->query($querySenha);

	    $resultado3 = $conexao->query($queryAgendamento);
	    
	    if(($resultado)&($resultado2)&($resultado3)){
	    	echo "<script language='javascript' type='text/javascript'>alert('Agendamento realizado com sucesso!'); window.location.href='../login.php';</script>";

	    }

	}else{
		unset ($_SESSION["nomeUsuario"]);
		unset ($_SESSION["emailUsuario"]);
		unset ($_SESSION["telefoneUsuario"]);
		unset ($_SESSION["senhaUsuario"]);
		unset ($_SESSION["idUsuario"]);
		unset ($_SESSION["logado"]);

		echo "<script language='javascript' type='text/javascript'> alert('Senhas diferentes!'); window.location.href='../cadastroUsuario.php?idUsuario=$idUsuario';</script>";
	}
?>
