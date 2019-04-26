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

					$fototipo=$_GET["fototipo"];
					$corPelo=$_GET["corPelo"]; 
					$roacutan=$_GET["roacutan"]; 
					$cancerVitiligo=$_GET["cv"];
					$pelo=$_GET["pelo"];

					if($roacutan!=1 && $cancerVitiligo!=1 && $corPelo!=1){

						echo "COM BASE EM SUAS INFORMAÇÕES,";

						if($fototipo=="VI"){
							echo "<strong> seu fototipo, </strong>";
						}
						
						if($roacutan==2){
							echo "<strong> o uso do Roacutan, </strong>";
						}

						if($cancerVitiligo==2){
							echo "<strong> o câncer, </strong>";
						}
						if($pelo==1||$pelo==4){
							echo "<strong> a espessura dos seus pelos, </strong>";
						}
						echo "não é/são indicado(s) para o tratamento.";
						if(($pelo==1||$pelo==4) && $fototipo!="VI" && $roacutan!=2 && $cancerVitiligo!=2){
							echo "<h4 style='text-align: center; color: #7b1887; font-size: 23px !important;'><strong>Caso você teve dificuldade em afirmar com <span>precisão</span> a espessura dos seus pelos, aconselhamos uma avaliação presencial</strong></h4>";
						}else{
							echo "<h4 style='text-align: center; color: #7b1887; font-size: 23px !important;'><strong>Aconselhamos uma avaliação presencial caso você tenha ficado com alguma dúvida ao preencher o questionário</strong></h4>";
						}
					}else{
						echo "Infelizmente você não pode realizar as sessões pelos devidos motivos:";
						echo "<h4 style='color: black !important; text-align:center'>A depilação à laser é contraindicada para "
						if($corPelo==1){
							echo "<strong>pelos ruivos, loiros ou brancos<strong>, ";
						}
					
						if($roacutan==1){
							echo "<strong>pessoas que estão tomando Roacutan</strong>, ";
						}

						if($cancerVitiligo==1){
							echo "<strong>pessoas que estão diagnosticadas com câncer ou vitiligo</strong>, ";
						}
						echo "para mais informações, entre em contato conosco</h4>";
					}

				}else{
					echo "NÃO PODEMOS REALIZAR SUA SESSÃO DE LASER GRÁTIS!";
					echo "<h4 style='color: black !important;'>Não podemos seguir com o seu agendamento, pois o laser grátis é uma sessão de experiência que proporcionamos para quem nunca fez depilação a laser antes.<strong> Clique no botão abaixo para conhecer nossos programas.</strong></h4><br><br><br>

						<a href='nossosProgramas.php' class='bnrw3-agiletext' id='btnErroLaser' >Nossos Programas</a>";
				}?></h3>

				<br /> 
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>