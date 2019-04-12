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
				echo $registros["horarioF"]." : ";
				$verifica+=1;
			}
		}
		if($verifica==1){
		echo "é um horário agendado, você deseja apagar mesmo assim? Entre em contato com o cliente para avisa-lo!')){
		window.location.href='php/apagarDia.php?id_data=$id_horario';
		}else{
			window.location.href='cadastroSessaoAdmin.php';
		}";
		}else{
			echo "Você deseja realmente apagar esse horario?')){
		}
		window.location.href='php/apagarHorario.php?id_horario=$id_horario';
		}else{
			window.location.href='cadastroSessaoAdmin.php';
		}";
		};
		echo "</script>";
	}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Axilaser | Home</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fit&Spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<link rel="stylesheet" href="css/jquery-ui.css" /> <!-- Calendar-CSS -->
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico" />
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="picker/jquery-ui.multidatespicker.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<!-- //web-fonts --> 
<link rel="stylesheet" type="text/css" href="css/login.css">
</head> 
	<!-- banner -->    
		<!-- header --> 
		<div class="w3header">
			<div class="navCor">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
							<ul class="nav navbar-nav navbar-right">
								<li><a href="cadastroSessaoAdmin.php">Cadastrar Sessão</a></li>
								<li><a href="indexAdmin.php">Agenda</a></li>
								<li><a href="php/sair.php"><i class="glyphicon glyphicon-log-out"></i>  Sair</a></li>
							</ul> 
							<div class="clearfix"> </div>	
						</div>
					</nav>
				</div>  
			</div>
			<h1><a href="index.php" id="logo"><img src="images/logo"></a></h1>
		</div>
		<!-- //header -->  
	</div>	 
	<div class="cadastroSessao">
		<div class="container">
			<br>
			<h2 class="agileits-title">Cadastro de Sessões</strong></h2>
			<br>
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formCadastroSessao">
					<form action="php/inserirDatasDisponiveis.php" method="post">
						<span>
							<i>Datas Disponíveis:</i>
							<input type="text" class="data" id="datepicker" name="data" placeholder="" required="">
						</span>
						<div class="w3_submit">
							<input type="submit" value="Adicionar Datas">
						</div>
					</form>
					<table>
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
	<?php
		require 'footer.php';
	?>