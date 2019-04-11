<?php
	require "Conexao.php";
	$id_dia=$_GET["id_data"];

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
	/*Codigo do confirm:
	 
	<?php
		require "Conexao.php";
		$id_dia=$_GET["id_data"];

		$query1 = "select agendada,TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_data".$id_dia;

		$resultado = $conexao->query($query1);
		echo "<script>
			if(confirm('"
		while($registros = $resultado->fetch_assoc()){
			if($registros["agendada"]==1){
				echo "O horário $registro['horarioF'] esta agendado. /n";
			}
		}
		echo "Você deseja apagar mesmo assim? entre em contato com os clientes para avisa-los!')){
		window.location.href='apagarDia.php?id_data=$id_dia';
		}";
	?>




	*/
?>
