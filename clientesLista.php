<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
	include 'php/validarLoginAdmin.php';
?>
<?php 
		if(isset($_GET["id_agenda"]) & isset($_GET["alteracao"])){
		require "php/Conexao.php";
		$id_agenda=$_GET["id_agenda"];
		$alteracao=$_GET["alteracao"];
		$queryUpdate = "update agenda set compareceu=".$alteracao." where id_agenda=".$id_agenda;

		$query = "select id_cliente from agenda";
    
    	$resultado = $conexao->query($query);
    	while ($registro=$resultado->fetch_assoc()) {
    		$querySelectNomeU = "select nome from cliente where id_cliente ='".$registro['id_cliente']."'";
        	$resultadoNome = $conexao->query($querySelectNomeU);
        	while($registroNome=$resultadoNome->fetch_assoc()){
        		$nome=$registroNome["nome"];
        	}
    	}
    	$resultadoUpdate=$conexao->query($queryUpdate);
    	if($resultadoUpdate){
    		echo "<script>
			alert('".$nome." teve seu estado de comparecimento alterado');
			window.location.href='resultadoPesquisa.php';
			</script>";
    	}
	}
?>
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
								<li><a href="clientesLista.php">Listar clientes</a></li>
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
	<!-- //banner --> 
	<br>
	<div class="agenda">
		<div class="container">
			<h1 style= "text-align: center;" >Clientes cadastrados no sistema</h1>
			<br>
			<br>
			<table style="color: black; width: 100%;">
				<tr>
					<th style= "text-align: center; 
                            border: 1px solid black;">Cliente</th>
					<th  style= "text-align: center; 
                            border: 1px solid black;">Email</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">Telefone</th>
				</tr>
				<?php
					include_once 'php/mostrarClientesCadastrados.php';
				?>
			</table>
			<h1 style= "text-align: center; margin-top: 4%;" >Clientes que preencheram o formulário de avaliação apenas</h1>
			<br>
			<br>
			<table style="color: black; width: 100%;">
				<tr>
					<th style= "text-align: center; 
                            border: 1px solid black;">Cliente</th>
					<th  style= "text-align: center; 
                            border: 1px solid black;">Email</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">Telefone</th>
				</tr>
				<?php
					include_once 'php/mostrarClientesNaoCadastrados.php';
				?>	
			</table>
			<div style="display:flex;justify-content: center;margin-top: 2%;"> 
			<input type="button" onclick="window.location.href='cadastroSessaoAdmin.php'" value="Voltar" />
		</div>
	</div>
	<?php
		require "footer.php";
	?>