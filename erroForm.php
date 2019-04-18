<?php
	require 'header.php';
?>
	<!-- about -->
	<div class="about " style="z-index:0 !important">
		<div class="container"> 
			<!-- about-section2 -->
			<!-- //about-section2 -->
			<div class="TitleErro">
				<h3 class="agileits-title sub-titleErro" style="color: #666666 !important; font-size: 2.5em !important"><?php if(!isset($_GET["laser"])){
					echo "INFELIZMENTE VOCÊ NÃO PODE REALIZAR AS SESSÕES PELOS SEGUINTES MOTIVOS:";
				}else{
					echo "NÃO PODEMOS REALIZAR SUA SESSÃO DE LASER GRÁTIS!";
				}?></h3>
				<br /> 
				<?php
				if(!isset($_GET["laser"])){
					$fototipo=$_GET["fototipo"];
					$corPelo=$_GET["corPelo"]; 
					$roacutan=$_GET["roacutan"]; 
					$cancerVitiligo=$_GET["cv"];
					$pelo=$_GET["pelo"];
					if($fototipo=="VI"){
						echo "<h4 style='color: black !important'>Não é possível realizar a depilação a laser com o seu fototipo.<strong> Caso tenha dúvidas, entre em contato utilizando as informações no rodapé da página para agendar a avaliação</strong>. </h4><br>";
					}
					if($corPelo==1){
						echo "<h4 style='color: black !important;'>Não é possível realizar a depilação a laser com a coloração dos seus pelos, eles devem ser castanhos ou pretos. <strong>Recomendamos agendar uma avaliação presencial para uma melhor análise do seu pelo, para isso entre em contato utilizando as informações no rodapé da página</strong>.</h4><br>";
					}
					if($roacutan==1){
						echo "<h4 style='color: black !important; '>Não é possível realizar a depilação a laser se você está tomando Roacutan.<strong> Qualquer dúvida estamos a disposição</strong>.</h4><br>";
					}
					if($roacutan==2){
						echo "<h4 style='color: black !important;'>Se você já utilizou Roacutan, é necesário realizar uma avaliação presencial. <strong>Entre em contato utilizando as informações no rodapé da página para agendar a avaliação.</strong></h4><br>";
					}
					if($cancerVitiligo==1){
						echo "<h4 style='color: black !important; '>Se você esta diagnosticado com câncer ou vitiligo, não é possível realizar a depilação a laser.<strong> Qualquer dúvida estamos a disposição</strong>.</h4><br>";
					}
					if($cancerVitiligo==2){
						echo "<h4 style='color: black !important;'>Se você já teve câncer, é necessário realizar uma avaliação presencial. <strong>Entre em contato utilizando as informações no rodapé da página para agendar a avaliação.</strong></h4><br>";
					}
					if($pelo==1){
						echo "<h4 style='color: black !important;'>Como o pelo da região que você deseja fazer a depilação a laser é fino, é necessário realizar uma avaliação presencial. <strong>Entre em contato utilizando as informações no rodapé da página para agendar a avaliação.</strong></h4><br>";
					}
					if($pelo==4){
						echo "<h4 style='color: black !important;'>Como o pelo da região que você deseja fazer a depilação a laser é muito fino, é necessário realizar uma avaliação presencial. <strong>Entre em contato utilizando as informações no rodapé da página para agendar a avaliação.</strong></h4><br>";
					}

				}else{
					echo "<h4 style='color: black !important;'>Não podemos seguir com o seu agendamento, pois o laser grátis é uma sessão de experiência que proporcionamos para quem nunca fez depilação a laser antes.<strong> Clique no botão abaixo para conhecer nossos programas.</strong></h4><br><br><br>

						<a href='programas.php' class='bnrw3-agiletext' id='btnErroLaser' >Nossos Programas</a>";
				}
				?>
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>