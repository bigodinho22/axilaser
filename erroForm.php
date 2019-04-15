<?php
	require 'header.php';
?>
	<!-- about -->
	<div class="about ">
		<div class="container"> 
			<!-- about-section2 -->
			<!-- //about-section2 -->
			<div class="TitleErro">
				<h3 class="agileits-title sub-titleErro"><?php if(!isset($_GET["laser"])){
					echo "Infelizmente você não pode realizar as sessões pelos devidos motivos:";
				}else{
					echo "Não podemos realizar sua sessão de laser grátis";
				}?></h3>
				<br /> 
				<?php
				if(!isset($_GET["laser"])){
					$fototipo=$_GET["fototipo"];
					$corPelo=$_GET["corPelo"]; 
					$roacutan=$_GET["roacutan"]; 
					$cancerVitiligo=$_GET["cv"];
					if($fototipo=="VI"){
						echo "<p>Não é possível realizar a depilação com o seu fototipo, esperamos que compreenda. </p>";
					}
					if($corPelo==1){
						echo "<p>Não é possível realizar a depilação com a coloração dos seus pelos, eles devem ser castanhos ou pretos. </p>";
					}
					if($roacutan==1){
						echo "<p>Não é possível realizar a depilação se você está tomando Roacutan.</p>";
					}
					if($roacutan==2){
						echo "<p>Como você já utilizou Roacutan durante a sua vida, é necesário realizar uma avaliação presencial, entre em contato com a nossa clínica pelos dados no rodapé para maiores informações.</p>";
					}
					if($cancerVitiligo==1){
						echo "<p>Se você esta diagnosticado com câncer ou vitiligo, não é possível realizar a depilação a laser.</p>";
					}
					if($cancerVitiligo==2){
						echo "<p>Se você já teve câncer, é necessário realizar uma avaliação presencial para sabermos se é possível ou não realizar os procedimentos, entre em contato conosco pelos dados no rodapé para maiores informações.</p>";
					}
				}else{
					echo "<p>Não podemos seguir com o seu agendamento, pois o laser grátis é uma sessão de experiência que proporcionamos para quem nunca fez depilação a laser antes.<br />
						<a href='programas.php'>Clique aqui para conhecer os nossos programas</a>
					</p>";
				}
				?>
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>