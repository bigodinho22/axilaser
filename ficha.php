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
<?php 
	if(isset($_GET["id_usuario"])){
		$id_usuario = $_GET["id_usuario"];

		require "php/conexao.php";

		$query="select * from clientesformulario where id_cliente_formulario = $id_usuario";

		$resultado = $conexao->query($query);

		if($resultado->num_rows>0){
	        while($registro = $resultado->fetch_assoc()){
	        	$nome = $registro["nome"];
	        	$idade = $registro["idade"];
	        	$email = $registro["email"];
	        	$telefone = $registro["telefone"];
	        	$fototipo = $registro["fototipo"];
	        	$corPelo = $registro["corPelo"];
	        	$roacutan = $registro["roacutan"];
	        	$cancerVitiligo = $registro["cancerVitiligo"];
	        	$pelo = $registro["pelo"];
	     		$situacao = $registro["situacao"];
	        }
	    }
	}else{
    	echo "<script>alert(Nenhum cliente escolhido!); window.location.href='clientesLista.php';</script>";
    }
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
							<input type="text" value="<?php echo $nome ?>" readonly>
						</span>
						<span>
							<i>Idade</i>
							<input type="text" value="<?php echo $idade?>" readonly>
						</span>
						<span>
							<i>Email</i>
							<input type="email" value="<?php echo $email?>" readonly>
						</span>
						<span>
							<i>Telefone</i>
							<input type="tel" value="<?php echo $telefone?>" readonly>
						</span>
						<hr style="border-color: #7b1887">
						<span>
							<i>Fototipo</i>
							<input type="text" value="<?php echo $fototipo?>" readonly>
						</span>
						<span>
							<i>Coloração dos Pelos</i>
							<input type="text" value="<?php echo $corPelo?>" readonly>
						</span>
						<span>
							<i>Roacutan</i>
							<input type="text" value="<?php echo $roacutan?>" readonly>
						</span>
						<span>
							<i>Câncer ou Vitiligo</i>
							<input type="text" value="<?php echo $cancerVitiligo?>" readonly>
						</span>
						<span>
							<i>Espessura dos Pelos</i>
							<input type="text" value="<?php echo $pelo ?>" readonly>
						</span>
						<span>
							<i>Situação</i>
							<input type="text" value="<?php echo $situacao ?>" readonly>
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