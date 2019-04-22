<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include 'php/validarLoginAdmin.php';
?>
<?php
	include 'php/headerAdmin.php';
?>
<div class="contact">
		<div class="container">
			<div class="col-md-12 ab-text w3-agileits">
			<h2 class="agileits-title" style="color: #666666 !important">Ficha Paciente</h2>
			<br> 
			</div>
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formAgendar">
					<form>
						<span>
							<i>Nome</i>
							<input type="text" value="Nome" readonly>
						</span>
						<span>
							<i>Idade</i>
							<input type="text" value="idade" readonly>
						</span>
						<span>
							<i>Email</i>
							<input type="email" value="email" readonly>
						</span>
						<span>
							<i>Telefone</i>
							<input type="tel" value="telefone" readonly>
						</span>
						<hr style="border-color: #7b1887">
						<span>
							<i>Fototipo</i>
							<input type="text" value="fototipo" readonly>
						</span>
						<span>
							<i>Coloração dos Pelos</i>
							<input type="text" value="cor" readonly>
						</span>
						<span>
							<i>Roacutan</i>
							<input type="text" value="sim ou nao" readonly>
						</span>
						<span>
							<i>Câncer ou Vitiligo</i>
							<input type="text" value="sim ou nao" readonly>
						</span>
						<span>
							<i>Espessura dos Pelos</i>
							<input type="text" value="espessura" readonly>
						</span>
						<br>
						<div class="w3_submit">
							<a href="clientesLista.php" class="botaoVoltarFicha">Voltar</a>
						</div>
					</form>
				</div>
		</div>
	</div>
<?php
	require "footer.php";
?>