<?php
	require 'header.php';
?>
	<!-- about -->
	<div class="about " style="z-index:0 !important">
		<div class="container"> 
			<!-- about-section2 -->
			<!-- //about-section2 -->
			<div class="TitleErro">
				<h3 class="agileits-title sub-titleErro" style="color: #666666 !important; font-size: 2.5em !important">
					<?php 
					if(isset($_GET["fototipo"])){
						$fototipo=$_GET["fototipo"];
						$corPelo=$_GET["corPelo"]; 
						$roacutan=$_GET["roacutan"]; 
						$cancerVitiligo=$_GET["cv"];
						$pelo=$_GET["pelo"];

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
							echo "<script language='javascript' type='text/javascript'>
									window.location.href='index.php';
								</script>";
						}
					?></h3>
				<br /> 
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>