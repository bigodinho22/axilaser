<?php
	require 'php/validarLoginAdmin.php';
	if(isset($_GET["id_data"])){
		require "php/Conexao.php";
		$id_dia=$_GET["id_data"];
		$verifica=0;
		$query1 = "select agendada,TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_data=".$id_dia;

		$resultado = $conexao->query($query1);
		echo "<script>
			if(confirm('";
		while($registros = $resultado->fetch_assoc()){
			if($registros["agendada"]==1){
				echo $registros["horarioF"].", ";
				$verifica+=1;
			}
		}
		if($verifica==1){
		echo "é um horário agendado, você deseja apagar mesmo assim? Entre em contato com o cliente para avisa-lo!')){
		window.location.href='php/apagarDia.php?id_data=$id_dia';
		}else{
			window.location.href='cadastroSessaoAdmin.php';
		}";
		}
		if($verifica>1){
			echo "são horários agendados, você deseja apagar mesmo assim? Entre em contato com os clientes para avisa-los!')){
		window.location.href='php/apagarDia.php?id_data=$id_dia';
		}else{
			window.location.href='cadastroSessaoAdmin.php';
		}";
		}
		if($verifica==0){
			echo "Você deseja realmente apagar esse dia?')){
				window.location.href='php/apagarDia.php?id_data=$id_dia';
		}else{
			window.location.href='cadastroSessaoAdmin.php';
		}";
		};
		echo "</script>";
	}
	if(isset($_GET["id_horario"])){
		require "php/Conexao.php";
		$id_horario=$_GET["id_horario"];
		$verifica=0;
		$query1 = "select agendada,TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_horario_data=".$id_horario;

		$resultado = $conexao->query($query1);
		echo "<script>
			if(confirm('";
		while($registros = $resultado->fetch_assoc()){
			if($registros["agendada"]==1){
				echo $registros["horarioF"]." ";
				$verifica+=1;
			}
		}
		if($verifica==1){
		echo "é um horário agendado, você deseja apagar mesmo assim? Entre em contato com o cliente para avisa-lo!')){
		window.location.href='php/apagarHorarios.php?id_horario=$id_horario';
		}else{
			window.location.href='cadastroSessaoAdmin.php';
		}";
		}else{
			echo "Você deseja realmente apagar esse horario?')){
				window.location.href='php/apagarHorarios.php?id_horario=$id_horario';
		}else{
			window.location.href='cadastroSessaoAdmin.php';
		}";
		};
		echo "</script>";
	}
?>
<?php
	include 'php/headerAdmin.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--> 
	<script>
	function mouseOver(i) {
	  document.getElementById('opcoes'+i).style.display = 'block';
	}

	function mouseOut(i) {
	  document.getElementById('opcoes'+i).style.display = 'none';
	}
</script>
	<div class="cadastroSessao">
		<div class="container">
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formCadastroSessao">
					<h2 class="agileits-title" style="color: #666666">Cadastro de Sessões</strong></h2>
					<form action="php/inserirDatasDisponiveis.php" method="post">
						<span>
							<i>Datas Disponíveis:</i>
							<input type="text" class="data" id="datepicker" name="data" placeholder="" required="">
						</span>
						<div class="w3_submit">
							<input type="submit" value="Adicionar Datas">
						</div>
					</form>
				</div>
				<div class="tabelaAdminDiv">
						<table class="tabelaAdmin">
							<tr>
								<th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Dia</th>
								<th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Horários</th>
	                            <th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Agendamento</th>
	                            <th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Opções</th>
							</tr>
							<?php
								include_once 'php/mostrarDatasDisponiveis.php';
							?>
						</table>
					</div>
		</div>
	</div>
	<script>

	$(function() {
		var diasSemana = [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ];
		var diasFinalSemana = [ "Sunday"];

		$("#datepicker").multiDatesPicker({
			dayNames: [ "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado" ], 
			dayNamesMin: [ "D","S","T","Q","Q","S","S" ], 
			dayNamesShort: ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb","Dom"],
		    monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
		    monthNamesShort: ["Jan","Fev","Mar",'Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		    nextText: "Próximo",
		    prevText: "Anterior", 
		 	minDate:0, 
			maxDate:"+1M", 
			dateFormat: "dd/mm/yy", 
			beforeShowDay: function(data){        
		        var diaSemana = diasSemana[data.getDay()];
		        var isDataFinalSemana = diasFinalSemana.indexOf(diaSemana) != -1;
		        return [!isDataFinalSemana];
		    }
    	});

	});
	</script>
	<?php
		require 'footer.php';
	?>