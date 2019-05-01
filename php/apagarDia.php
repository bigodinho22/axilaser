<?php
	require "Conexao.php";
	$id_dia=$_GET["id_data"];
	$querySelect="select id_horario_data from datahora where id_data=".$id_dia;
	$resultadoSelect= $conexao->query($querySelect);
	while($select = $resultadoSelect->fetch_assoc()){
		$queryDelete= "delete from agenda where id_horario_data=".$select["id_horario_data"];
		$resultadoDelete=$conexao->query($queryDelete);
		if(!$resultadoDelete){
			echo "<script>
				alert('Erro');
				window.location.href='cadastroSessaoAdmin.php';
			</script>";
			break;
		}
	}
	$query1 = "delete from datahora where id_data=".$id_dia;
	$query2 = "delete from datas where id_data=".$id_dia;
	$resultadoDelete1= $conexao->query($query1);
	$resultadoDelete2= $conexao->query($query2);
	if($resultadoDelete2 && $resultadoDelete1){
		echo "<script>
			alert('O dia foi apagado com sucesso!');
			window.location.href='../cadastroSessaoAdmin.php';
		</script>";
	}

?>