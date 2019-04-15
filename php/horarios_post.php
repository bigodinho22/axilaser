<?php include_once "Conexao.php";

	$id_data = $_REQUEST['id_data'];
	
	$queryHorario = "SELECT agendada,id_horario_data, TIME_FORMAT(horario, '%H:%i') as horarioF FROM datahora WHERE id_data=$id_data ORDER BY horario ASC";
	$resultadoHorario = $conexao->query($queryHorario);
	if($resultadoHorario->num_rows>0){
		while ($rowHorario = $resultadoHorario->fetch_assoc() ) {
			if($rowHorario['agendada']!=1){
				$horarios[] = array(
					'id' => $rowHorario['id_horario_data'],
					'horario' => $rowHorario['horarioF'],
				);	
			}
		}
	}else{
		$horarios[] = array(
					'id' => 'invalido',
					'horario' => 'Este dia não possui horários disponíveis',
				);	
	}
	
	echo(json_encode($horarios));
