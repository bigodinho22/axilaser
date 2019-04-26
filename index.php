<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Axilaser</title> 
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
<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '238190663781713'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=238190663781713&ev=PageView
	&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head> 
	<!-- banner --> 
	 
		<!-- header --> 
		<?php 
			require "whatsapp.php";
		?>
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
								<li><a href="index">Home</a></li>
								<li><a href="nossosProgramas">Nossos Programas</a></li>
								<li><a href="depilacaoALaser">Depilação a Laser</a></li>  
					            <li><a href="preAvaliacao" class="corPreAvaliacao">Pré Avaliação</a></li>
								<li><a href="#contato">Contato </a></li>
								<li><a href="laserGratis" id="btnLaserGratisMenu">Laser Grátis</a></li>
								<li><a href="login">Login</a></li>
							</ul> 
							<div class="clearfix"> </div>	
						</div>
					</nav>
				</div>  
			</div>
			<h1><a href="index" id="logo"><img src="images/logo.png"></a></h1>
		</div>
		<div class="video jarallax" data-vide-bg="videos/laser">
		<!-- //header --> 
			<!-- banner-text -->
			<div class="banner-w3ltext page-header__content w3layouts">  
				<div class="text-bg">  
					<svg>
						<defs>
							<mask id="mask" x="0" y="0" width="100%" height="100%">
								<rect id="alpha" x="0" y="0" width="100%" height="100%"/>
								<text id="title1" x="50%" y="15%" dy="1em" letter-spacing="0.02em">Axilaser </text>
							</mask>  
						</defs>
						<rect id="base" x="0" y="0" width="100%" height="100%" mask="url(#mask)"/> 
					</svg>     
				</div>
				<div class="indexBotaoText">
					<div class="container"> 
					    <h3 class="agileits-title" id="titleIndex">AGENDE O SEU LASER GRÁTIS!</h3>	 
						<a href="laserGratis.php" class="bnrw3-agiletext" id="btnPrincipal">AGENDAR AGORA!</a>
					</div>
				</div>
			</div>     
			<!-- //banner-text -->  	
		</div>	
	<!-- //banner --> 
	<!-- services -->
		<div class="services" id="programas">
			<div class="container">
				<h3 class="agileits-title w3title2" id="titleNossosProgramas">NOSSOS PROGRAMAS</h3> 
				<br>
				<div class="col-md-6 col-sm-6 col-xs-6 services-grids" id="btnClubeAxiPrincipal">  
					<a href="nossosProgramas.php"> 
						<h4>Programa CLUBE AXI</h4>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 services-grids" id="btnAxiBlackPrincipal">
						<a href="nossosProgramas.php">
							<h4>Tratamento Tradicional</h4>
						</a>
				</div> 
			</div>	 
		</div>
		<div id="beneficios">
			<div class="container">
			</div>
		</div>
	<!-- //services --> 
	<div id="sobre">
		<div class="container">
			<h3 class="agileits-title" id="titQuemSomos" > QUEM SOMOS NÓS?</h3> 
			<br>
			<div class="testeFlex">
				<div class="col-md-6">
					<p id="quemSomos">A Axilaser iníciou sua história através da Fisioterauta Dermatofuncional Jeisianny Carvalho e seu esposo 
					com espírito empreendedor Erik Salles.
					Nascida com o objetivo em oferecer o que há de melhor em tecnologia de Depilação a Laser, a <strong>AXILASER</strong> esta no mercado para proporcionar ao seus clientes a <strong>LIBERDADE</strong> sem perder <strong>QUALIDADE</strong>.</p>
				</div>
				<div class="col-md-6">
					<video src="videos/axilaser.mp4" controls id="fotodepil" />
				</div>
			</div>
		</div>
	</div>
			<!-- //about-section2 -->

	<?php
		require "footer.php";
	?>