<?php
	require 'header.php';
?>
<div class="contact">
		<div class="container">
			<div class="col-md-12 ab-text w3-agileits">
			<h2 class="agileits-title" style="color: #666666 !important">Pré Avaliação Online</h2>
			<h3  style="text-align: center;color: #666666 !important">Responda o questionário e descubra se você pode <br> realizar a Depilação a Laser!</h3>
			<br> 
			</div>
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formAgendar">
					<form action="php/receberDadosFormulario.php" method="post">
						<span>
							<i>Nome</i>
							<input type="text" name="nomeForm" placeholder=" " required="">
						</span>
						<span>
							<i>Email</i>
							<input type="email" name="emailForm" placeholder=" " required="">
						</span>
						<span>
							<i>Telefone</i>
							<input type="tel" name="telefoneForm" placeholder=" " required="">
						</span>
						<hr style="border-color: #7b1887">
						<span>
							<i>Qual o seu fototipo?</i>
							<div class="formFlex">
								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="I" id="I"> I
									<label for="I">
										<img src="images/fototipoI.jpg" style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="II" id="II"> II
									<label for="II">
										<img src="images/fototipoII.jpg" style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="III" id="III"> III
									<label for="III">
										<img src="images/fototipoIII.jpg"  style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="IV" id="IV"> IV
									<label for="IV">
										<img src="images/fototipoIV.jpg"  style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="V" id="V"> V
									<label for="V">
										<img src="images/fototipoV.jpg"  style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="VI" id="VI"> VI
									<label for="VI">
										<img src="images/fototipoVI.jpg"  style="width: 50%;">
									</label>
								</div>
							</div>
						</span>
						<span>
							<i>Qual a cor de seu pelo? (Região que você deseja fazer depilação a laser)</i>
							<select style="width: 100%;" name="corPelo">
								<option value=1>Loiro</option>
								<option value=1>Ruivo</option>
								<option value=2>Preto</option>
								<option value=2>Castanho</option>
								<option value=1>Branco</option>
							</select>
						</span>
						<span>
							<i>Você está fazendo uso ou já fez do remédio Roacutan?</i>
							<select style="width: 100%;" name="roacutan">
								<option value=1>Sim, estou fazendo</option>
								<option value=2>Sim, já fiz</option>
								<option value=3>Não</option>
							</select>
						</span>
						<span>
							<i>Tem câncer ou vitiligo?</i>
							<select style="width: 100%;" name="cancerVitiligo">
								<option value=1>Sim, tenho câncer e/ou vitiligo</option>
								<option value=2>Sim, já tive câncer e/ou vitiligo</option>
								<option value=3>Não</option>
							</select>
						</span>
						<div class="w3_submit">
							<input type="submit" value="Enviar">
						</div>
					</form>
				</div>
		</div>
	</div>

<?php
	require 'footer.php';
?>