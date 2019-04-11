<?php
	$servidor = "localhost";
	$usuario = "root";
	$senhaConexao = "";
	$banco = "axilaser";

	$conexao = new mysqli ($servidor, $usuario, $senhaConexao, $banco);

	$conexao->set_charset("utf8");
	
	if($conexao->connect_error){
		die("Falha na conexão: ".$conexao->connect_error);
	}else{
		//echo "Conectado com sucesso! <br>";
	}
?>