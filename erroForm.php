<?php
	require 'header.php';
?>
	<!-- about -->
	<div class="about ">
		<div class="container"> 
			<!-- about-section2 -->
			<!-- //about-section2 -->
			<div class="TitleErro">
				<h3 class="agileits-title sub-titleErro">Ops! Temos um problema </h3>
				<h4>Infelizmente você não pode realizar as sessões pelos devidos motivos:</h4>
				<br /> 
				<?php
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
						echo "<p>Como você já utilizou Roacutan durante a sua vida, é necesário realizar alguns exames, venha em nossa agência para podermos lhe atender melhor.</p>";
					}
					if($cancerVitiligo==1){
						echo "<p>Se você esta diagnosticado com câncer ou vitiligo, não é possível realizar a depilação a laser.</p>";
					}
					if($cancerVitiligo==2){
						echo "<p>Se você já teve câncer, é necessário realizar alguns exames para sabermos se é possível ou não realizar os procedimentos, venha em nossa agência que iremos lhe atender melhor.</p>";
					}
				?>
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>