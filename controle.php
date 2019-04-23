<?php
	include 'php/headerAdmin.php';
?>
<?php
	require 'php/validarLoginAdmin.php';
?>
<div>
	<div class="container">
		<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formCadastroSessao">
			<h2 class="agileits-title" style="color: #666666">Cadastro de Funcionário</strong></h2>
				<form action="php/.php" method="post">
					<span>
						<i>Login</i>
						<input type="text" name="loginFuncionario" required>
					</span>
					<span>
						<i>Senha</i>
						<input type="password" name="senhaFuncionario" required>
					</span>
					<div class="w3_submit">
						<input type="submit" value="Adicionar Funcionário">
					</div>
				</form>
				</div>
				<div class="tabelaAdminDiv">
					<table class="tabelaAdmin">
						<tr>
								<th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Dia</th>
								<th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Horários</th>
	                            <th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Agendamento</th>
	                            <th style= "text-align: center; 
	                            color: black; 
	                            border: 1px solid black; padding: 5px;">Opções</th>
						</tr>
						<?php
							include_once 'php/mostrarDatasDisponiveis.php';
						?>
						</table>
					</div>
		</div>
	</div>
<?php
	require 'footer.php';
?>