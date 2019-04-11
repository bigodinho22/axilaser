<?php
	require "Conexao.php";
	$id_horario=$_GET["id_horario"];

	$query1 = "delete from datahora where id_data=".$id_dia;

	$query2 = "delete from datas where id_data=".$id_dia;

	$resultadoDelete1= $conexao->query($query1);
	$resultadoDelete2= $conexao->query($query2);

	if($resultadoDelete2 && $resultadoDelete1 && $resultadoDelete3){
		echo "<script>
			alert('O dia foi apagado com sucesso!');
			window.location.href='../cadastroSessaoAdmin.php';
		</script>";
	}
?>
