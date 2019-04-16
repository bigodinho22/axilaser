<?php
    require 'php/validarLoginAdmin.php';
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
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
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
            <h2 class="agileits-title">Cadastro de Horários</strong></h2>
            <br>
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formCadastroSessao">
                    <form action="php/inserirHorariosDisponiveis.php" method="post">
                        <input type="hidden" name="id_data" value="<?php echo $_GET['id_data']?>">
                        <span>
                            <i>Horários Disponíveis:</i>
                            <input type="text" name="horario" placeholder="" required="">
                        </span>
                        <div class="w3_submit">
                            <input type="submit" value="Adicionar Horários">
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <?php
        require 'footer.php';
    ?>