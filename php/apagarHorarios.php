<?php
	require "Conexao.php";
	$id_horario=$_GET["id_horario"];

	$query1 = "delete from datahora where id_horario_data=".$id_horario;

	$query2 = "delete from agenda where id_horario_data=".$id_horario;

	$resultadoDelete1= $conexao->query($query1);
	$resultadoDelete2= $conexao->query($query2);

	if($resultadoDelete2 && $resultadoDelete1){
		echo "<script>
			alert('O horário foi apagado com sucesso!');
			window.location.href='../cadastroSessaoAdmin.php';
		</script>";
	}
?>
