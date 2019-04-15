<?php
	require 'header.php';
?> 
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<h2 class="agileits-title">Login</h2>
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formLogin">
					<form action="php/logar.php" method="post">
						<span>
							<i>Email</i>
							<input type="email" name="emailLogin" placeholder=" " required="">
						</span>
						<span>
							<i>Senha</i>
							<input type="password" name="senhaLogin" placeholder="">
						</span>
						<br>
						<div class="w3_submit">
							<input type="submit" value="Entrar">
						</div>
					</form>
				</div>
		</div>
	</div>
	<!-- contact --> 
	<?php
		require 'footer.php';
	?>
	<!-- Time select -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({twentyFour: false});
	</script>
	<!-- //Time select --> 
	<!-- Calendar --> 
	<script src="js/jquery-ui.js"></script>
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script> 
	<!-- //Calendar -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- jarallax effect -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>   
	<!-- //jarallax effect -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>