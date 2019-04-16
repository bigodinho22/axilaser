<?php
	require 'header.php';
?>
	<!-- about -->
	<div class="about " style="z-index:0 !important">
		<div class="container"> 
			<!-- about-section2 -->
			<!-- //about-section2 -->
			<div class="TitleErro">
				<h3 class="agileits-title sub-titleErro" style="color: #666666 !important"><?php if(!isset($_GET["laser"])){
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
						echo "<p style='color: black !important'>Não é possível realizar a depilação a laser com o seu fototipo.</p>";
					}
					if($corPelo==1){
						echo "<p style='color: black !important'>Não é possível realizar a depilação a laser com a coloração dos seus pelos, eles devem ser castanhos ou pretos. </p>";
					}
					if($roacutan==1){
						echo "<p style='color: black !important'>Não é possível realizar a depilação a laser se você está tomando Roacutan.</p>";
					}
					if($roacutan==2){
						echo "<p style='color: black !important'>Se você já utilizou Roacutan, é necesário realizar uma avaliação presencial. <strong>Entre em contato utilizando as informações do rodapé da página para agendar a avaliação.</strong></p>";
					}
					if($cancerVitiligo==1){
						echo "<p style='color: black !important'>Se você esta diagnosticado com câncer ou vitiligo, não é possível realizar a depilação a laser.</p>";
					}
					if($cancerVitiligo==2){
						echo "<p style='color: black !important'>Se você já teve câncer, é necessário realizar uma avaliação presencial. <strong>Entre em contato utilizando as informações do rodapé da página para agendar a avaliação.</strong></p>";
					}
					if($pelo==1){
						echo "<p style='color: black !important'>Como o pelo da região que você deseja fazer a depilação a laser é fino, é necessário realizar uma avaliação presencial. <strong>Entre em contato utilizando as informações do rodapé da página para agendar a avaliação.</strong></p>";
					}
				}else{
					echo "<p style='color: black !important; text-align: center;'>Não podemos seguir com o seu agendamento, pois o laser grátis é uma sessão de experiência que proporcionamos para quem nunca fez depilação a laser antes.<br><strong>Clique no botão abaixo para conhecer nossos programas.</strong></p><br><br><br>

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