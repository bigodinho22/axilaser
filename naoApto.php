<?php
	require 'header.php';
?>
	<!-- about -->
	<div class="about " style="z-index:0 !important">
		<div class="container"> 
			<!-- about-section2 -->
			<!-- //about-section2 -->
			<div class="TitleErro">
				<h3 class="agileits-title sub-titleErro" id="titleErro">
					<?php 
					if(isset($_GET["roacutan"])){
						$corPelo=$_GET["corPelo"]; 
						$roacutan=$_GET["roacutan"]; 
						$cancerVitiligo=$_GET["cv"];
						echo "Infelizmente você não pode realizar as sessões pelos devidos motivos:";
						echo "<h4 style='color: black !important; text-align:center'>A depilação à laser é contraindicada para ";
						if($corPelo==1){
							echo "<strong>pelos ruivos, loiros ou brancos</strong>, ";
						}
					
						if($roacutan==1){
							echo "<strong>pessoas que estão tomando Roacutan</strong>, ";
						}

						if($cancerVitiligo==1){
							echo "<strong>pessoas que estão diagnosticadas com câncer ou vitiligo</strong>, ";
						}
						echo "para mais informações, entre em contato conosco</h4>";
					}else{
						echo "<script language='javascript' type='text/javascript'>
									window.location.href='index.php';
								</script>";
					}
					?>
					</h3>
				<br /> 
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>